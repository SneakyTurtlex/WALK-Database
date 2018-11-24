<?php
header('Access-Control-Allow-Origin: *');
//var_dump($_POST);
//exit;

try {
    $conn = new PDO("mysql:host=a07yd3a6okcidwap.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=p3slyityqr9arsx2", "gupazml2ebchali0", "ng7ehrbl1adzi9q0");
}
//p3slyityqr9arsx2 dabatase
catch(PDOException $e)
{
    echo "Error: " .$e->getMessage();
}
$uId =$_POST['userId'];
$newPass=$_POST['userPass'];

//$query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

$query = "UPDATE users SET password='$newPass' WHERE id = '$uId';";
$result = $conn->query($query);
if($result){
  echo json_encode(true);
} else {
  echo json_encode (false);
}
?>
