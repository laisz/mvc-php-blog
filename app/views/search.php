
<section>
	<div class="container">
		<form class="form-inline" action="<?php echo BASE_URL; ?>/Welcome/search" method="post">
			<div class="myform">	
				<div class="form-group">
					<input type="text" name="keyword" class="form-control input-lg" placeholder="Search Here.....">
				</div>
				<div class="form-group">
					<select name="cat" class="form-control input-lg">
							<option>Select One</option>
						<?php if( $catlist ) { foreach( $catlist as $cat ) { ?>
							<option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
						<?php } } ?>
					</select>
				</div>
				<button type="submit" class="btn btn-default input-lg form-control">Search</button>
			</div>
		</form>
	</div> <!-- /.container -->
</section>