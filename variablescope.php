<?php

//Example of local variable
    function localVariable(){
        $a=15;  //variable have to call inside of function
        echo $a;
    }
    localVariable();

    echo"<hr></hr>";





   //Example of global variable

        $b=20;  //called variable outside of function
   function globalVariable(){
        global $b; //made it global
    echo $b;
}
    globalVariable(); 


?>



