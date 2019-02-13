<?php
	/**
	* Category Model
	*/
	class CatModel extends HeadModel {
		
		//private $cat_table = "tbl_category";

		public function __construct() {
			parent::__construct();
		// public function __construct() End here...
		}

		public function catList( $table ) {
			
			/*
			return array(
				
				array(

					'catOne' 	=> 'Education',
					'catTwo' 	=> 'Sports',
					'catThree' 	=> 'Health',
					'catFour' 	=> 'Tech',
					'catFive' 	=> 'Politics'
				),

				array(
					'catOne' 	=> 'Education',
					'catTwo' 	=> 'Sports',
					'catThree' 	=> 'Health',
					'catFour' 	=> 'Tech',
					'catFive' 	=> 'Politics'
				)

			);
			*/

			// $sql = "SELECT * FROM tbl_category";
			// $getcat = $this->db->query( $sql );
			// $result = $getcat->fetchAll();
			// return $result;
			$sql = "SELECT * FROM {$table} ORDER BY id DESC";
			return $this->db->select( $sql );


		// public function catList() End here...
		}

		public function catById( $table, $id ) {
			$sql = "SELECT * FROM {$table} WHERE id = :id";
			$data = array( ":id" => $id );
			return $this->db->select( $sql, $data );
		// public function catById( $table, $id ) End here...
		}

		public function insertCat( $table, $data ) {
			return $this->db->insert( $table, $data );
		// public function insertCat( $table, $data ) End here...
		}

		public function updateCat( $table, $data, $cond ) {
			return $this->db->update( $table, $data, $cond );
		//public function updateCat( $this->_table, $data, $cond ) End here...
		}

		public function delCatById( $table, $cond ) {
			return $this->db->delete( $table, $cond );
		// public function delCatById( $this->_table, $cond ) End here..
		}

	// class CatModel extends HeadModel End here...
	}
?>