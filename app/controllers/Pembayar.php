<?php 

class Pembayar extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Pembayar';
		$data['pnr'] = $this->model('Pembayar_model')->getAllPembayar();
		$this->view('home_index/header', $data);
		$this->view('Pembayar/index', $data);
		$this->view('home_index/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Pembayar';
		$data['pnr'] = $this->model('Pembayar_model')->getPembayarById($id);
		$this->view('home_index/header', $data);
		$this->view('Pembayar/detail', $data);
		$this->view('home_index/footer');
	}

	public function cari()
	{
		$data['judul'] = 'Data Pembayar';
		$data['pnr'] = $this->model('Pembayar_model')->cariPembayar();
		$this->view('home_index/header', $data);
		$this->view('Pembayar/index', $data);
		$this->view('home_index/footer');
	}
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Pembayar';
		$this->view('home_index/header', $data);
		$this->view('Pembayar/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Pembayar_model')->tambahDataPembayar($_POST) > 0) {
			header('Location:' . BASEURL .'/Pembayar');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Pembayar_model')->hapusDataPembayar($id) > 0) {
			header('Location:' . BASEURL .'/Pembayar');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Pembayar';
		$data['pnr'] = $this->model('Pembayar_model')->ambilDataPembayar($id);
		$data['Zakat'] = $this->model('Mesjid_model')->getAllMesjid();
		$this->view('home_index/header', $data);
		$this->view('Pembayar/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Pembayar_model')->editDataPembayar($_POST) > 0) {
			header('Location:' . BASEURL .'/Pembayar');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Pembayar');
			exit;
		}
	}


}