<?php

$servername="localhost";
$username="root";
$password="";
$database="fitness";

$conn=mysqli_connect($servername,$username,$password,$database);

echo "Your Data is connected, We will Contact You soon. Have a nice day ";

if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$select = $_POST['select'];
$gender = $_POST['gender'];
$phoneno = $_POST['phoneno'];
$address = $_POST['address'];


$sql="INSERT INTO `enquire` (`s no`, `firstname`, `middlename`, `lastname`, `select`, `gender`, `phoneno`, `address`) 
VALUES ('', '$firstname', '$middlename', '$lastname', '$select', '$gender', '$phoneno', '$address')";
mysqli_query($conn,$sql);
echo" meet you soon";

}
?>