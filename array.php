<?php
/*
array normally 3 types
1. Indexed arrays --> Arrays with a numeric index.
2. Associative arrays --> Arrays with named keys.
3. Multidimensional arrays --> Arrays containing one or more arrays.
*/





// 1.indexed array
$x=array(5,6,"a","b");   //index number start from 0.
echo $x[0]."</br>";     //5 will be print.
echo count($x)."</br>";     //count is a function. total value (4) will be print.


//we can print all index value by loop
echo "<p>Indexed array loop</p>";

$x1=array(10,12,15,20,25);

    $length=count($x1); // assign the length value by function

    for($i=0; $i<$length; $i++){
        echo $x1[$i]."</br>";
    }
echo "<hr></hr>";





//-------------------------------------------------------------------------------------------
// 2.associative array
$y=array("a"=>"white", "b"=>"blue", "c"=>"red", "d"=>10);  //a,b,c are array keys and white, blue, red are keys value
echo $y["a"]."</br>";  // white will be print.

//we can print all keys value by loop
echo "<p>Associative array loop</p>";

$y1=array("a1"=>"white", "b1"=>"blue", "c1"=>"red", "d1"=>"green");

foreach($y1 as $looping){  //key value will be print
    echo $looping."</br>";


}
//or
$y2=array("a1"=>"white", "b1"=>"blue", "c1"=>"red", "d1"=>"green");

foreach($y2 as $looping2=>$value){   // array keys and key value will be print
    echo $looping2."=".$value."</br>";
}

echo "<hr></hr>";





//-------------------------------------------------------------------------------------------
// 3.multidimensional array
$cars= array(   //main array
            array("Toyota","Lemburginy", "Ford"),  //inner array, index start from 0 and array values index also start from 0.
            array("Tata", "Ashok", "Maheendra"),
            array("Mithsubishi", "BMW","Tesla")
);

          echo $cars[0][1]."</br>";  //first index for inner array and second index for array value

//we can print all array value by loop
$cars2= array(   //main array
            array("Toyota","Lemburginy", "Ford"),
            array("Tata", "Ashok", "Maheendra"),
            array("Mithsubishi", "BMW","Tesla")
);
        for($row=0; $row<3; $row++){      // any variable name
            echo "<p>Array number ".$row."</p>";

            for($col=0; $col<3; $col++){    // any variable name
                echo $cars2[$row][$col]."</br>";
            }


        }
?>