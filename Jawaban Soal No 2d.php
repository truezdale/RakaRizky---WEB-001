<?php
// tanggal
$tanggal = new DateTime('2020-05-01');

// tanggal saat ini
$today = new DateTime('today');

// tahun
$y = $today->diff($tanggal)->y;

// bulan
$m = $today->diff($tanggal)->m;

// hari
$d = $today->diff($tanggal)->d;
echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
?>