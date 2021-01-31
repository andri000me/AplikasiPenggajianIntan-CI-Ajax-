<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('Model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function beranda(){
		$data['title']="Halaman Beranda";
		$this->load->view("header", $data);
		$this->load->view("beranda");
	}
	public function kelolaGaji(){
		$data['title']="Halaman Kelola Data Gaji";
		$data['jabatan'] = $this->Model->jabatanList();
		$this->load->view("header", $data);
		$this->load->view("kelolaGaji");
	}
	public function kelolaUser(){
		$data['title']="Halaman Kelola Data User";
		$this->load->view("header", $data);
		$this->load->view("kelolaUser");
	}
	public function kelolaJabatan(){
		$data['title']="Halaman Kelola Data Jabatan";
		$this->load->view("header", $data);
		$this->load->view("kelolaJabatan");
	}
	public function laporanGaji(){
		$data['title']="Halaman Laporan Gaji";
		$this->load->view("header", $data);
		$this->load->view("laporanGaji",$data);
	}
	public function laporanGajiPrint(){
		$this->load->view("laporanGajiPrint");
	}
	function tampilGaji(){
		$data=$this->Model->gajiList();
		echo json_encode($data);
		
	}
	function tampilJabatan(){
		$data=$this->Model->jabatanList();
		echo json_encode($data);
		
	}
	public function laporanUser(){
		$data['title']="Halaman Laporan Gaji";
		$this->load->view("header", $data);
		$this->load->view("laporanUser");
	}
	public function simpanGaji(){
		$data = array(				
			'namaKaryawan' 		=> $this->input->post('namaKaryawan'), 
			'alamatKaryawan' 	=> $this->input->post('alamatKaryawan'), 
			'jabatanKaryawan' 	=> $this->input->post('jabatanKaryawan'), 
			'gajiPokok' 		=> $this->input->post('gajiPokok'), 
			'tunjanganMakan' 	=> $this->input->post('tunjanganMakan'),
			'tunjanganPulsa' 	=> $this->input->post('tunjanganPulsa'), 
			'bonusKaryawan' 	=> $this->input->post('bonusKaryawan'), 
			'totalTerima' 		=> $this->input->post('totalTerima'),  
		);
	$result=$this->db->insert('tbl_gaji',$data);
	return $result;
	}
	public function simpanJabatan(){
		$data = array(				
			'namaJabatan' 		=> $this->input->post('namaJabatan')
		);
	$result=$this->db->insert('tbl_jabatankaryawan',$data);
	return $result;
	}
	function hapusGaji(){
		$data=$this->Model->hapusGaji();
		echo json_encode($data);
	}
	function hapusJabatan(){
		$data=$this->Model->hapusJabatan();
		echo json_encode($data);
	}
	function editGaji($id){
		$data['title']="Halaman Edit Data Gaji";
		$data['gaji'] = $this->Model->gajiById($id);
		$this->load->view("header", $data);
		$this->load->view("kelolaGajiEdit", $data);
	}
	function editGajiProses(){
		$data=$this->Model->updateGaji();
		echo json_encode($data);
	}

}
