<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function getDataBarang()
	{
		$hasil=$this->db->query("SELECT b.kd_barang as kd_barang, k.nama_kategori as kategori, b.nama_barang as nama_barang, b.warna as warna, b.harga_jual as harga_jual, b.stock as stock FROM barang b JOIN kategori k ON b.kd_kategori = k.kd_kategori ");
        return $hasil->result();
	}

	public function getBarangbyKode($kd_barang)
	{
		$hsl = $this->db->query("SELECT * FROM barang WHERE kd_barang='$kd_barang'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'kd_barang' 	=> $data->kd_barang,
					'kd_kategori' 	=> $data->kd_kategori,
					'nama_barang' 	=> $data->nama_barang,
					'warna'		 	=> $data->warna,
					'harga_jual' 	=> $data->harga_jual,
					'stock'		 	=> $data->stock
					);
			}
		}
		return $hasil;
	}

	public function saveDataBarang($kd_bar, $kategori, $nama, $warna, $hjual, $stock)
	{
		$hasil=$this->db->query("INSERT INTO barang (kd_barang, kd_kategori, nama_barang, warna, harga_jual, stock) VALUES ('$kd_bar','$kategori','$nama','$warna','$hjual','$stock') ");
        return $hasil;
	}

	public function editDataBarang($kd_bar, $kategori, $nama, $warna, $hjual, $stock)
	{
		$hasil=$this->db->query("UPDATE barang SET kd_kategori='$kategori',nama_barang='$nama',warna='$warna',harga_jual='$hjual',stock='$stock' WHERE kd_barang='$kd_bar'");
		 return $hasil;
	}

	public function delBarang($kd_bar)
	{
		$hasil=$this->db->query("DELETE FROM barang WHERE kd_barang='$kd_bar'");
        return $hasil;
	}

	public function getDataKategori()
	{
		$hasil=$this->db->query("SELECT * FROM kategori");
        return $hasil->result();
	}

}

/* End of file model_barang.php */
/* Location: ./application/models/model_barang.php */