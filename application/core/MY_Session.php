<?php 
class MY_Session extends CI_Session
{

	function sess_update()
	{
		$CI = get_instance();
		if ( ! $CI->input->is_ajax_request())
		{
		    parent::sess_update();
		}
		
		// Listen to HTTP_X_REQUESTED_WITH 
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest') 
		{
			parent::sess_update();
		}
	}
}