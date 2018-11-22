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
$x =$_POST['x'];
$y =$_POST['y'];

$east = $x - 0.016;
$west = $x + 0.016;
$north = $y + 0.016;
$south = $y - 0.016;

//$query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

$query = "SELECT lng, lat, type, hundred_block, neighbourhood FROM events_update WHERE (lng < $east AND lng > $west) AND (y < $north AND y > $south) LIMIT 10";
$result = $conn->query($query);
if($result){
  $crimes = $result->fetchAll(PDO::FETCH_CLASS);

  echo json_encode($crimes);
} else {
  echo json_encode (false);
}
?>
