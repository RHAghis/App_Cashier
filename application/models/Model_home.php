<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	public function getDatePenjualan()
	{
		$hasil=$this->db->query("SELECT DISTINCT MONTH(tgl) as bln, YEAR(tgl) as thn FROM penjualan");
        return $hasil->result();
	}

	public function ttlTransaksiPerbulan($bln)
	{
		$hasil=$this->db->query("SELECT COUNT(kd_penjualan) as total FROM penjualan WHERE month(tgl) = '$bln'");
        return $hasil->result();
	}

	public function ttlPendapatanPerbulan($bln)
	{
		$hasil=$this->db->query("SELECT SUM(total) as total from penjualan where MONTH(tgl) = '$bln'");
        return $hasil->result();
	}
	

}

/* End of file Model_home.php */
/* Location: ./application/models/Model_home.php */