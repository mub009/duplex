<?php
session_start();

$mode=$_GET['usermode'];

switch($mode)
{
	case 'Admin':
	admin();
	break;
	default:
}


function admin()
{ 

require_once('../dbconnection.php');

    $conkey=conkey();

 //require_once'dbconnection';

	$user=$_POST['username'];

	$pass=$_POST['password'];

	$query="select * from tbl_admin where vchr_admin_name='$user' and vchr_admin_password='$pass'";

	$res=mysqli_query($conkey,$query);
	
	if($row=mysqli_fetch_array($res))
	{
		echo $_SESSION['name']=$row['vchr_admin_name'];
		header("location:home.php");
		
	}
	else
	{
		header("location:index.php");
	}
}

	
?>