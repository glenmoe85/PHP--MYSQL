<!DOCTYPE html PUBLIC "-//W3C//DTD// XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http:/www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>


<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>sorting arrays</title>

</head>

<body>

<table border ="0" cellspacing ="3" cellpadding = "3" align = "center">
	<tr>
		<td><h2>Rating</h2></td>
		<td><h2>Titles</h2></td>
	</tr>
<?php #Script 2.8 - sorting arrays

$movies = array(
'10' => 'Casablanca',
'9' => 'To Kill a Mockingbird',
'2' => 'The English Patient',
'8' => 'Stranger than Fiction',
'5' => 'Story of the Weeping Camel',
'7' => 'Donnie Darko'
);

echo '<tr><td colspan = "2"><b>In their orginal order:</b></td></tr>';

foreach ($movies as $key => $value)
{
	echo "<tr><td>$key</td>
	<td>$value</td></tr>\n";
}
asort($movies);
echo '<tr><td colspan = "2"><b>Sorted by title:</b></td></tr>';

foreach ($movies as $key => $value)
{
	echo "<tr><td>$key</td>
	<td>$value</td></tr>\n";
}

krsort($movies);
echo '<tr><td colspan = "2"><b>Sorted by rating:</b></td></tr>';

foreach ($movies as $key => $value)
{
	echo "<tr><td>$key</td>
	<td>$value</td></tr>\n";
}




?>

</body>
</html>