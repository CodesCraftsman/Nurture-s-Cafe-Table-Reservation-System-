<?php 
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$pass = $_GET['pass'];

$conn = new mysqli('localhost','root','','harsh')
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into resistration(name,email,phone,adress,pass)values(?,?,?,?,?,?,)");
    $stmt->bind_param("ssiss",name,email,phone,address,pass);
    $stmt->excute();
    echo"registration successfully";
    $stmt->close();
    $conn->close();
}
?>