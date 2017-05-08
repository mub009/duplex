

<?php 
//header("Location: /contact.html",TRUE,301);
 

$to  = 'info@oscareduindia.com';
$subject=$_POST['name'];
$headers = $_POST['email'];
$ph=$_POST['phone'];
$message = $ph . $_POST['comment'] ; 
mail($to, $subject, $message, $headers);
header("location:index.php?mal=001");


//$host  = $_SERVER['HTTP_HOST'];
//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//$extra = 'contact.html';
//header("Location: http://$host$uri/$extra");
//exit;
?>