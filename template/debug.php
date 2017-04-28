<div class="container">
	<!-- to check errors Pass &debug=1 -->
	<?php if(isset($_GET['debug']) == 1) { ?>
		<pre>
			<?php 
			//print_r(get_defined_vars());
			echo "\nGET VARIABLES\n";
			print_r($_GET);
			echo "\nPOST VARIABLES\n";
			print_r($_POST);
			echo "\nPAGE VARIABLES\n";
			print_r($page);?>
		</pre>
	<?php } ?>
</div>