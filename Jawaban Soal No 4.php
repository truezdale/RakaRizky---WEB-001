<?php

$array = ["aku", "suka", "makan", "nasi", "padang"];	
	
	for($i=0; $i<count($array); $i++){
	    for($j=0; $j <= $i; $j++){
	    echo $array[$j];    
        }echo "<br>";
        
    }
    
    $array = ["padang", "nasi", "makan", "suka", "aku"];	
	
	for($i=0; $i<count($array); $i++){
	    for($j=0; $j <= $i; $j++){
	    echo $array[$j];    
	    }echo "<br>";
	    
	}
	
?>