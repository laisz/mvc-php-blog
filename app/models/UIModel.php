<?php
	
	/**
	* Ui Model
	*/
	class UIModel extends HeadModel {
		
		public function __construct() {
			parent::__construct();
		// public function __construct() End here...
		}

		public function uiList( $tableui ) {
			$sql = "SELECT * FROM {$tableui} ORDER BY id DESC";
			return $this->db->select( $sql );
		// public function uiList() End here...
		}

		public function getColor( $tableui, $id ) {
			$sql = "SELECT * FROM {$tableui} WHERE id = {$id}";
			return $this->db->select( $sql );
		// public function uiList() End here...
		}

		public function updateUI( $tableui, $data, $cond ) {
			return $this->db->update( $tableui, $data, $cond );
		//public function updateUI( $tableui, $data, $cond ) End here...
		}

	// class UIModel extends HeadModel End here...
	}

?>