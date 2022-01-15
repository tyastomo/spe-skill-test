<?php
    function blueReverse($arr, $arr2)
    {
        
        foreach($arr as $key => $val)
        {
            if ($val === $arr2[0])
            {
                unset($arr[$key]);
            }
        }
        var_dump($arr);
    }
    
    $arr = [1,2,3,4,6,10];
    $arr2 = [1];
    $result = blueReverse($arr, $arr2);
?>