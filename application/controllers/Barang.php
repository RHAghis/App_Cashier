<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
		//Do your magic here
	}

	public function index()
	{
		$data['listKategori'] = $this->Model_barang->getDataKategori();
		$this->load->view('barang/viewDataBarang', $data);
		
	}

	public function GetDataBarangAjax()
	{
		$data 	= $this->Model_barang->getDataBarang();
        echo json_encode($data);
	}

	public function GetBarangUsId()
	{
		$kd_bar 	= $this->input->get('kd_barang');
		$data 		= $this->Model_barang->getBarangbyKode($kd_bar);
		echo json_encode($data);
	}

	public function SaveDataBarang()
	{
		$kd_bar		=	$this->input->post('kd_barang');
		$kategori	=	$this->input->post('kategori');
		$nama		=	$this->input->post('nama_barang');
		$warna		=	$this->input->post('warna');
		$hjual		=	$this->input->post('harga_jual');
		$stock		=	$this->input->post('stock');
		$data 		= 	$this->Model_barang->saveDataBarang($kd_bar, $kategori, $nama, $warna, $hjual, $stock);
		echo json_encode($data);
	}

	public function EditDataBarang()
	{
		$kd_bar		=	$this->input->post('kd_barang');
		$kategori	=	$this->input->post('kategori');
		$nama		=	$this->input->post('nama_barang');
		$warna		=	$this->input->post('warna');
		$hjual		=	$this->input->post('harga_jual');
		$stock		=	$this->input->post('stock');
		$data 		= 	$this->Model_barang->editDataBarang($kd_bar, $kategori, $nama, $warna, $hjual, $stock);
		echo json_encode($data);
	}

	public function DelDataBarang()
	{
		$kd_bar = $this->input->post('kd_barang');
        $data 	= $this->Model_barang->delBarang($kd_bar);
        echo json_encode($data);
	}

	public function GetDataKategoriAjax()
	{
		$data 	= $this->Model_barang->getDataKategori();
        echo json_encode($data);
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */