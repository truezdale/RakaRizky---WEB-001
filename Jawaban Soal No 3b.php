<?php 
$angka = array("20", "10", "100", "30", "15", "5");
array_push($angka,"180");
sort($angka);

$clength = count($angka);

for($x = 0; $x < $clength; $x++) {
   
  echo $angka[$x]. ',';
}
?>