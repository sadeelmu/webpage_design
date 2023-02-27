<?php
$firstName = $_POST["firstName"];
print "$firstName <BR> <BR> ";
$lastName = $_POST["lastName"];
print "$lastName <BR> <BR>";
$email = $_POST["emailText"];
print "$email <BR> <BR>";
$mobileAdresses = $_POST["mobileAddress"];
print "$mobileAdresses <BR> <BR>";

foreach($_POST["countries"] as $val){
    print "You selected: $val<BR> <BR> <BR>";
}

?>
