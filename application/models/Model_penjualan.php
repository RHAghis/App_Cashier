<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penjualan extends CI_Model {

	public function getDataPenjualan()
	{
		$hasil=$this->db->query("SELECT * FROM penjualan");
        return $hasil->result();
	}

	public function getPenjualanWithId($kd_penjualan)
	{
		$hasil = $this->db->query("SELECT * FROM penjualan WHERE kd_penjualan='$kd_penjualan'");
		return $hasil->result();
	}

	public function getPenjualanId($kd_penjualan)
	{
		$hsl = $this->db->query("SELECT * FROM penjualan WHERE kd_penjualan='$kd_penjualan'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'kd_penjualan' 	=> $data->kd_penjualan,
					'tgl' 			=> $data->tgl,
					'jam' 			=> $data->jam,
					'customer'		=> $data->customer,
					'total' 		=> $data->total
					);
			}
		}
		return $hasil;
	}

	public function saveDataPenjualan($tgl, $jam, $kd_penjualan, $customer, $totalTran, $bayarTran, $kembalianTran)
	{
		$hasil=$this->db->query("INSERT INTO penjualan (kd_penjualan, tgl, jam, customer, total, bayar, kembalian) VALUES ('$kd_penjualan','$tgl','$jam','$customer', '$totalTran', '$bayarTran', '$kembalianTran') ");
        return $hasil;
	}

	public function editDataPenjualan($kd_penjualan, $tgl, $jam, $customer, $total)
	{
		$hasil=$this->db->query("UPDATE penjualan SET tgl='$tgl',jam='$jam',customer='$customer',total='$total' WHERE kd_penjualan='$kd_penjualan'");
		 return $hasil;
	}

	public function delPenjualan($kd_penjualan)
	{
		$hasil=$this->db->query("DELETE FROM penjualan WHERE kd_penjualan='$kd_penjualan'");
        return $hasil;
	}

	public function getDataBarang()
	{
		return $this->db->get('barang');
	}

	public function getDataUsingIdBarang($kd_barang)
	{
		$query= $this->db->query("SELECT * FROM barang WHERE kd_barang='$kd_barang'");
        return $query;
	}

	public function getDataDetailPenjualan($kd_penjualan)
	{
		$hasil=$this->db->query("SELECT dp.kd_penjualan as kd_penjualan, dp.no_det as no_det, b.nama_barang as nama_barang, dp.qty as qty, dp.harga as harga, dp.jumlah as jumlah FROM det_penjualan dp JOIN barang b on dp.kd_barang = b.kd_barang WHERE kd_penjualan = '$kd_penjualan'");
        return $hasil->result();
	}
	public function saveDataDetailPenjualan($kd_barang, $qty, $harga, $jumlah, $kd_penjualan)
	{
		$hasil=$this->db->query("INSERT INTO `det_penjualan` (`no_det`, `kd_penjualan`, `kd_barang`, `qty`, `harga`, `jumlah`) VALUES (NULL, '$kd_penjualan', '$kd_barang', '$qty', '$harga', '$jumlah')");
        return $hasil;
	}

	public function delDetailPenjualan($no_det)
	{
		$hasil=$this->db->query("DELETE FROM det_penjualan WHERE no_det='$no_det'");
        return $hasil;
	}

#-----------------------------------------------------------------------------------------------------------------------#

	public function getBarang($namaBar, $fieldName)
    {

        
        if (empty($fieldName)) {
            $fieldName = 'nama_barang';
        }

        $namaBar = strtolower(trim($namaBar));

        $query = $this->db
            ->select('*')
            ->from('barang')
            ->where("LOWER($fieldName) LIKE '$namaBar%'")
            ->limit(25)
            ->get();

        return $query->result_array();
    }

    public function getIdPenjualan()
    {
    	$hasil=$this->db->query("SELECT kd_penjualan FROM penjualan ORDER BY kd_penjualan DESC LIMIT 1");
        return $hasil->result();
    }

    public function saveDetailPenjualan($kd_penjualan, $kd_barang, $qty, $harga, $jumlah)
    {
    	$hasil=$this->db->query("INSERT INTO det_penjualan (no_det, kd_penjualan, kd_barang, qty, harga, jumlah) VALUES (NULL, '$kd_penjualan', '$kd_barang', '$qty', '$harga', '$jumlah')");
        return $hasil;
    }

    public function getIdBarWithName($nama_barang)
    {
    	$hasil=$this->db->query("SELECT kd_barang FROM barang WHERE nama_barang = '$nama_barang'");
        return $hasil;
    }
}

/* End of file Model_penjualan.php */
/* Location: ./application/models/Model_penjualan.php */