<!DOCTYPE html PUBLIC "-//W3C//DTD// XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<gtml xmlns="http:/www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>Intro to web form</title>

</head>

<body>
<?php #Script 2.2 - handle_form.php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];
$age = $_REQUEST['age'];






if (isset($_REQUEST['gender']))
{
	$gender = $_REQUEST['gender'];
}
else
{
	$gender = NULL;
}

echo "<p>Thank you, <b>$name</b>, for the following comments:<br/>
<tt>$comments</tt></p>

<p>We will reply to you soon at <i>$email</i>.</p>
<p>Your age and gender were entered as <b>$age</b> and <b>$gender</b> respectively.</p>\n";

if ($gender == 'M')
{
	echo '<p><b>Good day, Sir!</b></p>';
}

elseif ($gender == 'F')
{
	echo '<p><b>Good day, Madam!</b></p>';
}

else 
{
	echo '<p><b>You forgot to enter your gender!</b></p>';
}



?>

</body>
</html>