<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_app_setting extends CI_Model {

	function tampil()
	{
		return $this->db->get('pengumuman')->result();
	}
	function show_general()
	{
		$id=1;
		$this->db->select('*')
			->from('general_setting')
			->where('id_general',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	function detail()
	{
		return $this->db
		->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('gelombang',1)
		->get()
		->result();
	}
	function detail2()
	{
		return $this->db
		->from('siswa')
		->join('dudi', 'dudi.id_dudi = siswa.id_dudi')
		->where('gelombang',2)
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

	

	function tambah()
	{
		$judul_pengumuman 		= $this->input->post('judul_pengumuman');
		$tanggal	= $this->input->post('tanggal');
		$isi_pengumuman	= $this->input->post('isi_pengumuman');
		$tertuju	= $this->input->post('tertuju');

		

		$data = array(
			'judul_pengumuman'		=> $judul_pengumuman,
			'tanggal'		=> $tanggal,
			'isi_pengumuman' 				=> $isi_pengumuman,
			'tertuju'						=>$tertuju,


		);
		$this->db->insert('pengumuman', $data);


		
	}


	function add_general_setting()
	{
		$id_general=$_POST["id_general"];
		$company_name=$_POST["company_name"];
		$company_mobile=$_POST["company_mobile"];
		$company_acc_invoice=$_POST["company_acc_invoice"];
		$company_bank=$_POST["company_bank"];
		$company_acc_name=$_POST["company_acc_name"];
		$company_acc_number=$_POST["company_acc_number"];
		$company_auto_invoice=$_POST["company_auto_invoice"];
		$company_lock_renewal=$_POST["company_lock_renewal"];
		$company_address=$_POST["company_address"];



		$data = array(
			'company_name'		=> $company_name,
			'company_mobile'		=> $company_mobile,
			'company_invoice' 				=> $company_acc_invoice,
			'company_bank'						=>$company_bank,
			'company_acc_name'		=> $company_acc_name,
			'company_acc_number' 				=> $company_acc_number,
			'company_auto_invoice'						=>$company_auto_invoice,
			'company_lock_renewal'		=> $company_lock_renewal,
			'company_address' 				=> $company_address,


		);
		$this->db->where('id_general',$id_general)->update('general_setting', $data);



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
		$tanggal		= $this->input->post('tanggal');
		$isi_pengumuman	= $this->input->post('isi_pengumuman');
		$tertuju	= $this->input->post('tertuju');

		{
			if ($this->upload->do_upload(''))
			{
				$data = array(
					'id_pengumuman'		=> $id_pengumuman,
					'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'		=> $isi_pengumuman,
					'tertuju'		=> $tertuju,
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);

			}
			else{
				$data = array(
					'judul_pengumuman'		=> $judul_pengumuman,
					'tanggal'		=> $tanggal,
					'isi_pengumuman'		=> $isi_pengumuman,
					'tertuju'		=> $tertuju,
				);
				$this->db->where('id_pengumuman',$id_pengumuman)->update('pengumuman', $data);
			}	 
		}
		
	}

	function hapus($id)
	{
		$this->db->where('id_pengumuman', $id)->delete('pengumuman');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('judul_pengumuman',$cari)->get('pengumuman')->result();
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
