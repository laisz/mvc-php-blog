<?php
	
	class Main {

		public $url;
		public $controllerName = "Welcome";
		public $methodname = "welcome";
		public $controllerpath = "app/controllers/";
		public $controllerObj;

		public function __construct() {
			//echo "I am Developer Lais, From Main Class <br>";
			$this->getUrl();
			$this->loadController();
			$this->callMethod();
		// public function __construct() End here...
		}

		public function getUrl() {
			$this->url = ( isset( $_GET['url'] ) ) ? $_GET['url'] : NULL;
			if( $this->url != NULL ) {
				$this->url = rtrim( $this->url, '/' );
				$this->url = explode( "/", filter_var( $this->url, FILTER_SANITIZE_URL ) );
			} else {
				unset( $this->url );
			}
		}

		public function loadController() {
			if( ! isset( $this->url[0] ) ) {
				include $this->controllerpath . $this->controllerName . '.php';
				$this->controllerObj = new $this->controllerName();
			} else {
				$this->controllerName = $this->url[0];
				$filename = $this->controllerpath . $this->controllerName . '.php';
				if( file_exists( $filename ) ) {
					include $filename;
					if( class_exists( $this->controllerName ) ) {
						$this->controllerObj = new $this->controllerName();
					// if( class_exists( $this->controllerName ) ) End here...
					} else {
						header( "Location: " . BASE_URL . "/Welcome" );
					}
				// if( file_exists( $filename ) ) End here...
				} else {
					header( "Location: " . BASE_URL . "/Welcome" );
				}
			// If ( isset( $this->url[0] ) ) ...
			}
		// public function loadController() End here..
		}

		public function callMethod() {
			if( isset( $this->url[2] ) ) {
				$this->methodname = $this->url[1];
				if( method_exists( $this->controllerName, $this->methodname ) ) {
					$this->controllerObj->{$this->methodname}( $this->url[2] );
				} else {
					header( "Location: " . BASE_URL . "/Welcome" );
				}
			// if( isset( $this->url[2] ) ) End here...
			} else {
				
				if( isset( $this->url[1] ) ) {
					$this->methodname = $this->url[1];
					if( method_exists( $this->controllerName, $this->methodname ) ) {
						$this->controllerObj->{$this->methodname}();
					// if( method_exists( $this->controllerName, $this->methodname ) ) End here...	
					} else {
						header( "Location: " . BASE_URL . "/Welcome" );
					}
				// if( isset( $this->url[1] ) ) End here...
				} else {
					if( method_exists( $this->controllerName, $this->methodname ) ) {
						$this->controllerObj->{$this->methodname}();
					// if( method_exists( $this->controllerName, $this->methodname ) ) End here...	
					} else {
						header( "Location: " . BASE_URL . "/Welcome" );
					}
				}
			}
		// public function callMethod() End here...
		}

	// class Main End here..	
	}

?>
