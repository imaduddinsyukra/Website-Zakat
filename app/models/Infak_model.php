<?php 

class Infak_model {

	private $table='t_infak';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllInfak()
	{
		$this->db->query("SELECT * FROM t_infak");
	 		return $this->db->resultSet();
	}
	public function getAllInfak2()
	{
		include "app/config/koneksi.php";
		$i=0;
		$cek=$db->query("SELECT sum(total_infak) as total_infak FROM t_infak ");
		while ($lihat=$cek->fetch()){
			$total_infak = $lihat['total_infak'];
			$data[$i]['total_infak']=$total_infak;
			$i++;
		}
		return $data;
	}
	public function getInfakById($id)
	{

		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_infak=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataInfak($data)
	{
		$query = "INSERT INTO ".$this->table."
		VALUES ('', :nama_pembayar, :tgl_infak, :total_infak)";
		$this->db->query($query);
		$this->db->bind('nama_pembayar', $data['nama_pembayar']);
		$this->db->bind('tgl_infak', $data['tgl_infak']);
		$this->db->bind('total_infak', $data['total_infak']);
		$this->db->execute();

		return $this->db->rowCount();

	}
	
	public function cariInfak(){
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM t_infak WHERE nama_pembayar LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this ->db->resultSet();
		
	}
	public function hapusDataInfak($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_infak= :id_infak";
		$this->db->query($query);
		$this->db->bind('id_infak',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataInfak($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_infak=:id_infak');
		$this->db->bind('id_infak',$id);
		return $this->db->single();
	}

	public function editDataInfak($data){
		$query = "UPDATE t_infak SET 
		nama_pembayar= :nama_pembayar,
		tgl_infak= :tgl_infak,
		total_infak= :total_infak
		WHERE id_infak = :id_infak ";

		$this->db->query($query);
		$this->db->bind('id_infak', $data['id_infak']);
		$this->db->bind('nama_pembayar', $data['nama_pembayar']);
		$this->db->bind('tgl_infak', $data['tgl_infak']);
		$this->db->bind('total_infak', $data['total_infak']);
		$this->db->execute();

		return $this->db->rowCount();
	}

}