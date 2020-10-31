<?php 

class Home extends controller {
	public function index()
	{
		$data['judul'] = 'Home';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('login/index', $data);
	}

	public function dashboard()
	{
		$data['judul'] = 'Home';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
		$this->view('login/index', $data);
		$this->view('templates/footer'); 
	}
}