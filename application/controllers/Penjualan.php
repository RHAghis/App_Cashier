<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_penjualan');
		//Do your magic here
	}
	
	public function index()
	{
		$this->load->view('penjualan/viewDataPenjualan');
	}

	public function GetDataPenjualan()
	{
		$data 	= $this->Model_penjualan->getDataPenjualan();
        echo json_encode($data);
	}

	public function GetDataPenjualanUsId()
	{
		$kd_penjualan 	= $this->input->get('kd_penjualan');
		$data 			= $this->Model_penjualan->getPenjualanId($kd_penjualan);
		echo json_encode($data);
	}

	public function SaveDataPenjualan()
	{
		$tgl			=	$this->input->post('tgl');
		$jam			=	$this->input->post('jam');
		$kd_penjualan	=	$this->input->post('kd_penjualan');
		$customer		=	$this->input->post('customer');
		$data 			= 	$this->Model_penjualan->saveDataPenjualan($tgl, $jam, $kd_penjualan, $customer);
		echo json_encode($data);
	}

	public function EditDataPenjualan()
	{
		$tgl			=	$this->input->post('tgl');
		$jam			=	$this->input->post('jam');
		$kd_penjualan	=	$this->input->post('kd_penjualan');
		$customer		=	$this->input->post('customer');
		$total 			=	$this->input->post('total');
		$data 		= 	$this->Model_penjualan->editDataPenjualan($kd_penjualan, $tgl, $jam, $customer, $total);
		echo json_encode($data);
	}

	public function DelDataPenjualan()
	{
		$kd_penjualan = $this->input->post('kd_penjualan');
        $data 	= $this->Model_penjualan->delPenjualan($kd_penjualan);
        echo json_encode($data);
	}

	public function DisplayDetail($kd_penjualan)
	{
		$data['barang'] = $this->Model_penjualan->getDataBarang();
		$data['dataJual'] = $this->Model_penjualan->getPenjualanWithId($kd_penjualan);
		$this->load->view('penjualan/viewDetailPenjualan', $data);
	}

	public function AutoFillDetPenjualan()
	{
		$kd_barang = $_GET['kd_barang'];
        $cari = $this->Model_penjualan->getDataUsingIdBarang($kd_barang)->result();
        echo json_encode($cari);
	}

	public function GetDataDetailPenjualan($kd_penjualan)
	{
		$data 	= $this->Model_penjualan->getDataDetailPenjualan($kd_penjualan);
        echo json_encode($data);
	}

	public function SaveDataDetailPenjualan()
	{
		$kd_penjualan	=	$this->input->post('kd_penjualan');
		$kd_barang		=	$this->input->post('kd_barang');
		$qty			=	$this->input->post('qty');
		$harga			=	$this->input->post('harga');
		$jumlah			=	$this->input->post('jumlah');
		$data 			= 	$this->Model_penjualan->saveDataDetailPenjualan($kd_barang, $qty, $harga, $jumlah, $kd_penjualan);
		echo json_encode($data);
	}

	public function DelDataDetailPenjualan()
	{
		$no_det = $this->input->post('no_det');
        $data 	= $this->Model_penjualan->delDetailPenjualan($no_det);
        echo json_encode($data);
	}

	#------------------------------------------------------------------------------------------------------------------#

	public function Transaksi()
	{
		$this->load->view('penjualan/viewTransaksiPenjualan');
	}

	public function getProducts()
    {

        $namaBar = $this->input->get('namaBar');
        $fieldName = $this->input->get('fieldName');

        $barang = $this->Model_penjualan->getBarang($namaBar, $fieldName);
        echo json_encode($barang);
        exit;
    }

    public function createIdPenjualan()
    {
    	$idPenjualan = $this->Model_penjualan->getIdPenjualan();
    	echo json_encode($idPenjualan);
    }

    public function saveTransaksi()
    {
    	$tgl			=	$this->input->post('tgl');
		$jam			=	$this->input->post('jam');
		$kd_penjualan	=	$this->input->post('kd_penjualan');
		$customer		=	$this->input->post('customer');
		$totalTran		=	$this->input->post('totalTran');
		$bayarTran		=	$this->input->post('bayar');
		$kembalianTran	=	$this->input->post('kembalian');
		$data 			= 	$this->Model_penjualan->saveDataPenjualan($tgl, $jam, $kd_penjualan, $customer, $totalTran, $bayarTran, $kembalianTran);
		echo json_encode($data);
    }

    public function saveDetailTransaksi()
    {
    	$kd_penjualan	=	$this->input->post('kd_penjualan');
		$nama_barang	=	$this->input->post('nama_barang');
		$barang			= 	$this->Model_penjualan->getIdBarWithName($nama_barang);
		$countBar 		= 	$barang->num_rows();
		$extract 		= 	$barang->result_array();
		for ($x=0; $x < $countBar; $x++) { 
			$kd_barang = $extract[$x]['kd_barang'];
		}
		$qty 			=	$this->input->post('qty');
		$harga 			=	$this->input->post('harga');
		$jumlah 		=	$this->input->post('jumlah');
		$data 			= 	$this->Model_penjualan->saveDetailPenjualan($kd_penjualan, $kd_barang, $qty, $harga, $jumlah);
		echo json_encode($data);
    }

}

/* End of file Penjualan.php */
/* Location: ./application/controllers/Penjualan.php */