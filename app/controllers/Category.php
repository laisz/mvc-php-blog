<?php
	
/*
* Category Controller
*/
	class Category extends HeadController {
		
		private $_tablepost = "tbl_post";
		private $_tablecat = "tbl_category";

		//private $data = array();

		public function __construct() {
			parent::__construct();
		// public function __construct() End here...
		}

		public function categoryList() {
			
			$data = array();
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['catlist'] = $catmodel->catList( $this->_tablecat ); // by assigning it here, We're Creating a 2D Array..so, to access we'll need to use double foreach loop..
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );	
			
			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "categorylist", $data );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );
		// public function categoryList() End here...
		}

		public function catById() {
			$data = array();
			$id = 1;

			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['catbyid'] = $catmodel->catById( $this->_tablecat, $id );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );

			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( 'catbyid', $data );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );

		// public function catById() End here...
		}

		public function addCategory() {
			
			$data = array();

			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );
			
			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );

			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "addcategory" );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );
		// public function addCategory() End here..
		}

		public function insertCategory() {
			
			$data = array();
			$mdata = array();
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );

			$name 	= $_POST['name'];
			$title 	= $_POST['title'];
			
			$insert_data = array(
				'name' 	=> $name,
				'title' => $title
			);

			if( empty( $name ) || empty( $title ) ) {
				$mdata['error'] = "Field Must Not Be Empty !! ";
			// if( empty( $name ) || empty( $title ) ) End here...
			} else {
				$result = $catmodel->insertCat( $this->_tablecat, $insert_data );
				if( $result == 1 ) {
					$mdata['msg'] = "Category Added SuccessFully !! ";
				} else {
					$mdata['error'] = "Category Couldn't be Added !! ";
				}
			}

			$this->load->view( "header" );			
			$this->load->view( "search", $data );
			$this->load->view( "addcategory", $mdata );			
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );

		// public function insertCategory() End here..
		}

		public function updateCatPage() {
			
			$data = array();
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$id = 1;

			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );
			$data['catbyid'] = $catmodel->catById( $this->_tablecat, $id );
			
			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "updatecategory", $data );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );
		// public function updateCatPage() End here..
		}

		
		public function updateCategory() {
			
			$data = array();
			$mdata = array();
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );

			$id 		= $_POST['id'];
			$name 		= $_POST['name'];
			$title 		= $_POST['title'];
			$update_data 		= array( 
				
				"name" 	=> $name,
				"title" => $title
			);

			$cond 		= "id={$id}";

			if( empty( $name ) || empty( $title ) ) {
				$mdata['error'] = "Field Must Not Be Empty !! ";
			} else {
				$result = $catmodel->updateCat( $this->_tablecat, $update_data, $cond );
				if( $result == 1 ) {
					$mdata['msg'] = "Category Updated SuccessFully !! ";
				} else {
					$mdata['error'] = "Category Couldn't be Updated !! ";
				}
			}
			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "updatecategory", $mdata );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );

		// public function updateCategory() End here...
		}

		public function deleteCategoryById() {
			
			$catmodel = $this->load->model( "CatModel" );

			$cond = "id=11";
			$catmodel->delCatById( $this->_tablecat, $cond );
		// public function deleteCategoryById() End here...
		}
		

	// class Category extends HeadController End here...	
	}

?>