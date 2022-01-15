<?php
      function findInteger($arr)
      {
            $odd = array();
          $even = array();
        
          foreach ($arr as $val) {
            if ($val % 2 === 0) {
              array_push($even, $val);
            } else {
              array_push($odd, $val);
            }
          }
          
          if(count($even) > count($odd))
          {
            echo $odd[0];
          }
          else if(count($even) === 0 || count($odd) === 0 ) {
              echo "false";
          }
          else {
            echo $even[0];
          }    
      }
      
      
      $arr = array(2, 4, 0, 100, 4, 11, 2602, 36);
      $result = findInteger($arr); 
?>