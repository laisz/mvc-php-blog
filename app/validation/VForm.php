<?php
	
	/**
	* Validation class
	*/
	class VForm {
		
		private $values = array();
		private $keyname;
		private $errors = array();

		public function __construct() {}

		public function post( $key ) {
			$this->values[$key] = trim( $_POST[$key] );
			$this->keyname = $key;
			return $this;
		// public function post( $key )
		}

		public function isEmpty() {
			if( empty( $this->values[$this->keyname] ) ) {
				$this->errors[$this->keyname]['empty'] = "Field Must Not Be Empty";
			}
			return $this;
		// public function isEmpty() End here...
		}

		public function isCatEmpty() {
			if( $this->values[$this->keyname] == 0 ) {
				$this->errors[$this->keyname]['empty'] = "Field Must Not Be Empty";
			}
			return $this;
		// public function isEmpty() End here...
		}

		public function length( $min = 0, $max ) {
			if( ! empty( $this->values[$this->keyname] ) ) {
				if( strlen( $this->values[$this->keyname] ) < $min OR strlen( $this->values[$this->keyname] ) > $max ) {
					$this->errors[$this->keyname]['length'] = "Should Mininum {$min} And Maximum {$max} Characters";
				// if( strlen( $this->values[$this->keyname] ) < $min OR strlen( $this->values[$this->keyname] ) > $max ) End here..
				}
			// if( ! empty( $this->values[$this->keyname] ) )
			}
			return $this;
		// public function length( $min = 0, $max ) End here..
		}

		public function value( $key ) {
			if( isset( $this->values[$key] ) ) {
				$value = $this->values[$key];
				return $value;
			// if( isset( $this->values[$key] ) ) End here...
			}
		// public function value( $key ) End here...
		}

		public function getErrors() {
			if( ! empty( $this->errors ) ) {
				return $this->errors;
			// if( ! empty( $this->errors ) ) End here...
			}
		// public function getErrors() End here...
		}

		public function submit() {
			if( empty( $this->errors ) ) {
				return true;
			} else {
				return false;
			}
		// public function submit() End here...
		}

	// class VForm End here...
	}

?>