<?php
	/**
	* UserModel Model
	*/
	class UserModel extends HeadModel {

		public function __construct() {
			parent::__construct();
		// public function __construct() End here...
		}

		public function userList( $tableuser ) {
			$sql = "SELECT * FROM {$tableuser} ORDER BY id DESC";
			return $this->db->select( $sql );
		// public function userList() End here...
		}

		public function addUser( $tableuser, $data ) {
			return $this->db->insert( $tableuser, $data );
		// public function addUser( $tableuser, $data ) End here...
		}

		public function userById( $tableuser, $id ) {
			$sql = "SELECT * FROM {$tableuser} WHERE id = :id";
			$data = array( ":id" => $id );
			return $this->db->select( $sql, $data );
		// public function userById( $tableuser, $id ) End here...
		}

		public function updateUser( $tableuser, $data, $cond ) {
			return $this->db->update( $tableuser, $data, $cond );
		//public function updateUser( $tableuser, $data, $cond ) End here...
		}

		public function delUserById( $tableuser, $cond ) {
			return $this->db->delete( $tableuser, $cond );
		// public function delUserById( $tableuser, $cond ) End here..
		}

	// class UserModel extends HeadModel End here...
	}
?>