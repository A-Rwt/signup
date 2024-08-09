<?php

/*$conn = new mysqli('localhost:4306','root','','registration' );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
*/
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
//dataabase connection

$conn = new mysqli('localhost:4306','root','','registration' );

if($conn-> connect_error){
    die('connection failed:' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration_table(Name ,email, password)
    values(?, ?, ? )");
    $stmt->bind_param("sss",$name ,$email ,$password);
    $stmt->execute();
    echo "Welcome ". $name ."（︶^︶）";
    $stmt->close();
    $conn->close();
}


?>