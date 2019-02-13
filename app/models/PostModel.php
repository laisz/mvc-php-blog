<?php
	/**
	* Post Model
	*/
	class PostModel extends HeadModel {
		
		//private $_table = "tbl_post";

		public function __construct() {
			parent::__construct();
		// public function __construct() End here...
		}

		public function getAllPost( $tablepost, $tablecat ) {	// with LIMIT ...
			$sql = "SELECT {$tablepost}.*, {$tablecat}.name 
					FROM {$tablepost} INNER JOIN {$tablecat} 
					ON {$tablepost}.cat = {$tablecat}.id 
					ORDER BY {$tablepost}.id DESC LIMIT 3";
			return $this->db->select( $sql );

		// public function getAllPost( $table ) End here...
		}

		public function getPostList( $tablepost, $tablecat ) {	// with No LIMIT
			$sql = "SELECT {$tablepost}.*, {$tablecat}.name 
					FROM {$tablepost} INNER JOIN {$tablecat} 
					ON {$tablepost}.cat = {$tablecat}.id 
					ORDER BY {$tablepost}.id DESC";
			return $this->db->select( $sql );

		// public function getAllPost( $table ) End here...
		}

		public function getPostById( $tablepost, $tablecat, $id ) {
			$sql = "SELECT {$tablepost}.*, {$tablecat}.name 
					FROM {$tablepost} INNER JOIN {$tablecat} 
					ON {$tablepost}.cat = {$tablecat}.id
					WHERE {$tablepost}.id = {$id}";
			return $this->db->select( $sql );
		}

		public function postById( $tablepost, $id ) {
			$sql = "SELECT * FROM {$tablepost} WHERE id = '{$id}'";
			return $this->db->select( $sql );
		}

		public function getPostByCat( $tablepost, $tablecat, $id ) {
			$sql = "SELECT {$tablepost}.*, {$tablecat}.name 
					FROM {$tablepost} INNER JOIN {$tablecat} 
					ON {$tablepost}.cat = {$tablecat}.id
					WHERE {$tablecat}.id = {$id}";
			return $this->db->select( $sql );
		}

		public function getLatestPost( $tablepost, $limit = 5 ) {
			$sql = "SELECT * FROM {$tablepost} ORDER BY id DESC LIMIT {$limit}";
			return $this->db->select( $sql );
		}

		public function getPostBySearch( $tablepost, $tablecat, $keyword, $cat ) {
			
			if( empty( $keyword ) && $cat == 0 ) {
				header( "Location: " . BASE_URL . "/Welcome/home" );
			}

			if( isset( $keyword ) && ! empty( $keyword ) ) {
				$sql = "SELECT {$tablepost}.*, {$tablecat}.name 
					FROM {$tablepost} INNER JOIN {$tablecat} 
					ON {$tablepost}.cat = {$tablecat}.id 
					WHERE {$tablepost}.title LIKE '%{$keyword}%' OR {$tablepost}.content LIKE '%{$keyword}%'";
				//$sql = "SELECT * FROM {$tablepost} WHERE title LIKE '%{$keyword}%' OR content LIKE '%{$keyword}%'";
			// if( isset( $keyword ) && ! empty( $keyword ) ) End here...
			} elseif( isset( $cat ) ) {
				$sql = "SELECT {$tablepost}.*, {$tablecat}.name 
					FROM {$tablepost} INNER JOIN {$tablecat} 
					ON {$tablepost}.cat = {$tablecat}.id
					WHERE {$tablecat}.id = '{$cat}'";
				//$sql = "SELECT * FROM {$tablepost} WHERE cat = '{$cat}'";
			}

			return $this->db->select( $sql );
		}

		public function insertPost( $tablepost, $data ) {
			return $this->db->insert( $tablepost, $data );
		// public function insertCat( $tablepost, $data ) End here...
		}

		public function updatePost( $tablepost, $data, $cond ) {
			return $this->db->update( $tablepost, $data, $cond );
		//public function updatePost( $tablepost, $data, $cond ) End here...
		}

		public function deletePostById( $tablepost, $cond ) {
			return $this->db->delete( $tablepost, $cond );
		// public function deletePostById( $tablepost, $cond ) End here..
		}


	// class PostModel extends HeadModel End here...
	}
?>