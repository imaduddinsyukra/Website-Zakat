<?php 

class Donasi_model {

	private $table='t_donasi';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllDonasi()
	{
		$this->db->query("SELECT * FROM t_donasi");
	 		return $this->db->resultSet();
	}

	public function getdonasiById($id)
	{

		$this->db->query("SELECT * FROM t_donasi WHERE id_donasi=:id");
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function editDataDonasi($data){
		$tgl_validasi = date("Y-m-d");

		$query = "UPDATE t_donasi SET 
		tgl_validasi= :tgl_validasi,
		id_amil= :id_amil,
		status_validasi= :status_validasi
		WHERE id_donasi = :id_donasi ";

		$this->db->query($query);
		$this->db->bind('id_donasi', $data['id_donasi']);
		$this->db->bind('tgl_validasi', $tgl_validasi);
		$this->db->bind('id_amil', $data['id_amil']);
		$this->db->bind('status_validasi', $data['status_validasi']);
		$this->db->execute();

		return $this->db->rowCount();
	}

}