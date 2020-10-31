<?php 

class ReportP extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Report Penerima';
		$data['pnr'] = $this->model('Penerima_model')->getAllPenerima();
		$data['total'] = $this->model('Pembayaran_model')->getAllPembayaran2();
		$this->view('home_index/header', $data);
		$this->view('ReportP/Penerima', $data);
		$this->view('home_index/footer');
	}

	


}