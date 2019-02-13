<style>
	
	/* Test Above */

	*{
		box-sizing: border-box;
	}

	body{
		margin: 0;
		padding: 0;
		font-family: century gothic;
		
	}

	.m-top-bottom{
		margin-top: 15px;
		margin-bottom: 15px;
	}


	/**  rgb(226, 19, 153) = HEX #e21399;   **/

	<?php 
		
		$maincol = "rgba(255, 193, 23, 0.44)";
		$maincol2 = "rgb(255, 193, 23)";
		$white = "#fff";
		$black = "#000";
		$ash = "#ddd";
		$hover_focus = "rgb(255, 238, 108)";
		$navtog_hov_foc_bord = "rgb(114, 232, 255)";
	?>

	/* <?php //echo $maincol; ?> */

	.go-top{
		
		background: <?php echo $maincol_opacity; ?>;
		color: <?php echo $white; ?>;
		font-weight: bold;
		font-size: 40px;
		position: fixed;
		bottom: 8px;
		right: 15px;
		z-index: +999;
		padding: 0px 7px;
		display: none;
		text-align: center;
		vertical-align: middle;
		cursor: pointer;
	}


	/* Customize bootstrap colors: Start */

	.panel {
	    margin-bottom: 20px;
	    background-color: rgba(255, 193, 23, 0.54);
	    border: 1px solid transparent;
	    border-radius: 4px;
	    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
	    box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}

	.panel-default {
	    border-color: <?php echo $maincol; ?>;
	}

	.panel-default>.panel-heading {
	    color: <?php echo $white; ?>;
	    background-color: <?php echo $maincol; ?>;
	    border-color: <?php echo $maincol; ?>;
	}

	.bg-color {
		background-color: <?php echo $maincol; ?>;
	}

	.border-white {
		border: 1px <?php echo $white; ?> solid;
	}

	.navbar-inverse {
	    background-color: <?php echo $maincol; ?>;
	    border-color: <?php echo $maincol; ?>;
	}

	.navbar-inverse .navbar-nav>li>a {
	    color: #fffefe;
	}

	.navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
	    color: <?php echo $black; ?>;
	    background-color: <?php echo $hover_focus; ?>;
	}

	.navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
	    background-color: <?php echo $navtog_hov_foc_bord; ?>;
	}

	.navbar-inverse .navbar-toggle {
	    border-color: <?php echo $navtog_hov_foc_bord; ?>;
	}

	.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
	    border-color: <?php echo $navtog_hov_foc_bord; ?>;
	}

	.myform .form-control:focus {
	    border-color: <?php echo $white; ?>;
	    outline: 0;
	    -webkit-box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.71), 0 0 8px <?php echo $white; ?>;
	    box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.71), 0 0 8px <?php echo $white; ?>;
	}

	.myform label {
		color: <?php echo $white; ?>;
	}

	.bg-wh-color-yl {
		background-color: <?php echo $white; ?>;
		border: 1px <?php echo $maincol; ?> solid;
		color: <?php echo $maincol; ?>;
		font-weight: bold;
	}

	.bg-wh-color-yl:hover {
		color: <?php echo $white; ?>;
    	background-color: <?php echo $maincol; ?>;
	}

	/* Customize bootstrap colors: End */

</style>