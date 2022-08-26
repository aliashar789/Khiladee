<?php
session_start();
include_once('../includes/conn.php');

if($conn === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  
  if(!empty($_POST['email']) && (!empty($_POST['password']))){
	$email = $_POST['email'];
	$password = $_POST['password'];
  
	$search = mysqli_query($conn,"SELECT * FROM adminlogin WHERE email='".$email."' AND password='".$password."'") or die(mysql_error()); 
	$match  = mysqli_num_rows($search);
  
	if($match > 0){
	  $_SESSION['loggedin'] = true;
	  header('Location: ../index.php');
	}
	else{
	  echo 'LogIn  Failed';
	  header('Location: login.php');
	}
  }
		  
  
  ?>