<?php

class login extends Controller {
	public function __construct(){
		$this->db = new database;
	}
	public function index()
	{
		$data['judul'] = 'Login - Zakat';
		$this->view('login/index',$data);
	}

	public function aksi_login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];


		$cekuser = $this->db->query("SELECT * FROM t_user WHERE username = '$username' and password='$password'");
		$ck = $this->db->resultSet();

		foreach($ck as $hasil){
		if (count($ck) == 1) {
			session_start();
			$_SESSION['username'] = $hasil['username'];
			$_SESSION['password'] = $hasil['password'];
			$_SESSION['status'] = $hasil['status'];
			$_SESSION['level'] = $hasil['level'];

			header('Location:' . BASEURL .'/home_index');
		}
	}

		if (count($ck) == 0) {
			echo 
			"<script>
	            alert('Username atau Password Salah!');
	            document.location.href='".BASEURL."/login'
	        </script>
	        ";
		}


	}


  }
