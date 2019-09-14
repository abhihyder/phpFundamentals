<?php
// Multiplication of 2

$x=2;
for($i=1; $i<=10; $i++){

    echo $x."x".$i."=".$x*$i."</br>";
}

echo "<hr></hr>";




//Multiplication of 1 to n by nested loop
//Multiplication by for loop
$xyz=1;

for($mltnmbr=1; $mltnmbr<=20; $mltnmbr++){

    echo "Multiplication of ".$mltnmbr."</br>";

    for($mlt=1; $mlt<=10; $mlt++){
        echo $xyz."x".$mlt."=". $xyz*$mlt."</br>";

    }
    echo "*** </br>";
    $xyz+=1;
}

echo "<hr></hr>";



//Multiplication by while loop
$abc=1;
$abc2=1;


while($abc2<=20){
    echo "Multiplication of ".$abc2."</br>";
    $abc2++;
    
    $abc3=1;
    while($abc3<=10){
        echo $abc."x".$abc3."=". $abc*$abc3."</br>";
        $abc3++;
    }
    echo "*** </br>";
    $abc+=1;
}


?>