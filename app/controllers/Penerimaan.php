<?php 

class Penerimaan extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Penerimaan';
		$data['pnr'] = $this->model('Penerimaan_model')->getAllPenerimaan();
		// $data['total'] = $this->model('Penerimaan_model')->getAllPenerimaan2();
		$this->view('home_index/header', $data);
		$this->view('Penerimaan/index', $data);
		$this->view('home_index/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah Penerimaan';
		$data['pnr'] = $this->model('Penerima_model')->getAllPenerimaAktif();
		$data['Amil'] = $this->model('Amil_model')->sesiAmil();
		$data['bagi'] = $this->model('Penerimaan_model')->Pembagian();

		$this->view('home_index/header', $data);
		$this->view('Penerimaan/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Penerimaan_model')->tambahDataPenerimaan($_POST) > 0) {
			header('Location:' . BASEURL .'/Penerimaan');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Penerimaan_model')->hapusDataPenerimaan($id) > 0) {
			header('Location:' . BASEURL .'/Penerimaan');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Penerimaan';
		$data['pnr'] = $this->model('Penerimaan_model')->getPenerimaanById($id);
		$data['Amil'] = $this->model('Amil_model')->sesiAmil();
		$this->view('home_index/header', $data);
		$this->view('Penerimaan/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Penerimaan_model')->editDataPenerimaan($_POST) > 0) {
			header('Location:' . BASEURL .'/Penerimaan');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Penerimaan');
			exit;
		}
	}

// =====================================	

	public function pembayaran2()
	{
		$data['judul'] = 'Data Penerimaan 2';
		$data['pnr'] = $this->model('Penerimaan_model')->getAllPenerimaan();
		$data['total'] = $this->model('Penerimaan_model')->getAllPenerimaan2();
		$this->view('home_index/header', $data);
		$this->view('Penerimaan/index2', $data);
		$this->view('home_index/footer');
	}

	public function tambah2()
	{
		$data['judul'] = 'Tambah Penerimaan';
		$data['Amil'] = $this->model('Amil_model')->getAllAmil();
		$data['Pembayar'] = $this->model('Pembayar_model')->getAllPembayar();
		$data['Zakat'] = $this->model('Zakat_model')->getAllZakat();
		$this->view('home_index/header', $data);
		$this->view('Penerimaan/tambah2',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah2(){
		if($this->model('Penerimaan_model')->tambahDataPenerimaan($_POST) > 0) {
			header('Location:' . BASEURL .'/Penerimaan');
			exit;
		}
	}

}