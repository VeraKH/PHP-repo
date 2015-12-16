 <?php

 // Strings

        $str = "hello";
        $change = $str;
        $change[strlen($change)-1] = "e";
        $first = $str[0];
        $last=$str[strlen($str)-1];

        echo $str;  //hello
        echo $change; // Changed the last element: helle
        echo $first; // First element: h
        echo $last; // Last element: o


// Integers: casting and Round

     var_dump(25/7);         // float(3.5714285714286) 
     var_dump((int) (25/7)); // int(3)
     var_dump(round(25/7));  // float(4) 

    // Isset function
     $e = 100;
     if (!isset($e)){
        $e = 200;
     }
     echo $e."\n";

     $quantity = "";
     if (empty($quantity) && !is_numeric($quantity)){
        echo "You must enter a quantity ";
     }
?>

                   