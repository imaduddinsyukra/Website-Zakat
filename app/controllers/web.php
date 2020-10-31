<?php 

class Web extends Controller {
	
	public function index()
	{
		$data['judul'] = 'Zakat';
		// $data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		// $data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('templates/header_web', $data);
		$this->view('web/index', $data);
		$this->view('templates/footer_web');
	}

	public function profil()
	{
		$data['judul'] = 'About - Zakat';
		// $data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		// $data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('templates/header_web', $data);
		$this->view('web/profil', $data);
		$this->view('templates/footer_web');
	}

	public function partner()
	{
		$data['judul'] = 'Kerjasama Mesjid - Zakat';
		$data['mesjid'] = $this->model('Web_model')->getAllMesjid();
		
		$this->view('templates/header_web', $data);
		$this->view('web/partner', $data);
		$this->view('templates/footer_web');
	}

	public function donasi()
	{
		$data['judul'] = 'Donasi - Zakat';
		// $data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		$data['mesjid'] = $this->model('Web_model')->getAllZakat();
		$this->view('templates/header_web', $data);
		$this->view('web/donasi', $data);
		$this->view('templates/footer_web');
	}

	public function selesaiDonasi()
	{
		$data['judul'] = 'Selesai Donasi - Zakat';
		
		$this->view('templates/header_web', $data);
		$this->view('web/selesai_donasi', $data);
		$this->view('templates/footer_web');
	}

	public function aksi_tambah_donasi(){
		if($this->model('Web_model')->simpanDonasi($_POST) > 0) {
			header('Location:' . BASEURL .'/Web/selesaiDonasi');
			exit;
		}
	}


	public function contact()
	{
		$data['judul'] = 'Contact - Zakat';
		// $data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		// $data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('templates/header_web', $data);
		$this->view('web/contact', $data);
		$this->view('templates/footer_web');
	}

	public function aksi_tambah_contact(){
		if($this->model('Web_model')->tambahContact($_POST) > 0) {
			header('Location:' . BASEURL .'/Web/contact');
			exit;
		}
	}

	public function lihat_contact()
	{
		$data['judul'] = 'Lihat Contact - Zakat';
		$data['pnr'] = $this->model('Web_model')->getAllContact();

		$this->view('home_index/header', $data);
		$this->view('web/lihat_contact', $data);
		$this->view('home_index/footer');
	}
}