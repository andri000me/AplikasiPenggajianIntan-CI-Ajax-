<?php
class Model extends CI_Model{
	function gajiList(){
		$this->db->select('*');
		$this->db->from('tbl_gaji');
		$query = $this->db->get();
		return $query->result();
	}
	function jabatanList(){
		$hasil=$this->db->get('tbl_jabatankaryawan');
		return $hasil->result();
	}
	function hapusGaji(){
		$id_gaji=$this->input->post('id_gaji');
		$this->db->where('id_gaji', $id_gaji);
		$result=$this->db->delete('tbl_gaji');
		return $result;
	}
	function hapusJabatan(){
		$id_jabatan=$this->input->post('idJabatan');
		$this->db->where('idJabatan', $id_jabatan);
		$result=$this->db->delete('tbl_jabatankaryawan');
		return $result;
	}
	function gajiById($id){
		return $this->db->get_where('tbl_gaji',['id_gaji'=>  $id])->row_array();
	}
	function updateGaji(){
		$id_gaji=$this->input->post('id_gaji');
		$namaKaryawan=$this->input->post('namaKaryawan');
		$alamatKaryawan=$this->input->post('alamatKaryawan');
		$jabatanKaryawan=$this->input->post('jabatanKaryawan');
		$gajiPokok=$this->input->post('gajiPokok');
		$tunjanganMakan=$this->input->post('tunjanganMakan');
		$tunjanganPulsa=$this->input->post('tunjanganPulsa');
		$bonusKaryawan=$this->input->post('bonusKaryawan');
		$totalTerima=$this->input->post('totalTerima'); 

		$this->db->set('namaKaryawan', $namaKaryawan);
		$this->db->set('alamatKaryawan', $alamatKaryawan);
		$this->db->set('jabatanKaryawan', $jabatanKaryawan);
		$this->db->set('gajiPokok', $gajiPokok);
		$this->db->set('tunjanganMakan', $tunjanganMakan);
		$this->db->set('tunjanganPulsa', $tunjanganPulsa);
		$this->db->set('bonusKaryawan', $bonusKaryawan);
		$this->db->set('totalTerima', $totalTerima);
		$this->db->where('id_gaji', $id_gaji);
		$result=$this->db->update('tbl_gaji');
		return $result;	
	}
		
}