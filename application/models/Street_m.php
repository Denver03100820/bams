<?php

class Street_m extends MY_Model
{
	protected $table_name = "street";
	protected $primary_key = "street_id";
	protected $order_by = "id";
	protected $timestamps = TRUE;
	public $rules = array(
		'street_name' => array('field' => 'street_name', 'label' => 'Street name', 'rules' => 'trim|required|max_length[20]|xss_clean|strtoupper'),
	);

	

	function __construct()
	{
		parent::__construct();
	}


	
}

/*Location: ./application/models/user_m.php*/