<?php
	include "publics.php";
 
	$user   = $_REQUEST['username'];
	$pass = $_REQUEST['password'];
 
	 if( $user=="admin" && $pass=="123")
			echo "<h2>login successful!</h2>" . getTime();
	 else
		 echo "<font color=#FF000000</font><h2>login failed</h2>"  . getTime() ;
		 echo "<font color=#000000</font>";
		 
	echoDevider ();
		 $timestamp=getTime();
echo gmdate("Y-m-d\T "."------"." H:i:s\Z", $timestamp);
	echoDevider ();
echo date('m/d/Y H:i:s', getTime());

?>