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

?>






<div>
    <div style=" width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $a1=1;
        $a2=1;
        while($a2<=10){
            echo $a1."x".$a2."=".$a1*$a2."</br>";
            $a2++;
        }
            echo "****";

        echo "<hr></hr>";

        ?>
    </div>

    <div style="width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $a3=1;
        
        for($a4=1; $a4<=10; $a4++){
            echo $a3."x".$a4."=".$a3*$a4."</br>";
        }
            echo "****";

        echo "<hr></hr>";

        ?>
    </div>
</div>




<div>
    <div style=" width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $b1=2;
        $b2=1;
        while($b2<=10){
            echo $b1."x".$b2."=".$b1*$b2."</br>";
            $b2++;
        }
            echo "****";

        echo "<hr></hr>";

        ?>
    </div>

    <div style="width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $b3=2;
        
        for($b4=1; $b4<=10; $b4++){
            echo $b3."x".$b4."=".$b3*$b4."</br>";
        }
            echo "****";

        echo "<hr></hr>";

        ?>
    </div>
</div>





<div>
    <div style=" width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $c1=3;
        $c2=1;
        while($c2<=10){
            echo $c1."x".$c2."=".$c1*$c2."</br>";
            $c2++;
        }
            echo "****";

        echo "<hr></hr>";

        ?>
    </div>

    <div style="width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $c3=3;
        
        for($c4=1; $c4<=10; $c4++){
            echo $c3."x".$c4."=".$c3*$c4."</br>";
        }
            echo "****";

        echo "<hr></hr>";

        ?>
    </div>
</div>





<div>
    <div style=" width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $d1=4;
        $d2=1;
        while($d2<=10){
            echo $d1."x".$d2."=".$d1*$d2."</br>";
            $d2++;
        }
            echo "****";

        echo "<hr></hr>";

        ?>
    </div>

    <div style="width: 50%; float:left; margin: 0 auto">
        <?php
        //-------------------------------------
        // Multiplication of 1 to 20

        $d3=4;
        
        for($d4=1; $d4<=10; $d4++){
            echo $d3."x".$d4."=".$d3*$d4."</br>";
        }
            echo "****";

        echo "<hr></hr>";


        // continue .......................
        ?>
    </div>
</div>
