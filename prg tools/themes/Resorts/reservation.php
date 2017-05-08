<?php
ob_start(); //output buffering because I like it.

if (isset($_POST['submit'])) {
  // Process the form
 
  $name= $_POST['name'];
  $email=$_POST['email'];
  $date1=$_POST['text1'];
  $time1=$_POST['time1'];
  $date2=$_POST['text2'];
  $time2=$_POST['time2'];
  $room=$_POST['room'];
  $nopeople=$_POST['nopeople'];
}
 // server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_reservation");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO reservation(name,email,adate,atime,ddate,dtime,room,nopeople)VALUES('$name','$email','$date1','$time1','$date2','$time2','$room','$nopeople')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";header("location:index.php?suc=001");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	
}
 
// Close connection
mysqli_close($link);
  
