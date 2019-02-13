<?php
	
	/**
	* User Controller
	*/
	class User extends HeadController {
		
		private $_tablepost = "tbl_post";
		private $_tablecat = "tbl_category";
		private $_tableuser = "tbl_user";
		private $_tableui = "tbl_ui";
		//private $_pagename;

		public function __construct() {
			parent::__construct();
			$data = array();
		// public function __construct() End here...
		}

		public function welcome() {
			$this->makeUser();
		}

		public function makeUser() {
			
			$data['mypage'] = "Add User";

			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/makeuser" );
			$this->load->view( "admin/admin_footer" );
		}

		public function addNewUser() {
			
			if( isset( $_POST['adduser'] ) ) {
				
				$mdata = array();
				$usermodel = $this->load->model( "UserModel" );
				$valid = $this->load->validation( "VForm" );

				$uimodel = $this->load->model( "UIModel" );
				$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );

				$valid->post( 'username' )->isEmpty()->length( 4, 15 );
				$valid->post( 'password' )->isEmpty()->length( 6, 15 );
				$valid->post( 'level' )->isCatEmpty();


				$username 	= $valid->value( 'username' );
				$password 	= $valid->value( 'password' );
				$level 	= $valid->value( 'level' );
				
				$insert_data = array(
					'username' 	=> $username,
					'password' 	=> md5( $password ),
					'level'		=> $level
				);

				if( $valid->submit() ) {

					$result = $usermodel->addUser( $this->_tableuser, $insert_data );
					if( $result == 1 ) {
						$mdata['msg'] = "User Added SuccessFully !! ";
						$myurl = BASE_URL . "/User/listUser?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					} else {
						$mdata['error'] = "User Couldn't be Added !! ";
						$myurl = BASE_URL . "/User/makeUser?msg=" . urlencode( serialize( $mdata ) );
						header( "Location: {$myurl}" );
					}

				// if( $valid->submit() ) End here...
				} else {
					
					$data['mypage'] = "Add User";
					$data['usererrors'] = $valid->getErrors();

					$this->load->view( "admin/admin_header", $data );
					$this->load->view( "admin/admin_sidebar" );
					$this->load->view( "admin/makeuser", $data );
					$this->load->view( "admin/admin_footer" );
				}

			// if( isset( $_POST['adduser'] ) ) End here...
			} else {
				header( "Location: " . BASE_URL . "/User" );
			}

		// public function addNewUser() End here..	
		}

		public function deleteUser( $id = NULL ) {
			
			$cond = "id={$id}";
			$usermodel = $this->load->model( "UserModel" );
			$result = $usermodel->delUserById( $this->_tableuser, $cond );
			if( $result == 1 ) {
				$mdata['msg'] = "User Deleted SuccessFully !! ";
				$myurl = BASE_URL . "/User/listUser?msg=" . urlencode( serialize( $mdata ) );
				header( "Location: {$myurl}" );
			// if( $result == 1 ) End here...
			} else {
				$mdata['error'] = "User Couldn't be Deleted !! ";
				$myurl = BASE_URL . "/User/listUser?msg=" . urlencode( serialize( $mdata ) );
				header( "Location: {$myurl}" );
			}
		}

		public function listUser() {
			
			$data['mypage'] = "User List";
			$usermodel = $this->load->model( "UserModel" );
			$data['users'] = $usermodel->userList( $this->_tableuser );

			$uimodel = $this->load->model( "UIModel" );
			$data['getcolor'] = $uimodel->getColor( $this->_tableui, 1 );
			
			$this->load->view( "admin/admin_header", $data );
			$this->load->view( "admin/admin_sidebar" );
			$this->load->view( "admin/userlist", $data );
			$this->load->view( "admin/admin_footer" );
		}


	// class User extends HeadController End here...
	}

?>