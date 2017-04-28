<div class = "container">
	<h1>PAGE MANAGER</h1>

	<div class="row">
		<div class="col-md-3"><!--To display the contents of the page-->			
			<div class="list-group">
				<a class = "list-group-item" href="?page=pages"><!--To add new page-->
					<h4 class="list-group-item-heading"><i class="fa fa-plus"></i> New Page</h4>
				</a>
				<?php
					$q = "SELECT * FROM pages";
					$r = mysqli_query($dbc,$q);

					while($list = mysqli_fetch_assoc($r)) { 
						$blurb =substr( strip_tags($list['body']),0,150);//To extract first 150 characters from the page

					?>
					<a class = "list-group-item " href="index.php?page=pages&id=<?php echo $list['id']; ?>">
						<h4 class="list-group-item-heading"><?php echo $list['title'];?></h4>
						<p class="list-group-item-text">
							<?php echo $blurb; ?>
						</p>
					</a>				
				<?php }?><!--While loop ends -->
			</div>
		</div><!--END col1-->


		

	</div>
</div>