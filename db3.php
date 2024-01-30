<?php

$servername = "localhost";
$username = "boluxcod_Bolu";
$password = "Boluwatife@30";
$dbname = "boluxcod_mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

$request = $conn->real_escape_string($_POST['request']);


$sql = "INSERT INTO request (Request) VALUES (\"".$request."\")";



if ($conn->query($sql) === TRUE) {

    echo "Your request is submitted Successfully. Bolux Panel will get back to you soon. Thank you.";

} else {

    echo "Submission Error" . $sql . "<br>" . $conn->error;

}

$conn->close();

?>