<?php

//while loop
$i=1;
while($i<10){
    echo $i;
    echo "</br>";
    $i++;
}
//or
$i2=10;
while($i>1){ //condition can be (<  >   <=  >=)
    echo $i;
    echo "</br>";
    $i--;
}

echo "<hr></hr>";



//-------------------------------------------------------------


//do while loop
$p = 1;

do {
    echo $p;
    echo "</br>";
    $p++;
} while ($p <= 5);

echo "<hr></hr>";



//--------------------------------------------------------------


//for loop
//syntex--> for(value; condition; increment/decrement){code execution}

for($x=1; $x<15; $x++){ //condition can be (<  >   <=  >=)
    echo $x;
    echo "</br>";
}

echo "<hr></hr>";


//--------------------------------------------------------------





//foreach loop
//foreach loop used to looping array
//syntex --> $arrayName=array("a", "b"......); foreach($arrayName as $var ){echo $var;}
$a=array("Tofayel", "Hyder", "Abhi"); // we can write also associative array
foreach($a as $b){
    echo $b;
    echo "</br>";

}