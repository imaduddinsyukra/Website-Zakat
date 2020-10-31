<?php 

class Report extends Controller {
	// public function pembayar()
	// {
	// 	$data['judul'] = 'Data Report Pembayar';
	// 	$data['pnr'] = $this->model('Pembayar_model')->getAllPembayar();
	// 	$this->view('home_index/header', $data);
	// 	$this->view('Report/Pembayar', $data);
	// 	$this->view('home_index/footer');
	// }

	// public function penerima()
	// {
	// 	$data['judul'] = 'Data Report Penerima';
	// 	$data['pnr'] = $this->model('Penerima_model')->getAllPenerima();
	// 	$data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
	// 	$this->view('home_index/header', $data);
	// 	$this->view('Report/Penerima', $data);
	// 	$this->view('home_index/footer');
	// }

	public function pembayar()
	{
		$data['judul'] = 'Data Laporan Pembayar';
		$data['pnr'] = $this->model('Pembayar_model')->getAllPembayar();
		$this->view('Report/Pembayar', $data);
	}

	public function penerima()
	{
		$data['judul'] = 'Data Laporan Penerima';
		$data['pnr'] = $this->model('Penerima_model')->getAllPenerima();
		$this->view('Report/Penerima', $data);
	}

	public function zakat()
	{
		$data['judul'] = 'Data Laporan Keuangan Zakat';
		$data['pnr'] = $this->model('Pembayaran_model')->getAllPembayaran();
		$this->view('Report/Zakat', $data);
	}

	public function infak()
	{
		$data['judul'] = 'Data Laporan Keuangan Infak';
		$data['pnr'] = $this->model('Infak_model')->getAllInfak();
		$this->view('Report/Infak', $data);
	}




}