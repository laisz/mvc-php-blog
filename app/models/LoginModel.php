<?php
	
	/**
	* Login Model
	*/
	class LoginModel extends HeadModel {
		
		public function __construct() {
			parent::__construct();
		// public function __construct() End here...
		}

		public function userControl( $tableuser, $username, $password ) {
			$sql = "SELECT * FROM {$tableuser} WHERE username = ? AND password = ?";
			return $this->db->affectedRows( $sql, $username, $password );
		// public function userControl( $tableuser, $username, $password ) End here...
		}

		public function getUserData( $tableuser, $username, $password ) {
			$sql = "SELECT * FROM {$tableuser} WHERE username = ? AND password = ?";
			return $this->db->selectUser( $sql, $username, $password );
		}

	// class LoginModel extends HeadModel End here..
	}
?>