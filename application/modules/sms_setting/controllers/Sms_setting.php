<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_logo extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_invoice_logo');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{


		$data = array(
			'namamodule' 	=> "invoice_logo",
			'namafileview' 	=> "V_invoice_logo",
			'show' 	=> $this->M_invoice_logo->show(),



		);
		echo Modules::run('template/tampilCore', $data);
	}

	function add_logo()
	{
		$this->M_invoice_logo->add_logo();
		redirect('invoice_logo');
	}
	
}
