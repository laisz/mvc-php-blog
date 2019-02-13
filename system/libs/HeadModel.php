
<?php
	
/**
* Main HeadModel
*/
	class HeadModel {
		
		protected $db = array();

		public function __construct() {
			$dsn 	= "mysql:dbname=db_mvc_pat; host=localhost";
			$user 	= "root";
			$pass 	= "";
			$this->db = new Database( $dsn, $user, $pass );
		// public function __construct() End here...
		}


	// class HeadModel End here...
	}

?>