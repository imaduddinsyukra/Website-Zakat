<?php 

class Pembayaran extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Pembayaran';
		$data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		$data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('home_index/header', $data);
		$this->view('Pembayaran/index', $data);
		$this->view('home_index/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Pembayaran';
		$data['pnr'] = $this->model('Pembayaran_model')->getPembayaranById($id);
		$this->view('home_index/header', $data);
		$this->view('Pembayaran/detail', $data);
		$this->view('home_index/footer');
	}

	public function cari()
	{
		$data['judul'] = 'Data Pembayaran';
		$data['pnr'] = $this->model('Pembayaran_model')->cariPembayaran();
		$this->view('home_index/header', $data);
		$this->view('Pembayaran/index', $data);
		$this->view('home_index/footer');
	}
	
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Pembayaran';
		$data['Zakat'] = $this->model('Zakat_model')->getAllZakat();
		$data['Mesjid'] = $this->model('Mesjid_model')->getAllMesjid();
		$data['Amil'] = $this->model('Amil_model')->sesiAmil();

		$this->view('home_index/header', $data);
		$this->view('Pembayaran/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Pembayaran_model')->tambahDataPembayaran($_POST) > 0) {
			header('Location:' . BASEURL .'/Pembayaran');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Pembayaran_model')->hapusDataPembayaran($id) > 0) {
			header('Location:' . BASEURL .'/Pembayaran');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Pembayaran';
		$data['pnr'] = $this->model('Pembayaran_model')->getPembayaranById($id);
		$data['Mesjid'] = $this->model('Mesjid_model')->getAllMesjid();
		$data['Amil'] = $this->model('Amil_model')->sesiAmil();
		$data['Zakat'] = $this->model('Zakat_model')->getAllZakat();
		$this->view('home_index/header', $data);
		$this->view('Pembayaran/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Pembayaran_model')->editDataPembayaran($_POST) > 0) {
			header('Location:' . BASEURL .'/Pembayaran');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Pembayaran');
			exit;
		}
	}

// =====================================	

	public function pembayaran2()
	{
		$data['judul'] = 'Data Pembayaran 2';
		$data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		$data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('home_index/header', $data);
		$this->view('Pembayaran/index2', $data);
		$this->view('home_index/footer');
	}

	public function tambah2()
	{
		$data['judul'] = 'Tambah Pembayaran';
		$data['Amil'] = $this->model('Amil_model')->getAllAmil();
		$data['Pembayar'] = $this->model('Pembayar_model')->getAllPembayar();
		$data['Zakat'] = $this->model('Zakat_model')->getAllZakat();
		$this->view('home_index/header', $data);
		$this->view('Pembayaran/tambah2',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah2(){
		if($this->model('Pembayaran_model')->tambahDataPembayaran($_POST) > 0) {
			header('Location:' . BASEURL .'/Pembayaran');
			exit;
		}
	}

}