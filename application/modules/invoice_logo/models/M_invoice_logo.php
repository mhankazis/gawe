<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_invoice_logo extends CI_Model {

	function tampil()
	{
		return $this->db->get('pengumuman')->result();
	}
	function show()
	{
		$id=1;
		$this->db->select('*')
			->from('website_setting')
			->where('id_website_setting',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	function count()
	{
		$this->db->select('*')
			->from('customer_information');
		$query = $this->db->get();
		return $query->num_rows();
	}
	function add_logo()
	{
		$id=1;
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 900;
		$config['max_height']		= 200;
		$config['file_name'] 		= $nmfile;

		$this->upload->initialize($config);

		if($_FILES['logo_left']['name'])
		{
			if ($this->upload->do_upload('logo_left'))
			{
				$gbr = $this->upload->data();
				$data = array(

					'invoice_logo_left' 			=> $gbr['file_name'],

				);
				$this->db->where('id_website_setting',$id)->update('website_setting', $data);

			}
		}
		elseif($_FILES['logo_right']['name'])
		{
			if ($this->upload->do_upload('logo_left'))
			{
				$gbr = $this->upload->data();
				$data = array(

					'invoice_logo_right' 			=> $gbr['file_name'],

				);
				$this->db->where('id_website_setting',$id)->update('website_setting', $data);

			}
		}

	}


}
