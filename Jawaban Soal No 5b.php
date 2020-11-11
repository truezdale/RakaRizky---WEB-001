<?php
$buah = array(
	'jeruk', 5000, "ASAM", 
	'mangga', 20000, "MANIS",
	'apel', 5000, 'MANIS',
    'durian', 50000, "MANIS",
    'duku', 10000, "ASAM",
    'nanas',  5000, "ASAM",
);
array_push($buah, "PISANG", 5000, "Manis");
sort($buah);
print_r($buah);
 
?>