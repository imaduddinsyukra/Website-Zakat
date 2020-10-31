<?php 

class home_index extends controller {
	public function index()
	{
		$data['judul'] = 'Home';
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('home_index/header', $data);
		$this->view('home_index/index', $data);
		$this->view('home_index/footer'); 
	}
}