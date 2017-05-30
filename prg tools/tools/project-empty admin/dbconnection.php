<?php


function conkey()
{

        $localhost="localhost";
		$username="root";
		$password="";
		$database="db_project";
		$conkey=mysqli_connect($localhost,$username,$password,$database);

		if (!$conkey) 
		{
          die('Could not connect: ' . mysql_error());
          mysql_close($conkey);
		}
		else
		{
			//echo 'Connected successfully';
			return $conkey;
		}

}




?>