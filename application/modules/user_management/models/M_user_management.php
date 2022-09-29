<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_management extends CI_Model {

	function tampil()
	{
		return $this->db->get('pengumuman')->result();
	}
	function show($limit,$start)
	{
		$this->db->select('*')
			->join('customer_information', 'customer_information.id_customer = tb_login.id_customer');

		$query = $this->db->get('tb_login',$limit,$start);
		return $query->result();
	}
	function count()
	{
		$this->db->select('*')
			->from('customer_information');
		$query = $this->db->get();
		return $query->num_rows();
	}


}
