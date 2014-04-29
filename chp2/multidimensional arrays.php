<!DOCTYPE html PUBLIC "-//W3C//DTD// XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http:/www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>


<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<title>arrays</title>

</head>

<body>
<?php #Script 2.7 - multidimensional arrays

$mexico = array(
'YU' => 'Yucatan',
'BC' => 'Baja California',
'OA' => 'Oaxaca'
);

$us = array(
'MD' => 'Maryland',
'IL' => 'Illinois',
'PA' => 'Pennsylvania',
'IA' => 'Iowa'
);

$canada = array(
'QC' => 'Quebec',
'AB' => 'Alberta',
'NT' => 'Northwest Territories',
'YT' => 'Yukon',
'PE' => 'Prince Edward Island'
);

$n_america = array(
'Mexico' => $mexico,
'United States' => $us,
'Canada' => $canada
);

foreach ($n_america as $country => $list)
{
	echo "<h2>$country</h2><ul>";
	
	foreach ($list as $k => $v)
	{
		echo "<li>$k - $v</li>\n";
	}
	
	echo '</ul>';
	
}

?>

</body>
</html>