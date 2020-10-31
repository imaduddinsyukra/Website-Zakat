<?php 

class Pembayaran_model {

	private $table='t_pembayaran';
	private $db;

	public function __construct(){
		$this->db = new database;
	}

	public function getAllPembayaran()
	{
		$this->db->query("SELECT * FROM t_pembayaran JOIN t_pembayar USING(id_pembayar) JOIN t_amil USING(id_amil) join t_zakat using(id_zakat)");
	 		return $this->db->resultSet();
	}

	public function getAllPembayaran2()
	{
		error_reporting(0);
		include "app/config/koneksi.php";
		$i=0;
		$ii=0;
		$iii=0;
		$iiii=0;
		$cek=0;
		$cek=$db->query("SELECT sum(pembayaran_uang) as jumlah_uang FROM t_pembayaran where pembayaran_beras='0'");
		while ($lihat=$cek->fetch()){
			$jumlah_uang = $lihat['jumlah_uang'];
			$data[$i]['jumlah_uang']=$jumlah_uang;
			$i++;			
		}

		$cek2=$db->query("SELECT sum(pembayaran_beras) as jumlah_beras FROM t_pembayaran where pembayaran_uang='0'");
		while ($lihat2=$cek2->fetch()){
			$jumlah_beras = $lihat2['jumlah_beras'];
			$data[$ii]['jumlah_beras']=$jumlah_beras;
			$ii++;
		}

		$cek3=$db->query("SELECT count(id_penerima) as id_p FROM t_penerima");
		while ($lihat3=$cek3->fetch()){
			$id_p = $lihat3['id_p'];
			$data[$iii]['id_p']=$id_p;

			$bagi = $jumlah_uang/$id_p;
			$data[$iii]['bagi']=$bagi;
			$iii++;
		}
			$cek4=$db->query("SELECT count(id_penerima) as id_b FROM t_penerima");
		while ($lihat4=$cek4->fetch()){
			$id_b = $lihat4['id_b'];
			$data[$iiii]['id_b']=$id_b;

			$bagi = $jumlah_uang/$id_b;
			$data[$iiii]['bagi']=$bagi;

			$bagi2 = $jumlah_beras/$id_b;
			$data[$iiii]['bagi2']=$bagi2;
			$iiii++;
		}

		return $data;
	}

	public function getPembayaranById($id)
	{

		$this->db->query("SELECT * FROM t_pembayaran join t_pembayar using(id_pembayar) WHERE id_pembayaran=:id");
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahDataPembayaran($data)
	{
		
		include "app/config/koneksi.php";
		
		$nama_pembayar = $data['nama_pembayar'];
		$no_hp_pembayar = $data['no_hp_pembayar'];
		$jumlah_tanggungan = $data['jumlah_tanggungan'];
		$pembayaran_berasnya = $data['pembayaran_beras'];
		$pembayaran_uangnya = $data['pembayaran_uang'];

		if($pembayaran_uangnya=='0' || $pembayaran_uangnya==''){
			$pembayaran_beras = $data['pembayaran_beras'];
			$pembayaran_uang = $data['pembayaran_uang'];
			$total_pembayaran=$jumlah_tanggungan*$pembayaran_berasnya;
		}
		elseif($pembayaran_berasnya=='0' || $pembayaran_berasnya==''){
			$pembayaran_beras = $data['pembayaran_beras'];
			$pembayaran_uang=$pembayaran_uangnya/$jumlah_tanggungan;
			$total_pembayaran = $pembayaran_uangnya;
		}

		$jumlahnya=0;
		$cek_pembayar=$db->query("SELECT *, count(id_pembayar) as jumlahnya FROM t_pembayar where nama_pembayar = '$nama_pembayar' and no_hp_pembayar = '$no_hp_pembayar'");
		while ($lihat_pembayar=$cek_pembayar->fetch()){
			$id_pembayarnya = $lihat_pembayar['id_pembayar'];
			$jumlahnya = $jumlahnya+$lihat_pembayar['jumlahnya'];
		}


		if($jumlahnya=='0'){
			$cek=$db->query("SELECT count(id_pembayar) as id_lama FROM t_pembayar");
			while ($lihat=$cek->fetch()){
				$id_pembayar = $lihat['id_lama']+1;
			}


			$query1 = "INSERT INTO t_pembayar
			VALUES (:id_pembayar, :nama_pembayar, :no_hp_pembayar, :alamat_pembayar,  :id_mesjid)";
			$this->db->query($query1);
			$this->db->bind('id_pembayar', $id_pembayar);
			$this->db->bind('nama_pembayar', $data['nama_pembayar']);
			$this->db->bind('no_hp_pembayar', $data['no_hp_pembayar']);
			$this->db->bind('alamat_pembayar', $data['alamat_pembayar']);
			$this->db->bind('id_mesjid', $data['id_mesjid']);
			$this->db->execute();

			$query_bayar = "INSERT INTO t_pembayaran
			VALUES ('', :id_zakat, :id_amil, :id_pembayar, :tgl_penyerahan, :pembayaran_beras, :pembayaran_uang, :jumlah_tanggungan, :total_pembayaran)";
			$this->db->query($query_bayar);
			$this->db->bind('id_zakat', $data['id_zakat']);
			$this->db->bind('id_amil', $data['id_amil']);
			$this->db->bind('id_pembayar', $id_pembayar);
			$this->db->bind('tgl_penyerahan', $data['tgl_penyerahan']);
			$this->db->bind('pembayaran_beras', $pembayaran_beras);
			$this->db->bind('pembayaran_uang', $pembayaran_uang);
			$this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
			$this->db->bind('total_pembayaran', $total_pembayaran);
			$this->db->execute();

		}
		else{
			$id_pembayar = $id_pembayarnya;

			$query_bayar = "INSERT INTO t_pembayaran
			VALUES ('', :id_zakat, :id_amil, :id_pembayar, :tgl_penyerahan, :pembayaran_beras, :pembayaran_uang, :jumlah_tanggungan, :total_pembayaran)";
			$this->db->query($query_bayar);
			$this->db->bind('id_zakat', $data['id_zakat']);
			$this->db->bind('id_amil', $data['id_amil']);
			$this->db->bind('id_pembayar', $id_pembayar);
			$this->db->bind('tgl_penyerahan', $data['tgl_penyerahan']);
			$this->db->bind('pembayaran_beras', $pembayaran_beras);
			$this->db->bind('pembayaran_uang', $pembayaran_uang);
			$this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
			$this->db->bind('total_pembayaran', $total_pembayaran);
			$this->db->execute();

		}
		echo $data['infak'];
		if($data['infak']=='0' || $data['infak']==''){
		}
		else{
				$query_infak = "INSERT INTO t_infak
				VALUES ('', :nama_pembayar, :tgl_infak, :total_infak)";
				$this->db->query($query_infak);
				$this->db->bind('nama_pembayar', $data['nama_pembayar']);
				$this->db->bind('tgl_infak', $data['tgl_penyerahan']);
				$this->db->bind('total_infak', $data['infak']);
				$this->db->execute();
		}


		return $this->db->rowCount();

	}
	
	public function hapusDataPembayaran($id){
		$query = "DELETE FROM ". $this->table ." WHERE id_pembayaran= :id_pembayaran";
		$this->db->query($query);
		$this->db->bind('id_pembayaran',$id);
		$this->db->execute();
		return $this ->db->rowCount();
		
	}

	public function ambilDataPembayaran($id)
	{
		$this->db->query('SELECT * FROM '.$this-> table .' WHERE id_pembayaran=:id_pembayaran');
		$this->db->bind('id_pembayaran',$id);
		return $this->db->single();
	}

	public function editDataPembayaran($data){

		include "app/config/koneksi.php";

		$jumlah_tanggungan = $data['jumlah_tanggungan'];
		$pembayaran_berasnya = $data['pembayaran_beras'];
		$pembayaran_uangnya = $data['pembayaran_uang'];

		if($pembayaran_uangnya=='0' || $pembayaran_uangnya==''){
			$pembayaran_beras = $data['pembayaran_beras'];
			$pembayaran_uang = $data['pembayaran_uang'];
			$total_pembayaran=$jumlah_tanggungan*$pembayaran_berasnya;
		}
		elseif($pembayaran_berasnya=='0' || $pembayaran_berasnya==''){
			$pembayaran_beras = $data['pembayaran_beras'];
			$pembayaran_uang=$pembayaran_uangnya/$jumlah_tanggungan;
			$total_pembayaran = $pembayaran_uangnya;
		}

		$query = "UPDATE t_pembayaran SET 
		id_zakat= :id_zakat,
		id_amil= :id_amil,
		pembayaran_beras= :pembayaran_beras,
		pembayaran_uang= :pembayaran_uang,
		jumlah_tanggungan= :jumlah_tanggungan,
		total_pembayaran= :total_pembayaran,
		tgl_penyerahan= :tgl_penyerahan
		WHERE id_pembayaran = :id_pembayaran ";

		$this->db->query($query);
		$this->db->bind('id_pembayaran', $data['id_pembayaran']);
		$this->db->bind('id_zakat', $data['id_zakat']);
		$this->db->bind('id_amil', $data['id_amil']);
		$this->db->bind('tgl_penyerahan', $data['tgl_penyerahan']);
		$this->db->bind('pembayaran_beras', $pembayaran_beras);
		$this->db->bind('pembayaran_uang', $pembayaran_uang);
		$this->db->bind('jumlah_tanggungan', $data['jumlah_tanggungan']);
		$this->db->bind('total_pembayaran', $total_pembayaran);
		$this->db->execute();

		return $this->db->rowCount();
	}

}