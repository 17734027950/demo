<?php
	require_once __DIR__."/../vendor/autoload.php";
	use Money\Money;

	// $fiveEur = Money::EUR(500);
	// $tenEur = $fiveEur->add($fiveEur);

	// list($part1, $part2, $part3) = $tenEur->allocate(array(1, 1, 1));
	// assert($part1->equals(Money::EUR(334)));
	// assert($part2->equals(Money::EUR(333)));
	// echo assert($part3->equals(Money::EUR(333)));


	$money = Money::USD(350);
	$json = json_encode($money);
	echo $json; // outputs '{"amount":"350","currency":"USD"}'


	$value1 = Money::EUR(800);       // €8.00
	$value2 = Money::EUR(500);       // €5.00

	$result = $value1->add($value2); // €13.00

	$result = json_encode($result);

	print_r($result);
?>