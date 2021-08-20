<?php 
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Transction History</title>

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
	require 'includes/common.php';
 ?>

<!-- content -->
<div class="container">

	<center><h1 style="border-bottom: 2px solid #88B04B;">Your Transction Details</h1></center>
	<table class="table align-middle" style=" margin-top: 30px;">
	  <thead>
	    <tr>
	      <th scope="col" class="upper">Transction ID</th>
	      <th scope="col" class="upper">Amount</th>
	      <th scope="col" class="upper">Status</th>
	      <th scope="col" class="upper">Date & Time</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  		$select_query = "select * from transfers where sender_id = '$id' or receiver_id='$id'";
	  		$select_query_result = mysqli_query($con, $select_query);
	  		$num_row = mysqli_num_rows($select_query_result);
	  		// echo $num_row;
	  		// die();

	  		if ($num_row==0){ ?>
	  			<tr><td>No Details Found.</td></tr>
	  	<?php }
	  	else{ 
	  		while ($row = mysqli_fetch_array($select_query_result)){
	  			?>

			  	<tr>
			      <th scope="row"><?php echo "T".$row['transaction_id']; ?></th>

			      <!-- work acc to status -->
			      <?php 
			      if ($row['sender_id']==$id){
			      	$status = "Paid To";
			      	$second_id = $row['receiver_id'];
			      }
			      else{
			      	$status = "Received From";
			      	$second_id = $row['sender_id'];
			      }


			      if($status=="Paid To"){ 
			      	$sign = "-";
			      	$color = "color:red;";
			      }
			      else{
			      	$sign = "+";
			      	$color = "color:green;";
			      }
			      ?>

			      <td style=<?php echo $color; ?>> <?php echo $sign."".$row['amount']; ?></td> <!--  color -->

			      <?php 
			      	
			      	
			      	$T_id = $row['transaction_id'];


			      	// $uid =  mysqli_fetch_array(mysqli_query($con, "SELECT user_id from transfers where transaction_id=$T_id and user_id!=$id"))['user_id'];
			      	// echo $uid;

			      	$Nam = mysqli_fetch_array(mysqli_query($con,"SELECT name from customers where id=$second_id"))['name'];
			      	// echo $Nam;
			      	
			      	
			       ?>


			      <td><?php echo $status." <b>".$Nam."</b>"; ?></td>

			      


			      <td><?php echo $row['date_time']; ?></td>
			      
			    </tr>

			 <?php
			   } 
			}

	  	?>
	    <!-- <tr>
	      <th scope="row">1656413</th>
	      <td>+ 6000</td>  
	      <td>Paid to or Received from</td>
	      <td>22-04-2021 23:04:02</td>
	      
	    </tr>

	    <tr>
	      <th scope="row">1656413</th>
	      <td>+ 6000</td>  
	      <td>Paid to or Received from</td>
	       <td>22-04-2021 23:04:02</td>
	      
	    </tr>

	    <tr>
	      <th scope="row">1656413</th>
	      <td>+ 6000</td>  
	      <td>Paid to or Received from</td>
	       <td>22-04-2021 23:04:02</td> -->
	      
	    </tr>

	     </tbody>
	</table>
</div>

<!-- footer -->

<?php 
	include 'includes/footer.php';
 ?>

</body>
</html>