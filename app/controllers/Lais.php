<?php
	
/*
* Lais Controller
*/
	class Lais extends HeadController {
		
		public function __construct() {
			//echo "This is From Lais class";
			parent::__construct();
		// public function __construct() End here...
		}

		public function jKono( $param ) {
			echo "This is Jkono {$param}";
		}
		
		public function anode() {
			echo "Hi! This is Anode From Lais Extended From HeadController..";
		// public function anode() End here..
		}

	// class Lais
	}

?>