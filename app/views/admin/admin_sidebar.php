					<div class="panel-body">
						<div class="row">		
							<div class="col-md-3 border-right">
								<div class="sidecontent" >
									<ul class="admin-sidebar list-group list-unstyled" id="accor">
										<li class="sub-admin-sidebar list-group-item list-group-item-default">
											<h4 class="title"> &nbsp; <b>Site Option</b></h4>
											<ul class="sub-ul list-unstyled">
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Admin">Admin Home</a></li>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/OurLogin/logout">LogOut</a></li>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Admin/uiOption">UI Option</a></li>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Admin/uiList">UI List</a></li>
											</ul>	
										</li>

										<!-- <?php //if( Session::get( 'level' ) == 1 ) {  // this wasn't working that time that's why used below code ?> -->
										<?php if( Session::get( 'level' ) != 2 && Session::get( 'level' ) != 3 ) { ?>

										<li class="sub-admin-sidebar list-group-item list-group-item-default">
											<h4 class="title"> &nbsp; <b>Manage Option</b></h4>
											<ul class="sub-ul list-unstyled">	
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/User/makeUser">Make User</a></li>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/User/listUser">User List</a></li>	
											</ul>
										</li>

										<?php } ?>
										<!-- <?php //if( Session::get( 'level' ) == 1 OR Session::get( 'level' ) == 2 ) { // this wasn't working that time that's why used below code ?> -->
										<?php if( Session::get( 'level' ) != 3 ) { ?>

										<li class="sub-admin-sidebar list-group-item list-group-item-default">
											<h4 class="title"> &nbsp; <b>Category Option</b></h4>
											<ul class="sub-ul list-unstyled">
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Admin/addCategory">Add Category</a></li>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Admin/categoryList">Category List</a></li>	
											</ul>
										</li>

										<?php } ?>

										<li class="sub-admin-sidebar list-group-item list-group-item-default">
											<h4 class="title"> &nbsp; <b>Post Option</b></h4>
											<ul class="sub-ul list-unstyled">
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Admin/addArticle">Add Article</a></li>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>/Admin/articleList">Article List</a></li>
												<li><a class="list-group-item list-group-item-default" href="<?php echo BASE_URL; ?>">Edit Article</a></li>
											</ul>
										</li>									
									</ul> <!-- /.list-unstyled -->
								</div> <!-- /.sidecontent -->
							</div> <!-- /.col-md-3 border-right -->							