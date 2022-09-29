<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_hospot_user extends CI_Model
{

	function show()
	{

		$this->db->select('*')
			->join('customer_information', 'customer_information.id_customer = customer_service.id_customer')
			->join('service_plan', 'service_plan.id_service_plan = customer_service.id_service_plan')
			->	join('tb_login', 'tb_login.id_user = customer_service.id_user');

		$query = $this->db->get('customer_service');
		return $query->result();
	}

	function cek_id($id_customer){
		$this->db->select('id_customer');
		$this->db->where('id_customer',$id_customer);
		$query =$this->db->get('customer_information');
		$row = $query->row();
		if ($query->num_rows > 0)
		{
			return "";
		}else{

			return $row->id_customer;
		}
	}

	function show_edit($id)
	{

		$this->db->select('*')
			->join('customer_information', 'customer_information.id_customer = customer_service.id_customer')
			->join('service_plan', 'service_plan.id_service_plan = customer_service.id_service_plan')
			->join('tb_login', 'tb_login.id_user = customer_service.id_user')
			->where('customer_service.id_customer', $id);

		$query = $this->db->get('customer_service');
		return $query->row_array();
	}

	function show_service_plan()
	{

		return $this->db->get('service_plan')->result();
	}

	function show_server()
	{

		return $this->db->get('server_name')->result();
	}

	function data_owner($id_owner)
	{
		$this->db->select('*')
			->where('tb_login.id_user', $id_owner);
		$query = $this->db->get('tb_login');
		return $query->row_array();
	}


	function add_customer()
	{
		$odp = $this->input->post('odp');
		$id_customer = $this->input->post('id_customer');
		$name = $this->input->post('name');
		$id_card = $this->input->post('id_card');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');

		$lon = $this->input->post('lon');
		$lat = $this->input->post('lat');




		$data = array(
			'id_customer' => $id_customer,
			'odp' => $odp,
			'name' => $name,
			'id_card' => $id_card,
			'mobile' => $mobile,
			'email' => $email,
			'latitude' => $lat,
			'longitude' => $lon,


		);
		$this->db->insert('customer_information', $data);


		$insert_id = $this->db->insert_id();
		$username					= $this->input->post('username');
		$password 					= $this->input->post('password');
		$password1 					= sha1($password);
		$level 						= 2;

		$data = array(
			'id_customer'			=> $id_customer,
			'nama_lengkap'				=> $username,
			'password'				=> $password1,
			'email'				=> $email,
			'level'					=> $level,

		);

		$this->db->insert('tb_login', $data);
		redirect(base_url() . "hospot_user/service_plan/" . $id_customer);


	}


	function add_service($id)
	{
		$id_server_name = $this->input->post('sever_name');
		$id_data_owner = $this->input->post('data_owner');
		$id_service_plan = $this->input->post('service_plan');
		$type_service = $this->input->post('type_service');
		$payment_type = $this->input->post('payment_type');
		$payment_status = $this->input->post('trx_status');
		$account_status = $this->input->post('account_status');
		$bind_login = $this->input->post('bind_login');
		$discount = $this->input->post('discount');
		$reseller_fee = $this->input->post('reseller_fee');
		$instalation_fee = $this->input->post('instalation_fee');
		$device_fee = $this->input->post('device_fee');
		$due_date = $this->input->post('due_date');


		$data = array(
			'id_customer' => $id,
			'id_server_name' => $id_server_name,
			'id_user' => $id_data_owner,
			'id_service_plan' => $id_service_plan,
			'type_service' => $type_service,
			'payment_type' => $payment_type,
			'payment_status' => $payment_status,
			'account_status' => $account_status,
			'bind_login' => $bind_login,
			'discount' => $discount,
			'discount' => $discount,
			'reseller_fee' => $reseller_fee,
			'instalation_fee' => $instalation_fee,
			'device_fee' => $device_fee,
			'due_date' => $due_date,


		);
		$this->db->insert('customer_service', $data);


	}

	function action_edit_user($id)
	{
		$odp = $this->input->post('odp');
		$id_customer = $this->input->post('id_customer');
		$name = $this->input->post('name');
		$id_card = $this->input->post('id_card');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password_enc = sha1($password);

		$lon = $this->input->post('lon');
		$lat = $this->input->post('lat');


		$data = array(
			'id_customer' => $id_customer,
			'odp' => $odp,
			'name' => $name,
			'id_card' => $id_card,
			'mobile' => $mobile,
			'email' => $email,
			'username' => $username,
			'password' => $password_enc,
			'latitude' => $lat,
			'longitude' => $lon,


		);
		$this->db->where('id_customer',$id)->update('customer_information', $data);
		redirect(base_url() . "Hospot_user/edit_user/" . $id_customer);


	}

	function action_edit_plan($id,$id_plan)
	{
		$id_server_name = $this->input->post('sever_name');
		$id_data_owner = $this->input->post('data_owner');
		$id_service_plan = $this->input->post('service_plan');

		$payment_type = $this->input->post('payment_type');
		$payment_status = $this->input->post('trx_status');
		$account_status = $this->input->post('account_status');
		$bind_login = $this->input->post('bind_login');
		$discount = $this->input->post('discount');
		$reseller_fee = $this->input->post('reseller_fee');
		$instalation_fee = $this->input->post('instalation_fee');
		$device_fee = $this->input->post('device_fee');
		$due_date = $this->input->post('due_date');


		$data = array(
			'id_customer' => $id,
			'id_server_name' => $id_server_name,
			'id_user' => $id_data_owner,
			'id_service_plan' => $id_service_plan,
			'type_service' => 'hotspot',
			'payment_type' => $payment_type,
			'payment_status' => $payment_status,
			'account_status' => $account_status,
			'bind_login' => $bind_login,
			'discount' => $discount,
			'reseller_fee' => $reseller_fee,
			'instalation_fee' => $instalation_fee,
			'device_fee' => $device_fee,
			'due_date' => $due_date,


		);
		$this->db->where('id_customer_service',$id_plan)->update('customer_service', $data);
		redirect(base_url() . "Hospot_user/edit_service_plan/" . $id);


	}


	function hitsi()
	{

		$this->db->select('*')
			->from('siswa');
		$query = $this->db->get();
		return $query->num_rows();

	}

	function detail()
	{
		return $this->db
			->from('siswa')
			->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
			->where('gelombang', 1)
			->get()
			->result();
	}

	function detail2()
	{
		return $this->db
			->from('siswa')
			->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
			->where('gelombang', 2)
			->get()
			->result();
	}

	function hitdudi()
	{

		$this->db->select('*')
			->from('dudi');
		$query = $this->db->get();
		return $query->num_rows();

	}

	function hitgel1()
	{
		$i = 1;
		$this->db->select('*')
			->from('siswa')
			->where('gelombang', $i);
		$query = $this->db->get();
		return $query->num_rows();

	}

	function hitgel2()
	{
		$i = 2;
		$this->db->select('*')
			->from('siswa')
			->where('gelombang', $i);
		$query = $this->db->get();
		return $query->num_rows();

	}

	function hitjurusan()
	{

		$this->db->select('*')
			->from('jurusan');
		$query = $this->db->get();
		return $query->num_rows();

	}

	function hitkelas()
	{

		$this->db->select('*')
			->from('kelas');
		$query = $this->db->get();
		return $query->num_rows();

	}

	function tambah()
	{
		$judul_pengumuman = $this->input->post('judul_pengumuman');
		$tanggal = $this->input->post('tanggal');
		$isi_pengumuman = $this->input->post('isi_pengumuman');
		$tertuju = $this->input->post('tertuju');


		$data = array(
			'judul_pengumuman' => $judul_pengumuman,
			'tanggal' => $tanggal,
			'isi_pengumuman' => $isi_pengumuman,
			'tertuju' => $tertuju,


		);
		$this->db->insert('pengumuman', $data);


	}
	// function tampil_dudi()
	// {
	// 	$this->db->select('*')
	// 	         ->from('dudi')
	// 	$query = $this->db->get('kelas');
	// 	return $query->result();
	// 	$jml = mysqli_num_rows($query);
	// }

	function edit()
	{
		$id_pengumuman = $this->input->post('id_pengumuman');
		$judul_pengumuman = $this->input->post('judul_pengumuman');
		$tanggal = $this->input->post('tanggal');
		$isi_pengumuman = $this->input->post('isi_pengumuman');
		$tertuju = $this->input->post('tertuju');

		{
			if ($this->upload->do_upload('')) {
				$data = array(
					'id_pengumuman' => $id_pengumuman,
					'judul_pengumuman' => $judul_pengumuman,
					'tanggal' => $tanggal,
					'isi_pengumuman' => $isi_pengumuman,
					'tertuju' => $tertuju,
				);
				$this->db->where('id_pengumuman', $id_pengumuman)->update('pengumuman', $data);

			} else {
				$data = array(
					'judul_pengumuman' => $judul_pengumuman,
					'tanggal' => $tanggal,
					'isi_pengumuman' => $isi_pengumuman,
					'tertuju' => $tertuju,
				);
				$this->db->where('id_pengumuman', $id_pengumuman)->update('pengumuman', $data);
			}
		}

	}

	function hapus($id)
	{
		$this->db->where('id_customer', $id)->delete('customer_information');
	}

	function cari()
	{
		$cari = $this->input->post('cari');
		return $this->db->like('judul_pengumuman', $cari)->get('pengumuman')->result();
	}


	function chartsenin()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 0 AND 0 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");

		return $query->num_rows();
	}

	function chartselasa()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 1 AND 1 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartrabu()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 2 AND 2 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartkamis()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 3 AND 3 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartjumat()
	{
		$query = $this->db->query("SELECT * FROM jurnal WHERE WEEKDAY(CONCAT(tanggal)) BETWEEN 4 AND 4 AND WEEK(CONCAT(tanggal)) = WEEK(now()) GROUP BY id_jurnal");
		return $query->num_rows();
	}

	function chartsabtu()
	{
		$query = $this->db->query("SELECT * FROM riwayat_pelanggaran WHERE WEEKDAY(CONCAT(tanggal_pelanggaran)) BETWEEN 5 AND 5 AND WEEK(CONCAT(tanggal_pelanggaran)) = WEEK(now()) GROUP BY id_siswa");
		return $query->num_rows();
	}
}
