<?php
	
/**
* Main Load
*/
	class Load {
		
		public function __construct() {
			# code...
		}

		public function view( $page, $data = false ) {
			if( $data == true ) {
				extract( $data );
			}
			include 'app/views/' . $page . '.php';
		// public function view( $page, $data = false ) End here...
		}

		public function model( $model_name ) {
			include 'app/models/' . $model_name . '.php';
			return new $model_name();
		// public function model( $class ) End here...
		}

		public function validation( $modelname ) {
			include 'app/validation/' . $modelname . '.php';
			return new $modelname();
		// public function validation( $modelname ) End here...	
		}

	// class Load End here...
	}

?>