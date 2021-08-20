<?php 
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Detail</title>
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

	include "includes/common.php";
	include "includes/header.php";
 ?>
<!-- CONTENT -->

	<div class="container">
	<div class="row" id="main-row">
		<div class="col-md-offset-3 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8 " >
                	<div class="split">
	                	<div class="imag">
		                	<img src="images/avtar.jpg" style="height: 300px; width :300px;" class="image-responsive" >
		                </div class="detail">
							<?php 
								//Showin All Details of User in Its Discription Page
								$select_query =  "SELECT name, account_number as acc, ifsc_code as ifsc, email, contact, current_balance as amount from customers where id='$id'";
								$select_query_result = mysqli_query($con, $select_query) or die($con);
								$row = mysqli_fetch_array($select_query_result);

							 ?>
							 <!-- Name -->
		                    <div><h2>Hii <?php echo $row['name']; ?>!!</h2>
		                    	<table class="table align-middle">
`									
									

									<tr>
			                    		<th>Account No.: </th>
			                    		<td><?php echo $row['acc']; ?></td>
		                    		</tr>
		                    		<tr>
			                    		<th>IFSC Code: </th>
			                    		<td><?php echo $row['ifsc']; ?></td>
		                    		</tr>
		                    		<tr>
			                    		<th>Email:</th>
			                    		<td><?php echo $row['email']; ?></td>
		                    		</tr>

		                    		<tr>
			                    		<th>Mobile No.:</th>
			                    		<td><?php echo $row['contact']; ?></td>
		                    		</tr>

		                    		<tr>
			                    		<th>Balance:</th>
			                    		<td><?php echo $row['amount']; ?></td>
		                    		</tr>

		                    		<!-- <tr>
			                    		<th>Account No.: </th>
			                    		<td>596510110004453</td>
		                    		</tr>
		                    		<tr>
			                    		<th>IFSC Code: </th>
			                    		<td>BKID0005965</td>
		                    		</tr>
		                    		<tr>
			                    		<th>Email:</th>
			                    		<td>aazad@gmail.com</td>
		                    		</tr>

		                    		<tr>
			                    		<th>Mobile No.:</th>
			                    		<td>9162278442</td>
		                    		</tr>

		                    		<tr>
			                    		<th>Balance:</th>
			                    		<td>5000</td>
		                    		</tr> -->
		                    		<br>

		                    		<tr>
		                    			<th>
		                    				<?php 
	     								 		$link = "window.location.href='history.php?id=". $_SESSION['id'] . "'";
	     								 	 ?>
									        <button type="button" class="btn btn-success btn-xs px-3" onclick=<?php echo $link; ?>>
									          History
									        </button>
	     								 </th>
	     								 <th>
	     								 	<?php 
	     								 		$link = "window.location.href='transfer.php?id=". $_SESSION['id'] . "&e_error=&b_error='";
	     								 	 ?>
									        <button type="button" class="btn btn-danger btn-xs px-3" onclick=<?php echo $link; ?>>
									          Transfer Money
									        </button>
	     								 </th>
	     							</tr>

		                    	</table>


		                 </div>
		             </div>
	                    
	                    
                	
                </div>             
                
    	 </div>                 
		</div>
	</div>
</div>


</body>
</html>