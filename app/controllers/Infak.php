<?php 

class Infak extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Infak';
		$data['pnr'] = $this->model('Infak_model')->getAllInfak();
		$data['totalnya'] = $this->model('Infak_model')->getAllInfak2();
		$this->view('home_index/header', $data);
		$this->view('Infak/index', $data);
		$this->view('home_index/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Infak';
		$data['pnr'] = $this->model('Infak_model')->getInfakById($id);
		$this->view('home_index/header', $data);
		$this->view('Infak/detail', $data);
		$this->view('home_index/footer');
	}

	public function cari()
	{
		$data['judul'] = 'Data Infak';
		$data['pnr'] = $this->model('Infak_model')->cariInfak();
		$this->view('home_index/header', $data);
		$this->view('Infak/index', $data);
		$this->view('home_index/footer');
	}
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Infak';
		$this->view('home_index/header', $data);
		$this->view('Infak/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Infak_model')->tambahDataInfak($_POST) > 0) {
			header('Location:' . BASEURL .'/Infak');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Infak_model')->hapusDataInfak($id) > 0) {
			header('Location:' . BASEURL .'/Infak');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Infak';
		$data['pnr'] = $this->model('Infak_model')->ambilDataInfak($id);
		$this->view('home_index/header', $data);
		$this->view('Infak/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Infak_model')->editDataInfak($_POST) > 0) {
			header('Location:' . BASEURL .'/Infak');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Infak');
			exit;
		}
	}


}