 
<?php 
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Transfer Money</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- header -->
	<?php 
		include "includes/header.php";
	 ?>

<!-- content -->

<div class="container">
		<div class="row row-style" id="only4signup">
			<div class="col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading" style="font-size: 30px;">Transfer Money</div>
					<div class="panel-body">
						<div class="container">
							<div class="row">
								<div class="col-sm-11">
									<!-- using get method for redirecting according to userid-->
									<?php $link = "transfer_script.php?id=". $id; ?>
									<form class="don" method="POST" action=<?php echo $link; ?> >
										
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	Email:</label>
											<input type="Email" id="s2" class="form-control input-lg"  name="email" placeholder="Enter Receiver's Email" style="width:100%; height: 50px; border-radius: 30px;" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" required>
										</div>
										<div><h5 style="color:red;padding-left: 15px;"><?php echo $_GET['e_error']; ?></h3></div>
										
										<div class="form-group">
											<label style="font-size: 20px; color: tomato">	Amount:</label>
											<input type="number" id="s4"  class="form-control input-lg"  name="amount" placeholder="Enter the amount" style="width:100%; height: 50px; border-radius: 30px;" required>
										</div>
										<div><h5 style="color:red;padding-left: 15px;"><?php echo $_GET['b_error']; ?></h3></div>

					
										
											<div class="input_field terms">
												<p id="checks"><input type="checkbox" name="" required="required"> Agreed to terms and conditions</p>
											</div>
											<div class="input_field" id="ok-button"  >
												<input type="submit" class="act" id="b1"  name="" value="Transfer">

												<input type="button" class="act" id="b2"  name="cancel" value="Cancel" onclick="window.location='viewall.php'">
											</div>
										
									</form>
									
								</div>
							</div>
						</div>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
		</div>
<!-- footer -->

<?php 
	include "includes/footer.php";
 ?>


</body>
</html>