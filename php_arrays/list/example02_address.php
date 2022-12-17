<?php

// Exemple 02 - Address
$address = ['city' => 'Seattle', 'postal_code' => '12345'];
list('postal_code' => $postalCode, 'city' => $city) = $address;

echo $city . PHP_EOL;
echo $postalCode . PHP_EOL;