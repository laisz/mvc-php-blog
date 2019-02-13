<?php
	
	/**
	* Session Class
	*/
	class Session {
		
		public static function init() {
			session_start();
		// public static function init() End here..
		}

		public static function set( $name, $value ) {
			$_SESSION[$name] = $value;
		// public static function set( $name, $value ) End here...
		}

		public static function get( $name ) {
			if( isset( $_SESSION[$name] ) ) {
				return $_SESSION[$name];
			} else {
				return false;
			}
		// public static function get( $name ) End here...
		}

		public static function checkSession() {
			self::init();
			if( Session::get( "login" ) == false ) {
				self::destroy();
				header( "Location: " . BASE_URL . "/OurLogin" );
			}
		}

		public static function destroy() {
			session_destroy();
		// public static function destroy() End here...
		}

	// class Session End here...	
	}

?>