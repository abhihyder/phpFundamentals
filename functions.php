<?php

    /*Basic syntex of function

    function functionName(){
        echo "what i wanna print";
    }
    functionName();

    or--------

     function functionName(){
        return "what i wanna print";
    }
    echo functionName();
    */
    function student(){

        echo "I am a student of PHP!";
    }
        student();
        

        echo "<hr></hr>";








    /*-------------------------------------------  
    function with perameters 


    function functionName($argument, $argument-2,... $argument-n){
        echo "what i wanna print";
    }
    functionName("argumentValue" , "argumentValue-2" , ... "argumentValue-n" );

    */
    function academy($name, $year){

        return "I studied at $name from $year </br>";
    }
        echo academy ("Shikari Kandi Akbaria High School" , "2004-2008");
        echo academy ("Kalipur High School and College" , "2009-2010");


        echo "<hr></hr>";



       

    /*
    we can set default argumentValue. if we don't input any argumentValue that time defualt value will be print.
    
    */
    function higherAcademy($name="SIMT", $year="2012-2016"){

        return "I studied at $name from $year </br>";
    }
        echo higherAcademy ();
        echo higherAcademy ("NUB", "2017-2019");


        echo "<hr></hr>";







        
    //---------------------------------
    /*
    sum by function

    */
    function sum($x,$y){
        $z=$x+$y;
        return $z;

    }
        echo "10+12=".sum(10,12)."</br>";

    //or
    function sum2(){
        $x=20;
        $y=30;
        return $x+$y;

    }
        echo "20+30=".sum2(); 

?>