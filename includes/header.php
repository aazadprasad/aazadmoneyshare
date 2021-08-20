<nav class="navbar  navbar-dark">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MYNAVBAR">

				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				
				
			</button>
			<a href="#" class="navbar-brand"><b>Money Share</b></a>
		</div>
		<div>
			<div class="collapse navbar-collapse" id="MYNAVBAR">
				<ul class="nav navbar-nav navbar-right">
					
					

	 				<li><a href = "index.php"><span class = "glyphicon glyphicon-home">&nbsp</span>Home</a></li>

	 				<li><a href = "viewall.php"><span class = "glyphicon glyphicon-user">&nbsp</span>View Customers</a></li>

	 				<!-- <li><a href = "#"><span class = "glyphicon glyphicon-usd">&nbsp</span>Transfer Money</a></li> -->
	 				
	 				<!-- if Session have user id -->
	 				<?php 
	 					if (isset($_SESSION['id'])){
	 				?>

	 						<li><a href = <?php echo "history.php?id=".$_SESSION['id']; ?>><span class = "	glyphicon glyphicon-time">&nbsp</span>Transaction History</a></li>
	 				<?php 
	 					}
	 				 ?>
				</ul>
			</div>
		</div>
	</div>
</nav>	