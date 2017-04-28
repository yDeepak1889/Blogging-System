<!-- <nav class = "navbar " role="navigation">

	<div class="navbar-header">
		      <a class="navbar-brand" href="?page=0">BLOGGER</a>
	</div>

	<div class = "container ">		

		<ul class="nav navbar-nav " >
			
			<li<?php if($pageid == 1) {echo ' class="active"';} ?> ><a href="?page=1" >Home</a></li>
			<li<?php if($pageid == 2) {echo ' class="active"';} ?> ><a href="?page=2" >About Me</a></li>
			<li<?php if($pageid == 3) {echo ' class="active"';} ?> ><a href="?page=3" >Write</a></li>
			<li<?php if($pageid == 4) {echo ' class="active"';} ?> ><a href="?page=4" >Manage</a></li>

		</ul>

		<ul class="nav navbar-nav navbar-right" >

			<li><a href="logout.php" class="whiteColor">LOGOUT</a></li>
		</ul>

	</div>

</nav> END nav -->

<div class = "container-fluid">
 <div class = "navbar  navbar-fixed-top" role = "navigation">


          

            <div class = "navbar-header" style="text-align: left">

              <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = ".navbar-collapse" >
                <span class = "sr-only">Toggle Navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>

              </button>

             

            </div>


            <div class = "navbar-collapse collapse">
            	<div class="navbar-header">
            		      <a class="navbar-brand" href="?page=0">BLOGGER</a>
            	</div>
              <ul class="nav navbar-nav " >
              	
              	<li<?php if($pageid == 1) {echo ' class="active"';} ?> ><a href="?page=1" >Home</a></li>
              	<li<?php if($pageid == 2) {echo ' class="active"';} ?> ><a href="?page=2" >About Me</a></li>
              	<li<?php if($pageid == 3) {echo ' class="active"';} ?> ><a href="?page=3" >Write</a></li>
              	<li<?php if($pageid == 4) {echo ' class="active"';} ?> ><a href="?page=4" >Manage</a></li>

              </ul>

              <ul class="nav navbar-nav navbar-right" >
                
              	<li><a href="logout.php" class="whiteColor">LOGOUT</a></li>
              </ul>
            </div>


          </div>

</div>
