<?php
	
	/**
	* Admin Controller
	*/
	class Admin extends HeadController {
		
		private $_tablepost = "tbl_post";
		private $_tablecat = "tbl_category";
		private $_tableui = "tbl_ui";
		//private $_pagename = array();
		//private $data = array();
		private $valid;

		public function __construct() {
			parent::__construct();
			Session::checkSession();

			$data = array();
			
		// public function __construct() End here...
		}

		public function welcome() {
			$this->home();
		}

		public function home() {
			
			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );
			$data['getusername'] = array(

				"username" => Session::get( 'username' )
			); 

			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/home", $data );
			$this->load->view( "admin/admin_footer" );
		}

		public function addCategory() {

			$data['mypage'] = "Add Catergory";
			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/addcategory" );
			$this->load->view( "admin/admin_footer" );
		// public function addCategory() End here..
		}

		public function insertCategory() {
			
			if( isset( $_POST['addcat'] ) ) {

				$mdata = array();
				$catmodel = $this->load->model( "CatModel" );
				$valid = $this->load->validation( "VForm" );
				$uimodel = $this->load->model( "UIModel" );
				$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

				$valid->post( 'name' )
							->isEmpty()
							->length( 6, 20 );

				$valid->post( 'title' )
							->isEmpty()
							->length( 6, 20 );



				$name 	= $valid->value( 'name' );
				$title 	= $valid->value( 'title' );
				
				$insert_data = array(
					'name' 	=> $name,
					'title' => $title
				);

				if( $valid->submit() ) {

					$result = $catmodel->insertCat( $this->_tablecat, $insert_data );
					if( $result == 1 ) {
						$mdata['msg'] = "Category Added SuccessFully !! ";
						$myurl = BASE_URL . "/Admin/categoryList?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					} else {
						$mdata['error'] = "Category Couldn't be Added !! ";
						$myurl = BASE_URL . "/Admin/addCategory?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					}
				// if( $valid->submit() ) End here...
				} else {
					$data['mypage'] = "Add Catergory";
					$data['caterrors'] = $valid->getErrors();

					$this->load->view( "admin/admin_header", $data );
					$this->load->view( "admin/admin_sidebar" );
					$this->load->view( "admin/addcategory", $data );
					$this->load->view( "admin/admin_footer" );
				}

			// if( isset( $_POST['addcat'] ) ) End here..
			} else {
				header( "Location: " . BASE_URL . "/Admin" );
			}
			
		// public function insertCategory() End here..
		}

		public function categoryList() {

			$data['mypage'] = "Catergory List";
			$catmodel = $this->load->model( "CatModel" );
			$data['catlist'] = $catmodel->catList( $this->_tablecat );

			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );
			
			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/catlist", $data );
			$this->load->view( "admin/admin_footer" );
		// public function categoryList() End here...
		}

		public function updateCatPage( $id = NULL ) {

			$data['mypage'] = "Update Catergory";
			$catmodel = $this->load->model( "CatModel" );
			$data['catbyid'] = $catmodel->catById( $this->_tablecat, $id );

			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );
			
			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/updatecat", $data );
			$this->load->view( "admin/admin_footer" );
		// public function updateCatPage() End here..
		}

		public function updateCategory( $id = NULL ) {
			
			if( isset( $_POST['updatecat'] ) ) {

				$mdata = array();

				$catmodel = $this->load->model( "CatModel" );
				$valid = $this->load->validation( "VForm" );

				$uimodel = $this->load->model( "UIModel" );
				$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

				$valid->post( 'name' )->isEmpty()->length( 6, 20 );
				$valid->post( 'title' )->isEmpty()->length( 6, 20 );

				$name 	= $valid->value( 'name' );
				$title 	= $valid->value( 'title' );

				$update_data = array( 
					
					"name" 	=> $name,
					"title" => $title
				);

				$cond 		= "id={$id}";

				if( $valid->submit() ) {
					
					$result = $catmodel->updateCat( $this->_tablecat, $update_data, $cond );
					if( $result == 1 ) {
						$mdata['msg'] = "Category Updated SuccessFully !! ";
						$myurl = BASE_URL . "/Admin/categoryList?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					} else {
						$mdata['error'] = "Category Couldn't be Updated !! ";
						$myurl = BASE_URL . "/Admin/updateCatPage?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					}

				// if( $valid->submit() ) End here..
				} else {
					$data['mypage'] = "Update Catergory";

					$data['caterrors'] = $valid->getErrors();
					$data['catbyid'] = $catmodel->catById( $this->_tablecat, $id );
					
					$this->load->view( "admin/admin_header", $data );
					$this->load->view( "admin/admin_sidebar" );
					$this->load->view( "admin/updatecat", $data );
					$this->load->view( "admin/admin_footer" );
				}

			// if( isset( $_POST['updatecat'] ) ) End here...
			} else {
				header( "Location: " . BASE_URL . "/Admin" );
			}

		// public function updateCategory() End here...
		}

		public function deleteCat( $id = NULL ) {
			$cond = "id={$id}";
			$catmodel = $this->load->model( "CatModel" );
			$result = $catmodel->delCatById( $this->_tablecat, $cond );
			if( $result == 1 ) {
				$mdata['msg'] = "Category Deleted SuccessFully !! ";
				$myurl = BASE_URL . "/Admin/categoryList?msg=" . urlencode( serialize( $mdata ) );
				header( "Location: {$myurl}" );
			} else {
				$mdata['error'] = "Category Couldn't be Deleted !! ";
				$myurl = BASE_URL . "/Admin/categoryList?msg=" . urlencode( serialize( $mdata ) );
				header( "Location: {$myurl}" );
			}
		}

		public function addArticle() {

			$data['mypage'] = "Add Post";
			$catmodel = $this->load->model( "CatModel" );
			$data['catlist'] = $catmodel->catList( $this->_tablecat );

			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/addpost", $data );
			$this->load->view( "admin/admin_footer" );
		}

		public function articleList(  ) {

			$data['mypage'] = "Article List";

			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );

			$data['allpost'] = $postmodel->getPostList( $this->_tablepost, $this->_tablecat );
			$data['catlist'] = $catmodel->catList( $this->_tablecat );

			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/postlist", $data );
			$this->load->view( "admin/admin_footer" );
		}

		public function addNewPost() {

			if( isset( $_POST['addpost'] ) ) {

				$mdata = array();
				$postmodel = $this->load->model( "PostModel" );
				$catmodel = $this->load->model( "CatModel" );
				$valid = $this->load->validation( "VForm" );
				$uimodel = $this->load->model( "UIModel" );
				$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

				$valid->post( 'title' )->isEmpty()->length( 12, 100 );
				$valid->post( 'content' )->isEmpty();
				$valid->post( 'cat' )->isCatEmpty();

				$title 		= $valid->value( 'title' );
				$content 	= $valid->value( 'content' );
				$cat 		= $valid->value( 'cat' );
				
				$insert_data = array(
					
					'title' 	=> $title,
					'content' 	=> $content,
					'cat' 		=> $cat
				);

				if( $valid->submit() ) {

					$result = $postmodel->insertPost( $this->_tablepost, $insert_data );
					if( $result == 1 ) {
						$mdata['msg'] = "Post Added SuccessFully !! ";
						$myurl = BASE_URL . "/Admin/articleList?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					} else {
						$mdata['error'] = "Post Couldn't be Added !! ";
						$myurl = BASE_URL . "/Admin/addArticle?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					}
				} else {

					$data['mypage'] = "Add Post";
					$data['catlist'] = $catmodel->catList( $this->_tablecat );
					$data['posterrors'] = $valid->getErrors();

					$this->load->view( "admin/admin_header", $data );
					$this->load->view( "admin/admin_sidebar" );
					$this->load->view( "admin/addpost", $data );
					$this->load->view( "admin/admin_footer" );
				}

			// if( isset( $_POST['addpost'] ) ) End here...
			} else {
				header( "Location: " . BASE_URL . "/Admin" );
			}

		// public function addNewPost() End here...	
		}

		public function editArticle( $id = NULL ) {

			$data['mypage'] = "Edit Post";
			$catmodel = $this->load->model( "CatModel" );
			$postmodel = $this->load->model( "PostModel" );
			$data['singlepostbyid'] = $postmodel->postById( $this->_tablepost, $id );
			$data['catlist'] = $catmodel->catList( $this->_tablecat );

			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/editpost", $data );
			$this->load->view( "admin/admin_footer" );

		// public function editArticle( $id = NULL ) End here...
		}

		public function updateArticle( $id = NULL ) {

			if( isset( $_POST['updatepost'] ) ) {

				$mdata = array();
				
				$catmodel = $this->load->model( "CatModel" );
				$postmodel = $this->load->model( "PostModel" );
				$valid = $this->load->validation( "VForm" );

				$uimodel = $this->load->model( "UIModel" );
				$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

				$valid->post( 'title' )->isEmpty()->length( 12, 100 );
				$valid->post( 'content' )->isEmpty();
				$valid->post( 'cat' )->isCatEmpty();

				$title 		= $valid->value( 'title' );
				$content 	= $valid->value( 'content' );
				$cat 		= $valid->value( 'cat' );
				
				$update_data = array(
					
					'title' 	=> $title,
					'content' 	=> $content,
					'cat' 		=> $cat
				);

				$cond 		= "id={$id}";

				if( $valid->submit() ) {

					$result = $postmodel->updatePost( $this->_tablepost, $update_data, $cond );
					if( $result == 1 ) {
						$mdata['msg'] = "Post Updated SuccessFully !! ";
						$myurl = BASE_URL . "/Admin/articleList?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					} else {
						$mdata['error'] = "Post Couldn't be Updated !! ";
						$myurl = BASE_URL . "/Admin/editArticle?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					}

				// if( $valid->submit() ) End here...
				} else {

					$data['mypage'] = "Edit Post";
					$data['singlepostbyid'] = $postmodel->postById( $this->_tablepost, $id );
					$data['catlist'] = $catmodel->catList( $this->_tablecat );
					$data['posterrors'] = $valid->getErrors();

					$this->load->view( "admin/admin_header", $data );
					$this->load->view( "admin/admin_sidebar" );
					$this->load->view( "admin/editpost", $data );
					$this->load->view( "admin/admin_footer" );
				}

			// if( isset( $_POST['updatepost'] ) ) End here...
			} else {
				header( "Location: " . BASE_URL . "/Admin" );
			}
		// public function updateArticle( $id = NULL ) End here...
		}


		public function deleteArticle( $id = NULL ) {
			
			$cond = "id={$id}";
			$postmodel = $this->load->model( "PostModel" );
			$result = $postmodel->deletePostById( $this->_tablepost, $cond );
			if( $result == 1 ) {
				$mdata['msg'] = "Post Deleted SuccessFully !! ";
				$myurl = BASE_URL . "/Admin/articleList?msg=" . urlencode( serialize( $mdata ) );
				header( "Location: {$myurl}" );
			// if( $result == 1 ) End here...
			} else {
				$mdata['error'] = "Post Couldn't be Deleted !! ";
				$myurl = BASE_URL . "/Admin/articleList?msg=" . urlencode( serialize( $mdata ) );
				header( "Location: {$myurl}" );
			}

		// public function deleteArticle( $id = NULL ) End here...
		}

		public function uiOption() {
			$data['mypage'] = "UI Option";
			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );
			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/ui", $data );
			$this->load->view( "admin/admin_footer" );

		// public function uiOption() End here...
		}

		public function changeUI( $id = NULL ) {

			if( isset( $_POST['changeui'] ) ) {

				$mdata = array();
				//$id = 1;

				$uimodel = $this->load->model( "UIModel" );
				$valid = $this->load->validation( "VForm" );

				$valid->post( 'bgcolor' )->isEmpty();
				$valid->post( 'textcolor' )->isEmpty();

				$bgcolor 	= $valid->value( 'bgcolor' );
				$textcolor 	= $valid->value( 'textcolor' );

				$update_data = array( 
					
					"bgcolor" 	=> $bgcolor,
					"textcolor" => $textcolor
				);

				$cond 		= "id={$id}";

				if( $valid->submit() ) {
					
					$result = $uimodel->updateUI( $this->_tableui, $update_data, $cond );
					if( $result == 1 ) {
						$mdata['msg'] = "UI Changed SuccessFully !! ";
						$myurl = BASE_URL . "/Admin/uiList?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					} else {
						$mdata['error'] = "UI Couldn't be Changed !! ";
						$myurl = BASE_URL . "/Admin/uiOption?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					}

				// if( $valid->submit() ) End here..
				} else {

					$data['mypage'] = "UI Option";
					$data['getcolor'] = $uimodel->getColor( $this->_tableui, $id );
					$this->load->view( "admin/admin_header", $data );
					$this->load->view( "admin/admin_sidebar" );
					$this->load->view( "admin/ui", $data );
					$this->load->view( "admin/admin_footer" );

				}

			// if( isset( $_POST['updatecat'] ) ) End here...
			} else {
				header( "Location: " . BASE_URL . "/Admin" );
			}
		}

		public function uiList() {
			$data['mypage'] = "UI List";
			$uimodel = $this->load->model( "UIModel" );
			$data['uilist'] = $uimodel->uiList( $this->_tableui );
			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/uilist", $data );
			$this->load->view( "admin/admin_footer" );
		}



	// class Admin extends HeadController End here...
	}

?>