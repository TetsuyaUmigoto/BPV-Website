<?php

class Login extends Controller{

    public function __construct(){
	parent::__construct();
	$this->view->title = 'Login';
	$this->view->style = 'bootstrap';
	$this->view->altStyle = 'style1';
    }

    public function index(){
	$this->view->render('login');
    }

    public function userLogin(){
	//get input from users
	$username = str_replace(' ', '', $_POST['studentnummer']);
	$password = $_POST['password'];
	// check input for empty fields
	if(empty($username) || empty($password)){ // check input fields
	    echo '&nbsp All fields are required, acces denied!<br>';
	}else{
	    // send user input to model
	    $this->model->userLogin();
	    //}
	}
    }

    public function userCreate(){
	$name = str_replace(' ', '', $_POST['name']);
	$username = str_replace(' ', '', $_POST['username']);
	$password1 = str_replace(' ', '', $_POST['password1']);
	$password2 = str_replace(' ', '', $_POST['password2']);
	$email = str_replace(' ', '', $_POST['email']);

	if($name == '' || $password1 == '' || $password2 == '' || $username == '' || $email == ''){
	    echo "&nbsp All fields are required!" . "<br>";
	    $this->redirect();
	}elseif(!preg_match("/^[a-z'0-9–-]+$/i", $name) && !preg_match("/^[a-z'0-9–-]+$/i", $username)){
	    echo '&nbsp Invalid name or username allowed characters are a-z A-z 0-9!<br>';
	    $this->redirect();
	}elseif($password1 !== $password2){
	    echo '&nbsp Passwords do not match!<br>';
	    $this->redirect();
	}else{
	    $this->model->userCreate();
	}
    }

    public function userLogout(){
	Session::destroy();
	header('location: ' . URL);
    }

}
