<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mywebpage");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$PhoneNumber = mysqli_real_escape_string($link, $_REQUEST['PhoneNumber']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$City = mysqli_real_escape_string($link, $_REQUEST['City']);
$State = mysqli_real_escape_string($link, $_REQUEST['State']);	
$ZIP = mysqli_real_escape_string($link, $_REQUEST['ZIP']);	
$Information = mysqli_real_escape_string($link, $_REQUEST['Information']);	

 
// attempt insert query execution
$sql = "INSERT INTO client_information (first_name, last_name, email,PhoneNumber,Address,City,State,ZIP,Information) VALUES ('$first_name', '$last_name', '$email','$PhoneNumber','$Address','$City','$State','$ZIP','$Information')";
if(mysqli_query($link, $sql)){
    echo " We received your order. We will call as soon as we read your request!";
} else{
    echo "ERROR: unable to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>