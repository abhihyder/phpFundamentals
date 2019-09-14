<?php
//odd number 1 to 50

for($nmbr=1; $nmbr<=50; $nmbr++){
    if($nmbr%2==1){
        echo $nmbr;
        echo "</br>";
    }

}

echo "<hr></hr>";








//---------------------------------------
// serise sum 1+2+3+......n by while loop
$x=1;
$i=2;
while($i<=1000){
    $x=$x+$i;
    $i++;
}
echo $x;

echo "<hr></hr>";

// serise sum 1+2+3+.....n by for loop

$a=1;
for($k=2; $k<=1000; $k++){
    $a=$a+$k;
}
echo $a;

echo "<hr></hr>";





//---------------------------------------
// serise sum 1+3+5+......n by while loop
$xx=1;
$ii=3;
while($ii<=1001){
    $xx=$xx+$ii;
    $ii+=2;
}
echo $xx;

echo "<hr></hr>";

// serise sum 1+3+5+.....n by for loop

$aa=1;
for($kk=3; $kk<=1001; $kk+=2){
    $aa=$aa+$kk;
}
echo $aa;

echo "<hr></hr>";



// serise sum 2+4+6+.....n by for loop

$aaa=2;
for($kkk=4; $kkk<=1000; $kkk+=2){
    $aaa=$aaa+$kkk;
}
echo $aaa;

echo "<hr></hr>";








//------------------------------------------

//Multipication
$xyz=1;

for($mltnmbr=1; $mltnmbr<=20; $mltnmbr++){

    echo "Multipication of ".$mltnmbr."</br>";

    for($mlt=1; $mlt<=10; $mlt++){
        echo $xyz."x".$mlt."=". $xyz*$mlt."</br>";

    }
    echo "*** </br>";
    $xyz+=1;
}


?>
