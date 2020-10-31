<?php 

class Zakat extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Zakat';
		$data['pnr'] = $this->model('Zakat_model')->getAllZakat();
		$this->view('home_index/header', $data);
		$this->view('Zakat/index', $data);
		$this->view('home_index/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Zakat';
		$data['pnr'] = $this->model('Zakat_model')->getZakatById($id);
		$this->view('home_index/header', $data);
		$this->view('Zakat/detail', $data);
		$this->view('home_index/footer');
	}

	public function cari()
	{
		$data['judul'] = 'Data Zakat';
		$data['pnr'] = $this->model('Zakat_model')->cariZakat();
		$this->view('home_index/header', $data);
		$this->view('Zakat/index', $data);
		$this->view('home_index/footer');
	}
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Zakat';
		$this->view('home_index/header', $data);
		$this->view('Zakat/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Zakat_model')->tambahDataZakat($_POST) > 0) {
			header('Location:' . BASEURL .'/Zakat');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Zakat_model')->hapusDataZakat($id) > 0) {
			header('Location:' . BASEURL .'/Zakat');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Zakat';
		$data['pnr'] = $this->model('Zakat_model')->ambilDataZakat($id);
		$this->view('home_index/header', $data);
		$this->view('Zakat/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Zakat_model')->editDataZakat($_POST) > 0) {
			header('Location:' . BASEURL .'/Zakat');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Zakat');
			exit;
		}
	}


}