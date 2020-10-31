<?php 

class Amil_model {

	private $table='t_amil';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function sesiAmil()
	{
		session_start();
		include "app/config/koneksi.php";
		$username = $_SESSION['username'];
		$i=0;
		$cek=$db->query("SELECT * FROM t_amil WHERE nama_amil='$username'");
		while ($lihat=$cek->fetch()){
			$id_amil = $lihat['id_amil'];
			$data[$i]['id_amil']=$id_amil;
			$i++;			
		}
		return $data;
	}

	public function getAllAmil()
	{
		$this->db->query("SELECT * FROM t_amil join t_mesjid using(id_mesjid) order by nama_amil");
	 		return $this->db->resultSet();
	}

	public function getAmilById($id)
	{

		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_amil=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataAmil($data)
	{
		$query = "INSERT INTO ".$this->table."
		VALUES ('', :nama_amil, :no_hp_amil, :alamat_amil, :id_mesjid)";
		$this->db->query($query);
		$this->db->bind('nama_amil', $data['nama_amil']);
		$this->db->bind('no_hp_amil', $data['no_hp_amil']);
		$this->db->bind('alamat_amil', $data['alamat_amil']);
		$this->db->bind('id_mesjid', $data['id_mesjid']);
		$this->db->execute();

		$query_user = "INSERT INTO t_user
		VALUES (:username, :password, 'aktif', '2')";
		$this->db->query($query_user);
		$this->db->bind('username', $data['nama_amil']);
		$this->db->bind('password', $data['no_hp_amil']);
		$this->db->execute();

		return $this->db->rowCount();

	}
	
	public function cariAmil(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM t_amil WHERE nama_amil LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this ->db->resultSet();
		
	}
	public function hapusDataAmil($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_amil= :id_amil";
		$this->db->query($query);
		$this->db->bind('id_amil',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataAmil($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_amil=:id_amil');
		$this->db->bind('id_amil',$id);
		return $this->db->single();
	}

	public function editDataAmil($data){
		$query = "UPDATE t_amil SET 
		nama_amil= :nama_amil,
		no_hp_amil= :no_hp_amil,
		alamat_amil= :alamat_amil,
		id_mesjid= :id_mesjid
		WHERE id_amil = :id_amil ";

		$this->db->query($query);
		$this->db->bind('id_amil', $data['id_amil']);
		$this->db->bind('nama_amil', $data['nama_amil']);
		$this->db->bind('no_hp_amil', $data['no_hp_amil']);
		$this->db->bind('alamat_amil', $data['alamat_amil']);
		$this->db->bind('id_mesjid', $data['id_mesjid']);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

}