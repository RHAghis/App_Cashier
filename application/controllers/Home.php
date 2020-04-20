<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		$this->load->view('home/viewHome');
	}

	public function getMonth()
	{
		$data 	= $this->Model_home->getDatePenjualan();
        echo json_encode($data);
	}

	public function ttlTransaksiPerbulan()
	{
		$bln = $this->input->post('bln');
		$data 	= $this->Model_home->ttlTransaksiPerbulan($bln);
        echo json_encode($data);
	}

	public function ttlPendapatanPerbulan()
	{
		$bln = $this->input->post('bln');
		$data 	= $this->Model_home->ttlPendapatanPerbulan($bln);
        echo json_encode($data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */