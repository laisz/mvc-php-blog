		
		
		<!-- Content Area Start -->
		<section class="content">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2>	
							<b>Category</b>
							<span class="pull-right">
								Welcome! to <b>Category Page</b>
							</span> <!-- /.pull-right -->
						</h2>
					</div> <!-- /.panel-heading -->
					<div class="panel-body">
						<div class="row">		
							<div class="col-md-8 border-right">
								<div class="maincontent">	
									<h3><b>Our Main Content Goes Here</b></h3>
									<hr> 
									<h4>This is Main Content Area Ontest. <i>On TEST !!</i></h4>
									<hr>
						<?php
	
							// echo "<pre>";
							// print_r( $data );
							// echo "</pre>";

							// echo "<pre>";
							// print_r( $cat );	// this only can use after extracting, like extract( $data );
							// echo "</pre>";

							// foreach( $data['cat'] as $key => $value ) {	// it can be directly accessible like this..
							// 	echo $value . "<br>";
							// }

							// foreach( $data as $val ) {		// it it accessed by TWLP
							// 	echo $val['catOne'] . "<br>";
							// 	echo $val['catTwo'] . "<br>";
							// 	echo $val['catThree'] . "<br>";
							// }

							// foreach( $data as $keys => $values ) {	// but I accessed it( 2D Array ) using Double For-each Loop..
							// 	echo "~" . $keys . "~";
							// 	echo "<br>";
							// 	foreach( $values as $key => $val ) {
							// 		echo $key . " => " . $val . "<br>";
							// 	}
							// }
							//$cat = $data['cat'];
							
							// foreach( $cat as $key => $val ) {
							// 	echo $val . "<br>";
							// }

							// foreach( $data as $mainkeys => $mainvalues ) {
							// 	echo "~" . $mainkeys . "~ <br>";
							// 	foreach( $mainvalues as $keys => $values ) {
							// 		echo "~" . $keys . "~ <br>";
							// 		foreach( $values as $key => $value ) {
							// 			echo $value . "<br>";
							// 		}
							// 	}
							// }

							// foreach( $cat as $value ) {		// it it accessed by TWLP
							// 	echo $value['catOne'] . "<br>";
							// 	echo $value['catTwo'] . "<br>";
							// 	echo $value['catThree'] . "<br>";
							// }

							// foreach( $cat as $cat_keys => $cat_values ) {		// it it accessed by TWLP
							// 	echo $cat_keys . "<br>";
							// 	foreach( $cat_values as $key => $value ) {		// it it accessed by TWLP
							// 		echo $value . "<br>";
							// 	}
							// }
							foreach( $catlist as $val ) {
								echo $val['name'] . "<br>";
							}


						?>
								</div> <!-- /.maincontent -->
							</div> <!-- /.col-md-8 -->