<!DOCTYPE html PUBLIC "-//W3C//DTD// XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http:/www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>while loop</title>

</head>

<body>
<?php #Script 2.9 - calendar while loop

$months = array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Nov', 'Oct', 'Dec');

echo '<select name="month">';

foreach ($months as $key => $value)
{
	echo "<option value=\"$key\">
	$value</option>\n";
}

echo '</select>';

echo '<select name="day">';

for ($day = 1; $day <=31; $day++)
{
	echo "<option value=\"$day\">$day</option>\n";
}

echo '</select>';

echo '<select name="year">';

for ($year = 2008; $year <=2018; $year++)
{
	echo "<option value=\"$year\">
	$year</option>\n";
}

echo '</select>';

?>

</body>
</html>