<?php 
session_start();
$db = mysqli_connect("localhost", "root", "", "dari");

$id_Hotel = $_GET['id'];

$query1 = mysqli_query($db, "SELECT * from hotel where id_Hotel = '$id_Hotel' ");

if ($row = mysqli_fetch_array($query1)) {
}














?>
<?php include ('includes/nav.php');?>
