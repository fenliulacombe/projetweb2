<?php

class User{

	private $id;
	protected $username;
	private $email;
	private $password;

	public function __construct($username, $password){
		//echo 'constructor called';
		$this->username = $username;
		$this->password = $password;
	}

	public function register(){
		echo 'user registered';
	}

	public function login(){
		//echo $username.' is now logged in';
		$this->auth_user();
	}

	public function auth_user(){
		//echo $this->username.' is authenticated';
	}

	public function __destruct(){
		//echo 'Destructor called';
	}
}

//$user = new User('fen','1234');
//echo $user->username;

//$user->register();
//$user->login('brad','1234');

class Post{
	private $name;
	
	public function __set($name, $value){
		echo 'Setting '.$name.' to <strong>'.$value.'</strong></br>';
		$this->name = $value;
	}

	public function __get($name){
		echo 'Getting '.$name.' to <strong>'.$this->name.'</strong></br>';
	}
}

$post = new Post;
$post->name = ''