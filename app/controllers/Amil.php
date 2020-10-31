<?php 

class Amil extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Amil';
		$data['pnr'] = $this->model('Amil_model')->getAllAmil();
		$this->view('home_index/header', $data);
		$this->view('Amil/index', $data);
		$this->view('home_index/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Amil';
		$data['pnr'] = $this->model('Amil_model')->getAmilById($id);
		$this->view('home_index/header', $data);
		$this->view('Amil/detail', $data);
		$this->view('home_index/footer');
	}

	public function cari()
	{
		$data['judul'] = 'Data Amil';
		$data['pnr'] = $this->model('Amil_model')->cariAmil();
		$this->view('home_index/header', $data);
		$this->view('Amil/index', $data);
		$this->view('home_index/footer');
	}
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Amil';
		$data['Zakat'] = $this->model('Mesjid_model')->getAllMesjid();

		$this->view('home_index/header', $data);
		$this->view('Amil/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Amil_model')->tambahDataAmil($_POST) > 0) {
			header('Location:' . BASEURL .'/Amil');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Amil_model')->hapusDataAmil($id) > 0) {
			header('Location:' . BASEURL .'/Amil');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Amil';
		$data['pnr'] = $this->model('Amil_model')->ambilDataAmil($id);
		$data['Zakat'] = $this->model('Mesjid_model')->getAllMesjid();
		
		$this->view('home_index/header', $data);
		$this->view('Amil/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Amil_model')->editDataAmil($_POST) > 0) {
			header('Location:' . BASEURL .'/Amil');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Amil');
			exit;
		}
	}


}