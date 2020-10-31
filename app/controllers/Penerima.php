<?php 

class Penerima extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Penerima';
		$data['pnr'] = $this->model('Penerima_model')->getAllPenerimaAktif();
		// $data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('home_index/header', $data);
		$this->view('Penerima/index', $data);
		$this->view('home_index/footer');
	}

	public function nonaktif()
	{
		$data['judul'] = 'Data Penerima';
		$data['pnr'] = $this->model('Penerima_model')->getAllPenerimaNonaktif();
		$this->view('home_index/header', $data);
		$this->view('Penerima/nonaktif', $data);
		$this->view('home_index/footer');
	}

	
	public function tambah()
	{
		$data['judul'] = 'Tambah Penerima';
		$this->view('home_index/header', $data);
		$this->view('Penerima/tambah',$data);
		$this->view('home_index/footer');
	}

	public function aksi_tambah(){
		if($this->model('Penerima_model')->tambahDataPenerima($_POST) > 0) {
			header('Location:' . BASEURL .'/Penerima');
			exit;
		}
	}

	public function hapus($id){
		if($this->model('Penerima_model')->hapusDataPenerima($id) > 0) {
			header('Location:' . BASEURL .'/Penerima');
			exit;
		}
	}
	public function form_edit($id)
	{
		$data['judul'] = 'Detail Penerima';
		$data['pnr'] = $this->model('Penerima_model')->ambilDataPenerima($id);
		$this->view('home_index/header', $data);
		$this->view('Penerima/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Penerima_model')->editDataPenerima($_POST) > 0) {
			header('Location:' . BASEURL .'/Penerima');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Penerima');
			exit;
		}
	}

	public function ganti_status($id){
		$ex = explode('-', $id);
		$level = $ex[1];
		if($this->model('Penerima_model')->gantiStatus($id)) {
			if($level=='1'){
			header('Location:' . BASEURL .'/Penerima/nonaktif');
			exit;
			}
			elseif($level=='0'){
			header('Location:' . BASEURL .'/Penerima');
			exit;
			}
		}
		else{
		    if($level=='1'){
			header('Location:' . BASEURL .'/Penerima/nonaktif');
			exit;
			}
			elseif($level=='0'){
			header('Location:' . BASEURL .'/Penerima');
			exit;
			}
		}
	}


}