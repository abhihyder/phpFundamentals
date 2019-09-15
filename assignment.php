<?php
//odd number 1 to 50

for($nmbr=1; $nmbr<=50; $nmbr++){
    if($nmbr%2==1){
        echo $nmbr;
        echo "</br>";
    }

}

echo "<hr></hr>";

//even number 1 to 50

for($nmbr1=1; $nmbr1<=50; $nmbr1++){
    if($nmbr1%2==0){
        echo $nmbr1;
        echo "</br>";
    }

}

echo "<hr></hr>";








//---------------------------------------
// serise sum 1+2+3+......+n by while loop
$x=1;
$i=2;
while($i<=1000){
    $x=$x+$i;
    $i++;
}
echo $x;

echo "<hr></hr>";

// serise sum 1+2+3+.....+n by for loop

$a=1;
for($k=2; $k<=1000; $k++){
    $a=$a+$k;
}
echo $a;

echo "<hr></hr>";





//---------------------------------------
// serise sum 1+3+5+......+n by while loop
$xx=1;
$ii=3;
while($ii<=1001){
    $xx=$xx+$ii;
    $ii+=2;
}
echo $xx;

echo "<hr></hr>";

// serise sum 1+3+5+.....+n by for loop

$aa=1;
for($kk=3; $kk<=1001; $kk+=2){
    $aa=$aa+$kk;
}
echo $aa;

echo "<hr></hr>";



// serise sum 2+4+6+.....+n by for loop

$aaa=2;
for($kkk=4; $kkk<=1000; $kkk+=2){
    $aaa=$aaa+$kkk;
}
echo $aaa;

echo "<hr></hr>";








//------------------------------------------

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
