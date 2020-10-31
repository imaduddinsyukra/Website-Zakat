<?php 

class Kelurahan extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Kelurahan';
		$data['pnr'] = $this->model('Kelurahan_model')->getAllKelurahan();
		$this->view('home_index/header', $data);
		$this->view('Kelurahan/index', $data);
		$this->view('home_index/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Kelurahan';
		$data['pnr'] = $this->model('Kelurahan_model')->getKelurahanById($id);
		$this->view('home_index/header', $data);
		$this->view('Kelurahan/detail', $data);
		$this->view('home_index/footer');
	}

	public function cari()
	{
		$data['judul'] = 'Data Kelurahan';
		$data['pnr'] = $this->model('Kelurahan_model')->cariKelurahan();
		$this->view('home_index/header', $data);
		$this->view('Kelurahan/index', $data);
		$this->view('home_index/footer');
	}
	
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Kelurahan';
		$this->view('home_index/header', $data);
		$this->view('Kelurahan/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Kelurahan_model')->tambahDataKelurahan($_POST) > 0) {
			header('Location:' . BASEURL .'/Kelurahan');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Kelurahan_model')->hapusDataKelurahan($id) > 0) {
			header('Location:' . BASEURL .'/Kelurahan');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Kelurahan';
		$data['pnr'] = $this->model('Kelurahan_model')->ambilDataKelurahan($id);
		$this->view('home_index/header', $data);
		$this->view('Kelurahan/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Kelurahan_model')->editDataKelurahan($_POST) > 0) {
			header('Location:' . BASEURL .'/Kelurahan');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Kelurahan');
			exit;
		}
	}


}