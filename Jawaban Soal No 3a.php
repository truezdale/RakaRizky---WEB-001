<!-- Asc -->
<?php 
$angka = array("20", "10", "100", "30", "15", "5");
sort($angka);

$clength = count($angka);
for($x = 0; $x < $clength; $x++) {
  echo $angka[$x]. ',';
}
?> <br><br>


<!-- Desc -->
<?php 
$angka = array("20", "10", "100", "30", "15", "5");
rsort($angka);

$clength = count($angka);
for($x = 0; $x < $clength; $x++) {
  echo $angka[$x]. ',';
}
?> 