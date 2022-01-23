<?php

$db = mysqli_connect("localhost","root","","translation");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
//   $server = "localhost";
//   $user ="root";
//   $pass ="";
//   $db = "translation";

//   $conn = mysqli_connect($server, $user, $pass,$db);

  //if($conn){
	 // echo "Connected"."<br/>";
  //}else{
	 // echo "Not connected".mysqli_error($conn);
  //}
?>