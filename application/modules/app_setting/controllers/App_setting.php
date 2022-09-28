<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_setting extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_app_setting');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "app_setting",
			'namafileview' 	=> "V_app_setting",
			'show_general' 	=> $this->M_app_setting->show_general(),

			// 'tampil_dudi'		=> $this->M_app_setting->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "app_setting",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_app_setting->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "app_setting",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_app_setting->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_app_setting->tambah();
		redirect('app_setting');
	}
	function add_general_setting()
	{
		$this->M_app_setting->add_general_setting();
		redirect('app_setting');






	}

	function edit()
	{
		$this->M_app_setting->edit();
		redirect('app_setting');
	}

	function hapus($id)
	{
		$this->M_app_setting->hapus($id);
		redirect('app_setting');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "app_setting",
			'namafileview' 	=> "V_app_setting",
			'tampil'		=> $this->M_app_setting->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
