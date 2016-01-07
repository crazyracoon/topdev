<?php
$coffee = new coffee();
if(empty($coffe))
{
	$coffe->refill();
}
else
{
	$coffe->drink();
}

?>
