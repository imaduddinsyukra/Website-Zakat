<?php 

class Zakat_model {

	private $table='t_zakat';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllZakat()
	{
		$this->db->query('SELECT * FROM '.$this->table);
	 		return $this->db->resultSet();
	}

	public function getZakatById($id)
	{

		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_zakat=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataZakat($data)
	{
		$query = "INSERT INTO ".$this->table."
		VALUES (:id_zakat, :jenis_zakat)";
		$this->db->query($query);
		$this->db->bind('id_zakat', $data['id_zakat']);
		$this->db->bind('jenis_zakat', $data['jenis_zakat']);
		$this->db->execute();

		return $this->db->rowCount();

	}
	
	public function cariZakat(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM t_zakat WHERE jenis_zakat LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this ->db->resultSet();
		
	}
	public function hapusDataZakat($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_zakat= :id_zakat";
		$this->db->query($query);
		$this->db->bind('id_zakat',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataZakat($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_zakat=:id_zakat');
		$this->db->bind('id_zakat',$id);
		return $this->db->single();
	}

	public function editDataZakat($data){
		$query = "UPDATE t_zakat SET 
		
		id_zakat= :id_zakat,
		jenis_zakat= :jenis_zakat

		WHERE id_zakat = :id_zakat ";

		$this->db->query($query);
	
		$this->db->bind('id_zakat', $data['id_zakat']);
		$this->db->bind('jenis_zakat', $data['jenis_zakat']);
		$this->db->execute();

		return $this->db->rowCount();
	}

}