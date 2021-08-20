<!DOCTYPE html>
<html>
<head>
	<title>
		View all Customers
	</title>

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
	include "includes/header.php";
	include "includes/common.php";
 ?>
<!-- CONTENT -->
<div class="container">
	<table class="table align-middle">
	  <thead>
	    <tr>
	      <th scope="col">S. No.</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Current Amount</th>
	      <th scope="col">View Details</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  		//Geting user's Basic Details
	  		$select_query = "Select id, name, email, current_balance as amount from customers";
	  		$select_query_result = mysqli_query($con, $select_query);

	  		
	  		while($row = mysqli_fetch_array($select_query_result)){
	  			$link = "window.location.href='userdetails.php?id=". $row['id'] . "'";
	  			
	  	?>
	  	<tr>
	      <th scope="row"><?php echo $row['id'] ?></th>
	      <td><?php echo $row['name'] ?></td>
	      <td><?php echo $row['email'] ?></td>
	      <td><?php echo $row['amount'] ?></td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3" onclick= <?php echo $link; ?> >
	          Select & View
	        </button>
	      </td>
	    </tr>
	    <?php 
	    	}
	  	 ?>






	    <!-- <tr>
	      <th scope="row">1</th>
	      <td>Aazad Prasad</td>
	      <td>aazad@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3" onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr> -->

	    <!-- <tr>
	      <th scope="row">2</th>
	      <td>Aman Kumar</td>
	      <td>aman@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">3</th>
	      <td>Arya Ranjan Prasad</td>
	      <td>arya@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">4</th>
	      <td>Gaurav Sonakar</td>
	      <td>gaurav@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">5</th>
	      <td>Mukund Prashar</td>
	      <td>mukund@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">6</th>
	      <td>Nisha Kumari</td>
	      <td>nisha@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">7</th>
	      <td>Pankaj Minz</td>
	      <td>pankaj@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">8</th>
	      <td>Priyanka Sharma</td>
	      <td>priyanka@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">9</th>
	      <td>Rishika Sinha</td>
	      <td>rishika@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">10</th>
	      <td>Ritik Kumar</td>
	      <td>ritik@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">11</th>
	      <td>Sonu Raj Singh</td>
	      <td>sonu@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr>

	    <tr>
	      <th scope="row">12</th>
	      <td>Vishal Kumar</td>
	      <td>vishal@gmail.com</td>
	      <td>5000</td>
	      <td>
	        <button type="button" class="btn btn-info btn-xs px-3"onclick="window.location.href='userdetails.html'">
	          Select & View
	        </button>
	      </td>
	    </tr> -->

	    
	  </tbody>
	</table>
</div>

<!-- FOOTER -->
<?php 
	include "includes/footer.php";
 ?>

</body>
</html>