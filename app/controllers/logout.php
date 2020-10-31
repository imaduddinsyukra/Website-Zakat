<?php
session_start();


class logout extends Controller {
	public function __construct(){
		$this->db = new database;
	}
	public function index()
	{
		session_destroy();
		header('Location:' . BASEURL.'/' );

	}
}
