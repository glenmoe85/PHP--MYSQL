<!DOCTYPE html PUBLIC "-//W3C//DTD// XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http:/www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>using variables</title>

</head>

<body>
<?php #Script 1.5 - predefined variables.php

//Create a shorthand version of the variable name:

$file = $_SERVER['SCRIPT_FILENAME'];
$user = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SOFTWARE'];



echo "<p>you are now running the file<br/><b>$file</b>.</p></n>";
echo "<p>you are now running the user<br/><b>$user</b>.</p></n>";
echo "<p>you are now running the server<br/><b>$server</b>.</p></n>";

?>
</body>
</html>