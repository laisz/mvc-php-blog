		
		<?php

			$dsn 	= "mysql:dbname=db_mvc_pat; host=localhost";
			$user 	= "root";
			$pass 	= "";
			$mydb = new Database( $dsn, $user, $pass );

			$id = 1;
			$table = "tbl_category";
			$data = array( 
				"name" => "Education",
				"title" => "Education"
			);

			$cond = "WHERE id = {$id}";

			// if( $mydb->update( $table, $data, $cond ) ) {
			// 	echo "Data SuccessFully Updated";
			// } else {
			// 	echo "Data Couldn't be Updated";
			// }

			



		?>
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							Pure Test Page | To test Codes with MVC
							<span class="pull-right">
								Welcome! <b>MVC</b>
							</span> <!-- /.pull-right -->
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">		
							<div class="col-md-8 border-right">
								<div class="maincontent">
<?php
	// $url = "abalkabaljabal/dfhed8y";
	// //$filter = filter_var( $url, FILTER_SANITIZE_URL );
	// //echo $filter;
	// if( filter_var( $url, FILTER_SANITIZE_URL ) ) {
	// 	echo "Filtered";
	// } else {
	// 	echo "Not Filtered";
	// }

	// $index_arr = array( "Red", "Yellow", "Green", "Blue" );
	// $ass_arr = array(
	// 	'assOne' 	=> 'King',
	// 	'assTwo' 	=> 'Emperror',
	// 	'assThree' 	=> 'Queen',
	// 	'assFour' 	=> 'Sultan'
	// );

	// $ex = array();

	// $ex['pi'] = $index_arr;

	// echo "<pre>";
	// print_r( $ex );
	// echo "</pre>";
	
	// foreach( $ex as $keys => $values ) {
	// 	//echo $value . "<br>";
	// 	foreach( $values as $val ) {
	// 		echo $val . "<br>";
	// 	}
	// }

	// foreach( $ex['pi'] as $key => $value ) {
	// 	echo $value . "<br>";
	// }
	echo md5( "rangpur" );

?>
								</div> <!-- /.maincontent -->
							</div> <!-- /.col-md-8 -->