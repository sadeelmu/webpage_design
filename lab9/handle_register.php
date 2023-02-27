<?php
 if(isset($_POST['first_name'])){
    $fName=$_POST['first_name'];
 }  else{
    $fName="";
 }
 if(isset($_POST['last_name'])){
    $lName = $_POST['last_name'];

 }
 else{
    $lName = "";

 }

 if(isset($_POST['email'])){
    $email = $_POST['email'];

 }
 else{
     $email="";
 }
 if(isset($_POST['password'])){
    $password = $_POST['password'];
 }else{
     $password="";
 }
 
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$dbname="labeleven";
$conn= new mysqli($dbserver, $dbusername, $dbpassword, $dbname);



$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$fName', '$lName', '$email', '$password')";
if($conn->query($sql)==true){
    echo "record succesfully inserted";
}
else{
    echo "error";
}
?>
