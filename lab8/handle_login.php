<?php
$email = $_POST["emailText"];
$password = $_POST["pass"];
if($email == "test@example.com" && $password == "test123"){
    print "Welcome Back";
}
else{
    print "Email or password wrong";
}

?>
