<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The Above 3 Meta Tag Must Come First -->
		<title>33 - Bootsrtap Practice_JS - Slice Corner CSS</title>
		<!-- FontAwesome File -->
		<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
		<!-- Bootstrap File -->
		<!-- This Bootsrtap File Must be before of Above Main CSS file -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
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

			.go-top{
				background: #4e4d4d;
				color: #ebedef;
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
				opacity: .5;
			}

		</style>
	</head>
	<body class="" style="background:pink; position:relative;">
		
		<!-- Header Area Start -->
		<header class="header">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">	
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#twlp">
								<span class="icon-bar"></span> <!-- /.icon-bar -->
								<span class="icon-bar"></span> <!-- /.icon-bar -->
								<span class="icon-bar"></span> <!-- /.icon-bar -->
							</button> <!-- /.navbar-toggle .collapsed -->
							<a href="#" class="navbar-brand">
								<b>LO<span style="color:deeppink;">G</span>O</b>
							</a> <!-- /.navbar-brand -->
						</div> <!-- /.navbar-header -->
						<div class="navbar-collapse collapse navbar-right" id="twlp">
							<ul class="nav navbar-nav">
								<li><a href="/Welcome/home">HompPage</a></li>
								<li><a href="/Category/categoryList">Category</a></li>
								<li><a href="test.php">Test</a></li>
								<li><a href="/Category/catById">catById</a></li>
								<li><a href="profile.php">My Profile</a></li>
								<li><a href="?action=logout">LogOut</a></li>
								<li><a href="login.php">Log-In</a></li>
								<li><a href="addCategory">Add Category</a></li>
							</ul> <!-- /.nav navbar-nav -->
						</div> <!-- /.navbar-collapse .collapse .navbar-right #twlp -->
					</div> <!-- /.container-fluid -->
				</nav> <!-- /.navbar navbar-default -->
				<div class="well">
					<h3>
						Advance PHP with MVC Pattern | Creating Your Own Framework | TWLP
					</h3>
				</div> <!-- /.well -->
			</div> <!--/ .container -->
		</header> <!-- /.header -->
		<!-- Header Area End -->