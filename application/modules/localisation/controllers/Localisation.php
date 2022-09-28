<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Localisation extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_localisation');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "localisation",
			'namafileview' 	=> "V_localisation",
			'show' 	=> $this->M_localisation->show(),

			// 'tampil_dudi'		=> $this->M_localisation->tampil_dudi(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function website_setting()
	{
		$this->M_localisation->website_setting();
		redirect('localisation');

	}

	



	function detail1()
	{
		$data = array(
			'namamodule' 	=> "localisation",
			'namafileview' 	=> "V_data_detail",
			'detail'		=> $this->M_localisation->detail(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	function detail2()
	{
		$data = array(
			'namamodule' 	=> "localisation",
			'namafileview' 	=> "V_data_detail2",
			'detail'		=> $this->M_localisation->detail2(),
			// 'tampil_jurusan'		=> $this->m_data_dudi->filter_jurusan(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_localisation->tambah();
		redirect('localisation');
	}


	function edit()
	{
		$this->M_localisation->edit();
		redirect('localisation');
	}

	function hapus($id)
	{
		$this->M_localisation->hapus($id);
		redirect('localisation');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "localisation",
			'namafileview' 	=> "V_localisation",
			'tampil'		=> $this->M_localisation->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
