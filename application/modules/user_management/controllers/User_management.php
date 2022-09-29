<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_management extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_user_management');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$this->load->library('pagination');
		$config['base_url'] 		= site_url('user_management/index'); //site url
		$config['total_rows'] 		= $this->M_user_management->count(); //total row
		$config['per_page'] = 8;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$data = array(
			'namamodule' 	=> "user_management",
			'namafileview' 	=> "V_user_management",
			'show' 	=> $this->M_user_management->show($config["per_page"], $data['page']),

			'pagination' 	=> $this->pagination->create_links(),

			// 'tampil_dudi'		=> $this->M_user_management->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
