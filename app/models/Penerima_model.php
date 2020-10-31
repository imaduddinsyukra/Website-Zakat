<?php 

class Penerima_model {

	private $table='t_penerima';
	private $tables='t_pembagian';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllPenerima()
	{
		$this->db->query("SELECT * FROM t_penerima");
	 		return $this->db->resultSet();
	}

	public function getAllPenerimaAktif()
	{
		$this->db->query("SELECT * FROM t_penerima where status='1'");
	 		return $this->db->resultSet();
	}

	public function getAllPenerimaNonaktif()
	{
		$this->db->query("SELECT * FROM t_penerima where status='0'");
	 		return $this->db->resultSet();
	}

	public function getPenerimaById($id)
	{

		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_penerima=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataPenerima($data)
	{
		$query = "INSERT INTO ".$this->table."
		VALUES ('', :nama_penerima, :kategori, :alamat_penerima, '1')";

		$this->db->query($query);
		$this->db->bind('nama_penerima', $data['nama_penerima']);
		$this->db->bind('kategori', $data['kategori']);
		$this->db->bind('alamat_penerima', $data['alamat_penerima']);
		$this->db->execute();

		return $this->db->rowCount();

	}
	
	public function cariPenerima(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM t_penerima WHERE nama_penerima LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this ->db->resultSet();
		
	}
	public function hapusDataPenerima($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_penerima= :id_penerima";
		$this->db->query($query);
		$this->db->bind('id_penerima',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataPenerima($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_penerima=:id_penerima');
		$this->db->bind('id_penerima',$id);
		return $this->db->single();
	}

	public function editDataPenerima($data){
		$query = "UPDATE t_penerima SET 
		nama_penerima= :nama_penerima,
		kategori = :kategori,
		alamat_penerima= :alamat_penerima
		WHERE id_penerima = :id_penerima ";

		$this->db->query($query);
		$this->db->bind('id_penerima', $data['id_penerima']);
		$this->db->bind('nama_penerima', $data['nama_penerima']);
		$this->db->bind('kategori', $data['kategori']);
		$this->db->bind('alamat_penerima', $data['alamat_penerima']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function gantiStatus($id){
		$ex = explode('-', $id);
		$id_penerima = $ex[0];
		$status_lama = $ex[1];

		if($status_lama == '0'){
			$status = '1';
		}
		else{
			$status = '0';
		}

		$query = "UPDATE t_penerima SET 
		status= :status
		WHERE id_penerima = :id_penerima ";

		$this->db->query($query);
		$this->db->bind('id_penerima', $id_penerima);
		$this->db->bind('status', $status);
		$this->db->execute();

		return $this->db->rowCount();
	}

}