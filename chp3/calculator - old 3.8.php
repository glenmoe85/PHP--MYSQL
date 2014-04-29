<?php # Script 3.8 - calculator.php #3

$page_title = 'Widget Cost Calculator';

include ('includes/header.html');

function calculate_total ($qty, $cost, $tax)
{
	$total = ($qty * $cost);
	$taxrate = ($tax / 100);
	$total += ($total * $taxrate);
	
	echo '<p>The total cost of purchasing ' . $qty . ' widget(s) at $' . number_format ($cost, 2) . ' each, including a tax rate of ' . $tax . '% is $' . number_format ($total, 2) . '.</p>';

}

if (isset($_POST['submitted']))
{
	if ( is_numeric($_POST['quantity']) && is_numeric($_POST['price']) && is_numeric($_POST['tax']))
	{
		echo '<h1>Total cost</h1>';
		calculate_total ($_POST['quantity'], $_POST['price'], $_POST['tax']);
	}
	
	else
	{
		echo '<h1>Error!</h1>
		<p class="error">Please enter a valid quantity, price and tax.</p>';
	}
}
?>

<h1>Widget cost calcuator</h1>

<form action = "calculator.php" method="post">
	<p>Quantity: <input type = "text" name="quantity" size="5" maxlength="5" value="<?php if (isset($_POST['quantity'])) echo $_POST['quantity']; ?>" /></p>
	<p>Price: <input type = "text" name="price" size="5" maxlength="10" value="<?php if (isset($_POST['price'])) echo $_POST['price']; ?>" /></p>
	<p>Tax (%): <input type = "text" name="tax" size="5" maxlength="5" value="<?php if (isset($_POST['tax'])) echo $_POST['tax']; ?>" /></p>
	<p><input type ="submit" value="Calculate!" /></p>
	<input type="hidden" name="submitted" value="1" />
</form>

<?php
include ('includes/footer.html');
?>