<?php 

class Pembagi_model {

	private $table='t_pembagian';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllPembagi()
	{
		$this->db->query("SELECT * FROM t_pembagian,t_amil,t_penerima WHERE t_pembagian.id_amil= t_amil.id_amil AND t_pembagian.id_penerima=t_penerima.id_penerima");
	 		return $this->db->resultSet();
	}

	public function getPembagiById($id)
	{

		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_pembagian=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataPembagi($data)
	{
		$query = "INSERT INTO ".$this->table."
		VALUES (:id_pembagian, :id_amil, :id_penerima, :tgl_pembagian)";
		$this->db->query($query);
		$this->db->bind('id_pembagian', $data['id_pembagian']);
		$this->db->bind('id_amil', $data['id_amil']);
		$this->db->bind('id_penerima', $data['id_penerima']);
		$this->db->bind('tgl_pembagian', $data['tgl_pembagian']);
		
		$this->db->execute();

		return $this->db->rowCount();

	}
	
	public function cariPembagi(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM t_pembagian WHERE id_pembagian LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this ->db->resultSet();
		
	}
	public function hapusDataPembagi($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_pembagian= :id_pembagian";
		$this->db->query($query);
		$this->db->bind('id_pembagian',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataPembagi($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_pembagian=:id_pembagian');
		$this->db->bind('id_pembagian',$id);
		return $this->db->single();
	}

	public function editDataPembagi($data){
		$query = "UPDATE t_pembagian SET 
		
		id_pembagian= :id_pembagian,
		id_amil= :id_amil,
		id_penerima= :id_penerima,
		tgl_pembagian= :tgl_pembagian
		
		WHERE id_pembagian = :id_pembagian ";


		$this->db->query($query);
	
		$this->db->bind('id_pembagian', $data['id_pembagian']);
		$this->db->bind('id_amil', $data['id_amil']);
		$this->db->bind('id_penerima', $data['id_penerima']);
		$this->db->bind('tgl_pembagian', $data['tgl_pembagian']);
		
		
		$this->db->execute();

		return $this->db->rowCount();
	}

}