
<div class="blogDiv">
	<div class = "container ">
		<hr>
		<h1 class="text-center">Let's Read</h1>
		<div class="row">
			<div class="col-sm-offset-2 col-md-8"><!--To display the contents of the page-->
					<hr>						
					<?php
						$q = "SELECT * FROM blogs ORDER BY `time` DESC";
						$r = mysqli_query($dbc,$q);

						while($list = mysqli_fetch_assoc($r)) { 
							$blurb =substr( strip_tags($list['body']),0,250);//To extract first 150 characters from the page
							$id = $list['user'];
							$q1 = "SELECT `username` FROM `users` WHERE `id`= $id";
							//echo $id;
							$r1 = mysqli_query($dbc,$q1);
							$list1 = mysqli_fetch_assoc($r1);
						?>
						<a  href="Blog/blog.php?blog=<?php echo $list['id']; ?>" style = "text-decoration: none;" >
							<div class = "blogs wow fadeInUpBig">

								<h2 id="blogLink" class = "wow fadeInUpBig"><?php echo $list['title'];?></h4>
								<p  id ="blogP">
									<?php echo $blurb; ?>
								</p>
								<p style="color:#a89e97; "><i>Posted by :- <?php echo $list1['username'];?> on <?php echo $list['time'];?></i></p>
							</div>
						</a>

						<hr  >			
					<?php }?><!--While loop ends -->
				
			</div><!--END col1-->


			

		</div>
	</div>
</div>