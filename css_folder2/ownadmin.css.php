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

	<?php if( $getcolor ) { foreach( $getcolor as $color ) { ?>
		body { background: <?php echo $color['bgcolor'] ?>; }
	<?php } } ?>

	.mycontainer{
		max-width: 1230px;
		padding-left: 15px;
		padding-right: 15px;
		margin-left: auto;
		margin-right: auto;
	}

	.mycontainer:before,
	.mycontainer:after{
		content: "";
		display: table;
		clear: both;
	}

	.m-top-bottom{
		margin-top: 15px;
		margin-bottom: 15px;
	}

	.myrow{
		margin-left: -15px;
		margin-right: -15px;
	}



	/**** CONTENT Area Start ****/
	
	.content{

	}

	/**** CONTENT Area End ****/


	/*** Common CSS Start For ALL CONTENT Area ***/

	.content-wrap{
		padding-left: 15px;
		padding-right: 15px;
	}
	.content-bg{
		background: #EBEDEF;
		color: gray;
	}

	/*** Common CSS End For ALL CONTENT Area ***/


	/**  rgb(226, 19, 153) = HEX #e21399;   **/

	<?php 
		
		$maincol = "rgb(19, 192, 226)";
		$maincol_opacity = "rgba(226, 19, 153, .5)";
		$white = "#fff";
		$black = "#000";
		$ash = "#ddd";
		$hover_focus = "rgb(128, 227, 247)";
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

	/* MVC CSS Start */

	
	.border-right{
		border-right: 1px #ddd solid;
	}

	.post {
		padding: 10px;
	}

	.post .title h2, .title h1, .post .title h2 a {
		color: <?php echo $maincol; ?>;
	}

	.post .title h2 a:hover {
		text-decoration: none;
	}

	.post-border-color {
		border: 1px <?php echo $maincol; ?> solid;
		border-radius: 5px;
	}


	/* MVC CSS End */


	/* Customize bootstrap colors: Start */

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

	.well-color-border {
		border: 1px solid <?php echo $maincol; ?>;
		color: <?php echo $maincol; ?>;
	}

	.border-white {
		border: 1px <?php echo $white; ?> solid;
	}

	.category .list-group-item-default {
	    background-color: <?php echo $maincol; ?>;
	}

	.category a.list-group-item-default {
	    color: <?php echo $white; ?>;
	}

	.category a.list-group-item-default:focus, .category a.list-group-item-default:hover {
	    color: <?php echo $black; ?>;
	    background-color: <?php echo $hover_focus; ?>;
	}

	.latest-post .list-group-item-default {
	    background-color: <?php echo $maincol; ?>;
	}

	.latest-post a.list-group-item-default {
	    color: <?php echo $white; ?>;
	}

	.latest-post a.list-group-item-default:focus, .latest-post a.list-group-item-default:hover {
	    color: <?php echo $black; ?>;
	    background-color: <?php echo $hover_focus; ?>;
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
	    border-color: <?php echo $maincol; ?>;
	    outline: 0;
	    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px <?php echo $maincol; ?>;
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px <?php echo $maincol; ?>;
	}

	.bg-skblue-color-white {
		color: <?php echo $white; ?>;
    	background-color: <?php echo $maincol; ?>;
	}

	.bg-skblue-color-white:hover {
		background-color: <?php echo $white; ?>;
		border: 1px <?php echo $maincol; ?> solid;
		color: <?php echo $maincol; ?>;
	}

	/** Extra CSS For Admin Panel **/

	.admin-sidebar .list-group-item-default {
		/*background-color: <?php //echo $maincol; ?>; */
		background: rgb(3, 141, 169);
	}
	.admin-sidebar a.list-group-item-default {
		color: <?php echo $white; ?>;
	}
	.admin-sidebar a.list-group-item-default:focus, .admin-sidebar a.list-group-item-default:hover {
		color: <?php echo $black; ?>;
	    background-color: <?php echo $hover_focus; ?>;
	}


	/*.sub-admin-sidebar .list-group-item-default {
		background-color: <?php //echo $maincol; ?>;
	}

	.sub-admin-sidebar a.list-group-item-default {
		color: <?php //echo $white; ?>;
	}

	.sub-admin-sidebar a.list-group-item-default:focus, .sub-admin-sidebar a.list-group-item-default:hover {
		color: <?php //echo $black; ?>;
	    background-color: <?php //echo $hover_focus; ?>;
	}*/

	.admin-sidebar .title {
		/*background: rgb(3, 141, 169);*/
		color: #fff;
	}
	.admin-sidebar ul li h4 {
		margin: 0;
		font-weight: bold;
		color: #fff;
	}

	.sub-admin-sidebar h4:focus {
		outline: 0
	}


	.sub-ul {
		border-left: 1px #ddd dashed;
		padding-left: 20px;
	}

	.sub-ul li a {
		border: 0;
	}



	/* JQ Edit */

	/*.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
	    border: 1px solid #fff;
	    background: #fff url(images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x;
	    font-weight: bold;
	    color: #fff;
	}*/

	/* Custom CSS FOR JQ Accordion */
			
	
	.admin-sidebar .title .ui-icon-triangle-1-e:before {
		content: "\f07b";
		font-family: fontAwesome;
		color: <?php echo $maincol; ?>;
	}
	
	.admin-sidebar .title .ui-icon-triangle-1-s:before {
		content: "\f07c";
		font-family: fontAwesome;
		color: <?php echo $maincol; ?>;
	}
	

	/* Customize bootstrap colors: End */

</style>