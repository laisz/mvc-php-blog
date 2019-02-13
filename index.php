<?php

spl_autoload_register( function( $class ) {
	include_once 'system/libs/' . $class . '.php';
} );

include_once 'app/config/config.php';

	$main = new Main();
	
	// $url = ( isset( $_GET['url'] ) ) ? $_GET['url'] : NULL;
	// if( $url != NULL ) {
	// 	$url = rtrim( $url, '/' );
	// 	$url = explode( "/", filter_var( $url, FILTER_SANITIZE_URL ) );
	// 	if( isset( $url[0] ) ) {
			
	// 		include 'app/controllers/' . $url[0] . '.php';
	// 		$controller = new $url[0]();

	// 		if( isset( $url[2] ) ) {
	// 			$controller->$url[1]( $url[2] );
	// 		} else {
	// 			if( isset( $url[1] ) ) {
	// 				$controller->$url[1]();
	// 			} else {
	// 				//header( "Location: 404.php" );
	// 				//exit();
	// 				echo "<script>window.location = '404.php'; </script>";
	// 			}
	// 		}
	// 	}
	// } else {
	// 	//unset( $url );
		
	// 	include 'app/controllers/Welcome.php';
	// 	$ctlr = new Welcome();
	// 	$ctlr->home();
	// }



?>