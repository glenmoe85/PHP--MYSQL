<!DOCTYPE html PUBLIC "-//W3C//DTD// XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http:/www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>form feedback</title>

</head>

<body>
<?php #Script 2.6 - calendar form

$months = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Oct', 'Dec');
$days = range (1,31);
$years = range (2008, 2018);

echo '<select name="month">';

foreach ($months as $key => $value)
{
	echo "<option value=\"$key\">
	$value</option>\n";
}

echo '</select>';

echo '<select name="day">';

foreach ($days as $value)
{
	echo "<option value=\"$value\">
	$value</option>\n";
}

echo '</select>';

echo '<select name="year">';

foreach ($years as $value)
{
	echo "<option value=\"$value\">
	$value</option>\n";
}

echo '</select>';

?>

</body>
</html>