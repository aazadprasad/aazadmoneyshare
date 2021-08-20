<?php 
	
	require "includes/common.php";
	
	$id =  $_GET['id'];
	$email = $_POST['email'];
	$amount = $_POST['amount'];


	//Geting Email and Balance of Sender
	$select_query = "Select email,current_balance as bal from customers where id='$id'";
	$mydetails = mysqli_fetch_array(mysqli_query($con, $select_query));
	$myemail = $mydetails['email'];
	$mybalance = $mydetails['bal'];
	// echo $myemail;
	// echo $mybalance;
	// die();


	// Geting all Details of receiver.
	$select_query = "Select * from customers WHERE email='$email'";
	$select_query_result = mysqli_query($con, $select_query);
	$num_row = mysqli_num_rows($select_query_result);

	if ($amount<1){
		// If Amount cannot be zero or negative
		header("location: transfer.php?id=".$id."&e_error=&b_error=Amount Cannot Be 0 or negative");
	}
	// Checking Balance
	elseif ($amount>$mybalance){
		// echo "Insuffetiant Balance";
		header("location: transfer.php?id=".$id."&e_error=&b_error=Insufficient Balance Current Balance ".$mybalance);
	}
	// Checking if user not entered his own Email
	elseif ($email == $myemail){
		// echo "This is Your Email please Select other email";
		header("location: transfer.php?id=".$id."&e_error=&e_error=This is Your Email please Type other Email&b_error=");
	}
	// If Email not found with any user
	elseif ($num_row!=1) {
		// echo "Email not Found type correct Email";
		header("location: transfer.php?id=".$id."&e_error=&e_error=Email not Found type correct Email&b_error=");
	}
	else{

		// Getting id of Receiver from its Email id
		$receiverId = mysqli_fetch_array($select_query_result)['id'];


		// Inserting Transaction Details 
		$insert_query = "INSERT into transfers (sender_id, receiver_id, amount) VALUES($id, $receiverId, $amount)" or die($con);
		mysqli_query($con, $insert_query) or die($con);
		


		//updating balance
		$update_query = "UPDATE customers SET current_balance=current_balance+$amount where id=$receiverId";
		mysqli_query($con, $update_query) or die($con);

		$update_query = "UPDATE customers SET current_balance=current_balance-$amount where id=$id";
		mysqli_query($con, $update_query) or die($con);

		// echo "Transaction Done";

		// sleep(4);
		// $link = 
		//redirecting to Success page
		header("location: success.php?id=".$id);


	}
		
	

 ?>