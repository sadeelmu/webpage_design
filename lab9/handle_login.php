<?php
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$dbname="labeleven";

$conn= new mysqli($dbserver, $dbusername, $dbpassword, $dbname);

if(isset($_POST['email'])){
    $email = $_POST['email'];

 }

 if(isset($_POST['password'])){
    $password = $_POST['password'];
 }
 
$sql2="SELECT * from users where email='$email' and password='$password'";

$res = $conn->query($sql2);

if($res->num_rows>0){
    while($row=$res->fetch_asos()){
        $_SESSION['the_user_id']=$row['id'];
        echo "Welcome Back";

    }

}
else{
    echo "Email or password is wrong";
}


?>
