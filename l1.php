<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

   .class
   {
    font-size:36px;
	font-family:Comic Sans MS;	
	background-color:#3300FF;
	}
</style>
</head>

<body>
<center>
<form name="l1"  method="post" class="class">

<h1>A TO Z MATH.COM</h1><br />

Username:<input type="text" name="uname" /><br /><br />
Password:<input type="password" name="pwd" /><br /><br />
<input type="submit" name="submit" value="submit"/>


</form>
</center>

<?php
 
 
	

  $user=$_POST["uname"];
   $pass=$_POST["pwd"];
   
   if($user=="abc" && $pass <> "12345")
    {
	 echo "<br/>"."invalid password";
	 }
   elseif ($user <> "abc" && $pass=="12345")
     {
	 echo "<br/>"."Invalid username";
	 }
	 elseif ($user <> "abc" && $pass <> "12345")
	 {
	 echo "<br/>"."Invalid username and password";
	 }
	 else
	 {
	  header ('location:l2.php');
	 }

	  

	
 
?>



</body>
</html>
