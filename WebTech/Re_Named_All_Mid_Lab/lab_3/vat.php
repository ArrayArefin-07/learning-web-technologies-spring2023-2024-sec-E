<?php

$amount = 200; 

$vatRate = 0.15; // 15%

// Calculate VAT
$vat = $amount * $vatRate;

// Calculate total amount including VAT
$totalAmount = $amount + $vat;

// Display results
echo "Amount before VAT: $amount<br>";
echo "Including VAT (15%): $vat<br>";
echo "Total amount including VAT: $totalAmount";
?>
