<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospot_user extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_Hospot_user');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "Hospot_user",
			'namafileview' 	=> "V_Hospot_user",
			'show'		=> $this->M_Hospot_user->show(),
			
			// 'tampil_dudi'		=> $this->M_Hospot_user->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}



	function service_information()
	{

		$data = array(
			'namamodule' 	=> "Hospot_user",
			'namafileview' 	=> "V_service_info",
			
		);
		echo Modules::run('template/tampilCore', $data);
	}



	function add_customer()
	{
		$this->M_Hospot_user->add_customer();
		
	}

	function add_service($id)
	{
		$this->M_Hospot_user->add_service($id);
		redirect('Hospot_user');
		
		// echo $id;
		
	}
	function service_plan($id)
	{

		$data = array(
			'namamodule' 	=> "Hospot_user",
			'namafileview' 	=> "V_Hospot_add",
			'id' 	=> $id,

			
		);
		echo Modules::run('template/tampilCore', $data);
	}










	function detail1()
	{
		$data = array(
			'namamodule' 	=> "Hospot_user",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_Hospot_user->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	

	



	function detail2()
	{
		$data = array(
			'namamodule' 	=> "Hospot_user",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_Hospot_user->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_Hospot_user->tambah();
		redirect('Hospot_user');
	}

	function edit()
	{
		$this->M_Hospot_user->edit();
		redirect('Hospot_user');
	}

	function hapus($id)
	{
		$this->M_Hospot_user->hapus($id);
		redirect('Hospot_user');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "Hospot_user",
			'namafileview' 	=> "V_Hospot_user",
			'tampil'		=> $this->M_Hospot_user->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 