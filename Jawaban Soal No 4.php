<?php

$array = ["aku", "suka", "makan", "nasi", "padang"];	
	
	for($i=0; $i<count($array); $i++){
	    for($j=$i;$j>=0;$j--){
	    echo $array[$i];    
        }echo "<br>";
        
    }
    
    $array = ["padang", "nasi", "makan", "suka", "aku"];	
	
	for($i=0; $i<count($array); $i++){
	    for($j=$i;$j>=0;$j--){
	    echo $array[$i];    
	    }echo "<br>";
	    
	}
	

?>