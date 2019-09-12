<?php 
        //string data
        $a="Abhi";
        $ab="10";

        var_dump($a);
        var_dump($ab);
        echo "</br>";
        //or for print
        echo $a;
        echo $ab;
        echo "</br>";
        
        //Integer data
        $b= 10;

        var_dump($b);
        echo "</br>";
        //or for print
        echo $b;
        echo "</br>";
       
        //float data
        $c= 5.90;
        
        var_dump($c);
        echo "</br>";
        //or for print
        echo $c;
        echo "</br>";

      
        //boolean data
        $d= true;
        $e=false;

        var_dump($d);
        echo "</br>";
        var_dump($e);
        echo "</br>";
        //or for print
        echo $d;
        echo "</br>";
        echo $e;
        echo "</br>";

      
        //array data
        $f= array ("Abhi", "Tofayel", "Hyder", 12, 15);

        var_dump($f);
        echo "</br>";
        // or for print
        echo $f[1]; //[1] is index number of array which is start from 0.
        echo "</br>";
        //Object
        class className{
            function functionName(){
                return "value";
            }
            function functionName2(){
                echo $this-> functionName();
            }
        }
        $variabl= new className();
        $variabl-> functionName2();

        ?>