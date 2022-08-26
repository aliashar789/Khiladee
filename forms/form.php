<?php
require_once("../includes/conn.php");
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $price=$_POST['price'];  
     
   $sql="INSERT into buyerdetail(name,phone,email,address,price) 
   VALUES ('$name','$phone','$email','$address','$price')";
mysqli_query($conn,$sql);
header('location:../index.php');
}
?>