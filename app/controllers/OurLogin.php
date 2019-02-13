<?php
	
	/**
	* OurLogin Controller
	*/
	class OurLogin extends HeadController {
		
		private $_tableuser = "tbl_user";
		private $loginmodel;

		public function __construct() {
			parent::__construct();
			$this->loginmodel = $this->load->model( "LoginModel" );
		// public function __construct() End here...
		}

		public function welcome() {
			$this->login();
		}

		public function login() {
			Session::init();
			if( Session::get( 'login' ) == true ) {
				header( "Location: " . BASE_URL . "/Admin" );
			}
			$this->load->view( "login/login" );
		// public function login() End here...	
		}

		public function loginAuth() {
			
			$username = $_POST['username'];
			$password = md5( $_POST['password'] );
			$count = $this->loginmodel->userControl( $this->_tableuser, $username, $password );
			if( $count > 0 ) {
				$result = $this->loginmodel->getUserData( $this->_tableuser, $username, $password );
				Session::init();
				Session::set( "login", true );
				Session::set( "username", $result[0]['username'] );
				Session::set( "userid", $result[0]['id'] );
				Session::set( "level", $result[0]['level'] );
				header( "Location: " . BASE_URL . "/Admin" );
			} else {
				header( "Location: " . BASE_URL . "/OurLogin" );
			}

		// public function loginAuth() End here...
		}

		public function logout() {
			Session::init();
			Session::destroy();
			header( "Location: " . BASE_URL . "/OurLogin" );
		// public function logout() End here...
		}

	// class OurLogin extends HeadController End here...
	}

?>