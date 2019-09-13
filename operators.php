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
            
$lgcl=10;
$lgcl2=15;
$lgcl3=20;


// for "and" operator, condition will be execute whene all conditions are true.
//"and" and "&&" are same things.
if($lgcl==10 and $lgcl2==15 and $lgcl3==20){ 

    echo "All conditions true.";
}else{
    echo "Condition false";

}
echo"</br>";

//for "or" operator, condition will be execute whene minimum one condition is true out of all
// "or" and "||" are same things.
if($lgcl==10 or $lgcl2==12 or $lgcl3==22){

    echo "Minimum One condition true out of all conditions.";
}else{
    echo "All conditions false";

}
echo"</br>";

//for "xor" operator, condition will be execute whene one condition is false out of two
if($lgcl==10 xor $lgcl2==15){

    echo "One condition false out of two.";
}else{
    echo "One condition is not false out of two";

}
echo"</br>";

//for "!==" (not equal) operator, condition will be execute whene value is not equle.
if($lgcl!==10){

    echo "Value is not equal.";
}else{
    echo "Value equal";

}

echo "<hr></hr>"; //border





//String operstors

$strng="I am ";
$strng2="learning PHP";
 echo $strng.$strng2; //concatenation operator
echo "</br>";

$strng3="I wanna ";
$strng4="learn Laravel";
$strng3 .=$strng4;
 echo $strng3; //Concatenation assignment operator

 echo "<hr></hr>"; //border






//Array operators
$array1= array( "a"=> "Abhi", "b"=> "Tofayel");//"a" is array key and "Abhi" is key value
$array2= array( "c"=> "Dhaka", "d"=> "Chandpur");

var_dump($array1+$array2); //union operator. value will be print randomlly
echo "</br>";
 var_dump($array1==$array2); //equality operator,  return true if array key and key value are equal.

echo "</br>";
 var_dump($array1!=$array2); // not equal operator,  return true if array key and key value are not equal.
 //"==", "!=" and "<>" all are same things.


?>