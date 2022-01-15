<?php
    function findNarcis($n)
    {
        $sum = 0;

	
    	$temp = $n;
    	$totalDigits = strlen($n);
    	
    	while($n != 0) {
    		$r = $n%10; 
    		$sum = $sum+pow($r, $totalDigits);
    		$n = floor($n/10);
    	}
    	
    	if($sum == $temp) {
    		echo "yes";
    	} else {
    		echo "no";
    	}
    }
    
    $number = 111;
    $result = findNarcis($number);
?>