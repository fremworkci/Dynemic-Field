<?php

/**
 * 
 */
class Model1 extends CI_Model
{
	
	function insert_model($data)
	{
		return $this->db->insert("login",$data);
	}
}
?>