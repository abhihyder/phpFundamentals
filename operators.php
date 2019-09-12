<?php 
//Arithmetic operatios 
// + - * / %
$a=20;
$b=15;

echo $a+$b;
echo "</br>";

echo $a-$b;
echo "</br>";

echo $a*$b;
echo "</br>";

echo $a/$b;
echo "</br>";

echo $a%$b;
echo "</br>";

echo "<hr></hr>"; //border

// assignment operators
//  =  +=  -=  *=  /=  %=
$x=15; //$x= 15
echo $x;
echo "</br>";

$x1=20;
$x1+=5; //$x1= 20+5
echo $x1;
echo "</br>";

$x2=20;
$x2-=5; //$x2= 20+5
echo $x2;
echo "</br>";

$x3=20;
$x3*=5; //$x3= 20*5
echo $x3;
echo "</br>";

$x4=20;
$x4/=5; //$x4= 20*5
echo $x4;
echo "</br>";

$x5=20;
$x5%=5; //$x5= 20%5
echo $x5;
echo "</br>";

echo "<hr></hr>"; //border

// Comparison operators

$xx=25;
$yy="25";
var_dump($xx==$yy); // value equal 
echo "<br>";

var_dump($xx===$yy); //identical: value and datatypes equal
echo "<br>";

var_dump($xx!=$yy); //value not equal
echo "<br>";

var_dump($xx!==$yy); // not identical: value and datatypes not equal
echo "<br>";

$xxx=100;
$yyy=90;

var_dump($xxx > $yyy);
echo "</br>";

var_dump($xxx < $yyy);
echo "</br>";

var_dump($xxx <= $yyy);
echo "</br>";

var_dump($xxx >= $yyy);
echo "</br>";

echo "<hr></hr>"; //border

//increment/decrement operator

$i=30;
echo $i++; //post increment,now output will be 30 and next O/P 31 
echo "</br>";

$i2=35;
echo ++$i2; //pre increment,now output will be 36 
echo "</br>";

$i3=40;
echo $i3--; //post decrement,now output will be 40 next O/P 39
echo "</br>";

$i4=45;
echo --$i4; //pre decrement,now output will be 44 
echo "</br>";


echo "<hr></hr>"; //border

//Logical operator

?>