<?php 

class Pembayar_model {

	private $table='t_pembayar';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllPembayar()
	{
		$this->db->query("SELECT * FROM t_pembayar join t_mesjid using(id_mesjid)");
	 		return $this->db->resultSet();
	}

	public function getPembayarById($id)
	{

		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_pembayar=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataPembayar($data)
	{
		 $query = "INSERT INTO ".$this->table."
		 VALUES (:id_pembayar, :nama_pembayar, :alamat_pembayar, :jumlah_keluarga, :desa, :kecamatan)";
		 $this->db->query($query);
		 $this->db->bind('id_pembayar', $data['id_pembayar']);
		 $this->db->bind('nama_pembayar', $data['nama_pembayar']);
		 $this->db->bind('alamat_pembayar', $data['alamat_pembayar']);
		 $this->db->bind('jumlah_keluarga', $data['jumlah_keluarga']);
		 $this->db->bind('desa', $data['desa']);
		 $this->db->bind('kecamatan', $data['kecamatan']);
		 $this->db->execute();

		 return $this->db->rowCount();

	}
	
	public function cariPembayar(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM t_pembayar WHERE nama_pembayar LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this ->db->resultSet();
		
	}

	public function hapusDataPembayar($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_pembayar= :id_pembayar";
		$this->db->query($query);
		$this->db->bind('id_pembayar',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataPembayar($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_pembayar=:id_pembayar');
		$this->db->bind('id_pembayar',$id);
		return $this->db->single();
	}

	public function editDataPembayar($data){
		
		$query = "UPDATE t_pembayar SET 
		nama_pembayar= :nama_pembayar,
		no_hp_pembayar= :no_hp_pembayar,
		alamat_pembayar= :alamat_pembayar,
		id_mesjid= :id_mesjid
		WHERE id_pembayar = :id_pembayar ";


		$this->db->query($query);
	
		 $this->db->bind('id_pembayar', $data['id_pembayar']);
		 $this->db->bind('nama_pembayar', $data['nama_pembayar']);
		 $this->db->bind('alamat_pembayar', $data['alamat_pembayar']);
		 $this->db->bind('no_hp_pembayar', $data['no_hp_pembayar']);
		 $this->db->bind('id_mesjid', $data['id_mesjid']);
		$this->db->execute();

		return $this->db->rowCount();
	}

}