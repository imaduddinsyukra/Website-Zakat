<?php

class login_model {

	private $table='zakat';
	private $db;

	public function __construct(){
		$this->db = new database;
	}
	public function aksiLogin($user, $pass)
	{
		$this->db->query("SELECT * FROM zakat WHERE username = '".$user."' and password='".$pass."'");
		$this->db->resultSet();
		return $this->db->single();
	}

}
