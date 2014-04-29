<!DOCTYPE html PUBLIC "-//W3C//DTD// XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http:/www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<style type="text/css" title="text/css" media="all">
.error
{
	font-weight: bold;
	color:#c00;
}
</style>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>form feedback</title>

</head>

<body>
<?php #Script 2.5 - arrays form

if( !empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']))
{
	echo "<p>Thank you <b>{$_POST['name']}</b>, for the following comments:<br/>
	<tt>{$_POST['comments']}</tt></p>
	<p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
}

else
{
	echo '<p class="error">Please go back and fill out the form again.</p>';
}

?>

</body>
</html>