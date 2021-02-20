<?php
/**
 * 
 */
class Home extends CI_Controller
{
	
	function index()
	{
		$this->load->view('home');
	}

	function insert()
	{
		$name=$this->input->post("name");
		for($i=0;$i<count($name);$i++)
		{
			$data=[
				"name"=>$name[$i]
			];
			$this->Model1->insert_model($data);
		}
	}
}
?>