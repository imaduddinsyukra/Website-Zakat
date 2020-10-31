<?php 

class Mesjid extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Mesjid';
		$data['pnr'] = $this->model('Mesjid_model')->getAllMesjid();
		$this->view('home_index/header', $data);
		$this->view('Mesjid/index', $data);
		$this->view('home_index/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Mesjid';
		$data['pnr'] = $this->model('Mesjid_model')->getMesjidById($id);
		$this->view('home_index/header', $data);
		$this->view('Mesjid/detail', $data);
		$this->view('home_index/footer');
	}

	public function cari()
	{
		$data['judul'] = 'Data Mesjid';
		$data['pnr'] = $this->model('Mesjid_model')->cariMesjid();
		$this->view('home_index/header', $data);
		$this->view('Mesjid/index', $data);
		$this->view('home_index/footer');
	}
	
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Mesjid';

		$this->view('home_index/header', $data);
		$this->view('Mesjid/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Mesjid_model')->tambahDataMesjid($_POST) > 0) {
			header('Location:' . BASEURL .'/Mesjid');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Mesjid_model')->hapusDataMesjid($id) > 0) {
			header('Location:' . BASEURL .'/Mesjid');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Mesjid';
		$data['pnr'] = $this->model('Mesjid_model')->ambilDataMesjid($id);
		$this->view('home_index/header', $data);
		$this->view('Mesjid/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Mesjid_model')->editDataMesjid($_POST) > 0) {
			header('Location:' . BASEURL .'/Mesjid');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Mesjid');
			exit;
		}
	}


}