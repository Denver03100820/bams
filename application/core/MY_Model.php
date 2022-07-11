<?php 

class MY_Model extends CI_Model
{
	protected $table_name = "";
	protected $primary_key = "Id";
	protected $primary_filter = "intval";
	protected $order_by = '';

	protected $timestamps = FALSE;
	protected $soft_delete = TRUE;
	protected $page_limit = 25;

	protected $protected_attribute = array();

	public $rules = array();

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
	}

	public function is_soft_delete()
	{
		return $this->soft_delete;
	}

	public function array_from_object($fields)
	{
		$data = array();
		foreach ($fields as $key => $value) 
		{
			$data[$key] = $value;
		}

		return $data;
	}

	public function array_from_post($fields)
	{
		$data = array();
		foreach ($fields as $field) 
		{
			$data[$field] = $this->input->post($field);
		}

		return $data;
	}

	public function get($id = NULL, $single = FALSE)
	{
		if ($id != NULL) 
		{
			$filter = $this->primary_filter;
			$id = $filter($id);
			$this->db->where("$this->table_name"."."."$this->primary_key", $id);
			$method = 'row';
		}
		elseif ($single == TRUE) 
		{
			$this->db->limit(1);
			$method = 'row';
		}
		else
		{
			$method = 'result';
		}

		// if (!count($this->db->ar_orderby)) 
		// {
		// 	$this->db->order_by($this->order_by);
		// }


		if ($this->soft_delete === TRUE)
		$this->db->where("$this->table_name.is_actived", 1);


		return $this->db->get($this->table_name)->$method();
	}

	public function get_by($where, $single = FALSE)
	{
		$this->db->where($where);
		return $this->get(NULL, $single);
	}

	public function count($where = NULL)
	{
		$this->db->from($this->table_name);

		if (isset($where))
		$this->db->where($where);


		if ($this->soft_delete === TRUE)
		$this->db->where("$this->table_name.is_actived", 1);


		return $this->db->count_all_results();
	}

	public function protect_attribute($post)
	{
		if (is_array($post)) 
		{
			foreach ($this->protected_attribute as $attr) 
			{
				if (in_array($attr, $this->protected_attribute)) 
					unset($post[$attr]);
			}
		}

		return $post;
	}

	public function save($post, $id = NULL)
	{

		$post = $this->protect_attribute($post);

		# set timestamps
		if ($this->timestamps == TRUE) 
		{
			$now = date('Y-m-d H:i:s');
			$id || $post['created_at'] = $now;
			$post['updated_at'] = $now;
		}

		# insert
		if ($id === NULL) 
		{
			!isset($post[$this->primary_key]) || $post[$this->primary_key] = NULL;
			$this->db->set($post);
			$this->db->insert($this->table_name, $post);
			$id = $this->db->insert_id();			
			$this->db->flush_cache();

			// $this->session->set_flashdata('id', $id);
			// $this->session->set_flashdata('error', "Record Id $id has been successfully saved.");

		}
		# update
		else
		{
			$filter = $this->primary_filter;
			$id = $filter($id);
			$this->db->set($post);
			$this->db->where($this->primary_key, $id);
			$this->db->update($this->table_name, $post);
			$this->db->flush_cache();
			
			// $this->session->set_flashdata('id', $id);
			// $this->session->set_flashdata('error', "Record Id $id has been successfully updated.");
		}


		return $id;
	}

	public function delete_by($where, $single = FALSE)
	{

		$this->db->set('is_actived', 0);
		$this->db->set('deleted_at', date('Y-m-d H:i:s'));
		$this->db->where($where);

		if ($this->soft_delete === TRUE) 
		{
			$this->db->update($this->table_name);
			$this->db->flush_cache();
		}
		else
		{
			$this->session->set_flashdata('error', "Sorry this application can not perform a batch permanently deletion.<br/>If still want to continue you have to removed it individually.");
			$this->db->flush_cache();
			return FALSE;
		}
	}

	public function delete($id)
	{
		$filter = $this->primary_filter;
		$id = $filter($id);

		if (!$id) 
		{
			return FALSE;
		}

		
		$this->db->set('is_actived', 0);
		$this->db->set('deleted_at', date('Y-m-d H:i:s'));
		$this->db->where($this->primary_key, $id);
		$this->db->limit(1);

		if ($this->soft_delete === TRUE) 
		{
			
			$this->db->update($this->table_name);
			$this->db->flush_cache();

			$this->session->set_flashdata('id', $id);
			$this->session->set_flashdata('error', "Record id $id has been successfully deleted.");
		}
		else
		{
			$this->session->set_flashdata('error', "Record id $id has been permanently deleted.");
			$this->db->flush_cache();

			$this->session->set_flashdata('id', $id);
			$this->db->delete($this->table_name);
		}

	}


	public function pivot_table($tablename, $pivotfield, $sumfield, $aggr = 'SUM', $sql_only = FALSE)
	{
		$this->db->select($pivotfield)->distinct();
		$cols = $this->db->get($tablename)->result();

		$cnt = count($cols);
		$loop = 1;
		$stmt = "";
		dump($cols);
		foreach ($cols as $col)
		{
			$aggr = strtoupper($aggr);
			if ( $aggr == 'SUM') 
			{
				$stmt .= "SUM(IF($pivotfield = '".$col->$pivotfield."', `$sumfield`, 0)) as '" . $col->$pivotfield . "'";
			}
			elseif ( $aggr == 'COUNT' ) 
			{
				$stmt .= "SUM(IF($pivotfield = '".$col->$pivotfield."', 1, 0)) as '" . $col->$pivotfield . "'";
			}
			$stmt .= ($cnt != $loop++) ? ", " : "";
		}
		
		return $sql_only == FALSE ? $this->db->select($stmt, FALSE)->get() : $stmt;
	}
	

	public function sql_stmt($stmt, $escape = TRUE)
	{
		return $this->db->select($stmt, $escape);
	}


}

/*Location: ./application/models/MY_Model.php*/
 ?>