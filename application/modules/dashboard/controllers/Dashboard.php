<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_dashboard');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "dashboard",
			'namafileview' 	=> "V_dashboard",
			
			// 'tampil_dudi'		=> $this->M_dashboard->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail1()
	{
		$data = array(
			'namamodule' 	=> "dashboard",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_dashboard->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "dashboard",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_dashboard->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_dashboard->tambah();
		redirect('dashboard');
	}

	function edit()
	{
		$this->M_dashboard->edit();
		redirect('dashboard');
	}

	function hapus($id)
	{
		$this->M_dashboard->hapus($id);
		redirect('dashboard');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "dashboard",
			'namafileview' 	=> "V_dashboard",
			'tampil'		=> $this->M_dashboard->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 