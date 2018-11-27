<?php
$servername = "a07yd3a6okcidwap.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; $username = "gupazml2ebchali0"; $password = "ng7ehrbl1adzi9q0";
$dbname = "p3slyityqr9arsx2";

// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error()); }
else{
echo "<h1>Connected successfully</h1>";
$sql = "INSERT INTO events_update (TYPE, YEAR, MONTH, DAY, NEIGHBOURHOOD, HUNDRED_BLOCK, LNG, LAT)
VALUES ('".$_POST["type"]."','".$_POST["year"]."','".$_POST["month"]."','".$_POST["day"]."','".$_POST["hundred_block"]."','".$_POST["neighbourhood"]."','".$_POST["lng"]."','".$_POST["lat"]."')";
$res2 = mysqli_query($conn,$sql);
if($res2 === TRUE){
echo "New record created successfully"; }
else{
echo "Insert failed"; }
} ?>
