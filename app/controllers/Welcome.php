<?php
	
/*
* Welcome Controller
*/
	class Welcome extends HeadController {

		private $_tablepost = "tbl_post";
		private $_tablecat = "tbl_category";

		public function __construct() {
			parent::__construct();
		// public function __construct() End here...
		}

		public function welcome() {
			$this->home();
		}

		public function home() {

				$data = array();
				$catmodel = $this->load->model( "CatModel" );
				$postmodel = $this->load->model( "PostModel" );

				$data['catlist'] = $catmodel->catList( $this->_tablecat );
				$data['allpost'] = $postmodel->getAllPost( $this->_tablepost, $this->_tablecat );
				$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );
				
				$this->load->view( "header" );
				$this->load->view( "search", $data );
				$this->load->view( "content", $data );
				$this->load->view( "sidebar", $data );
				$this->load->view( "footer" );

		// public function home() End here..	
		}

		public function postDetails( $id = NULL ) {
			
			$data = array();
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['postbyid'] = $postmodel->getPostById( $this->_tablepost, $this->_tablecat, $id );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );
			
			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "details", $data );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );

		// public function postDetails( $id ) End here...
		}

		public function postByCat( $id = NULL ) {
			
			$data = array();
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['postbycat'] = $postmodel->getPostByCat( $this->_tablepost, $this->_tablecat, $id );
			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );

			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "postbycat", $data );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );

		//public function postByCat( $id ) End here...
		}

		public function search() {

			$data = array();

			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$keyword = $_REQUEST['keyword'];
			$cat = $_REQUEST['cat'];
			
			$data['postbysearch'] = $postmodel->getPostBySearch( $this->_tablepost, $this->_tablecat, $keyword, $cat );
			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );

			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "searchresult", $data );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );
		}

		public function test() {
			
			$data = array();
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['catlist'] = $catmodel->catList( $this->_tablecat );
			$data['latestposts'] = $postmodel->getLatestPost( $this->_tablepost, 6 );

			$this->load->view( "header" );
			$this->load->view( "search", $data );
			$this->load->view( "test" );
			$this->load->view( "sidebar", $data );
			$this->load->view( "footer" );
		// public function test() End here..	
		}

		public function udaan() {
			echo "love";
		// public function udaan() End here...
		}



	// class Welcome extends HeadController End here...	
	}

?>