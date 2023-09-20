<?php

namespace app\transfer;

class User{
	public $id;
	public $login;
	public $email;
	public $role;
	
	public function __construct($id, $login, $email, $role){
		$this->id = $id;
		$this->login = $login;
		$this->email = $email;
		$this->role = $role;		
	}	
}