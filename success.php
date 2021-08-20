<?php 
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Successful Transction</title>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


		<!-- HEADER -->
<?php 
	include 'includes/header.php';
 ?>

<!-- content -->

	<div class="done">
	  <div class="card">
      	<div style="border-radius:200px; height:200px; width:200px; background: lightyellow;border:2px solid red; margin:0 auto;">
       		 <i class="checkmark">✓</i>
      	</div>
        	<h1 id="tran1">Transction Successful</h1> 
        	<p id="tran2">
        		Amount transfer request is received;<br/> Check your balance!
        	</p>
      </div>
  </div>
<!-- footer -->
  <?php 
  	include 'includes/footer.php';
   ?>

</body>
</html>