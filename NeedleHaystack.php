<?php
    function findNeedle($arr, $str)
    {
        
        foreach($arr as $key => $val)
        {
            if (strcmp($val, $str) === 0)
            {
                echo $key;
            }
        }
        
        return false;
    
    }
    
    $arr = ['red', 'blue', 'yellow', 'black', 'grey'];
    $str = 'blue';
    $result = findNeedle($arr, $str);
?>
