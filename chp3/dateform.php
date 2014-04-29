<?php # Script 3.7 dateform.php

$page_title = 'Calendar Form';

include ('includes/header.html');

function make_calendar_pulldown()
{
	$month = array (1=> 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
	
	echo '<select name="month">';
	
	foreach ($month as $key => $value)
	{
		echo "<option value=\"$key\">$value</option>\n";
		
	}
	echo '</select>';
	
	echo '<select name="day">';
	for ($day = 1; $day <= 31; $day++)
	{
		echo "<option value=\"$day\">$day</option>\n";
	}
	echo '</select>';
	
	echo '<select name = "year">';
	for ($year = 2008; $year <= 2018; $year++)
	{
		echo "<option value=\"$year\">$year</option>\n";
	}
	echo '</select>';
	
		
}

echo '<h1>Select a Date:</h1>
<p></p>
<form action="dateform.php" method="post">';

make_calendar_pulldown();
echo '</form>';

include ('includes/footer.html');
?>