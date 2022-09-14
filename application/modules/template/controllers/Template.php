<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template extends MX_Controller {

	function __construct()
	{
		parent:: __construct();
		//load model

		$this->load->model('m_template');
	}


	

	// view core templating
	public function index()
	{
		
		$this->load->view('view_template_core');
	}

	public function tampilCore($data)
	{
		$id = $this->session->userdata('session_id');
		$data['woy'] = $this->m_template_admin->oke($id);
		// if($this->session->userdata('session_id') != "login"){
		// 	redirect(base_url("login"));
		// }
		// if ( empty( $this->session->userdata('session_id') ) )
		// {
		// 	redirect(base_url("login"));
		// }
		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect(base_url("login"));
		}
		$data['nama'] = $this->m_template_admin->oke($id);

		
		$this->load->view('view_template_core',$data);
	}

}
