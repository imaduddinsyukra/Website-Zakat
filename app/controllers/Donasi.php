<?php 

class Donasi extends Controller {
	public function index()
	{
		$data['judul'] = 'Data Donasi';
		$data['pnr'] = $this->model('Donasi_model')->getAllDonasi();
		$this->view('home_index/header', $data);
		$this->view('Donasi/index', $data);
		$this->view('home_index/footer');
	}

	public function form_edit($id)
	{
		$data['judul'] = 'Edit Status Donasi';
		$data['pnr'] = $this->model('Donasi_model')->getdonasiById($id);
		$data['Amil'] = $this->model('Amil_model')->sesiAmil();
		
		$this->view('home_index/header', $data);
		$this->view('Donasi/form_edit', $data);
		$this->view('home_index/footer');
	}

	public function edit_data(){
		if($this->model('Donasi_model')->editDataDonasi($_POST) > 0) {
			header('Location:' . BASEURL .'/Donasi');
			exit;
		}
		else{
			header('Location:' . BASEURL .'/Donasi');
			exit;
		}
	}


}