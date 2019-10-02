<?php
    //define(name, value, case_insensitive );
    define("constant", "I am learning PHP.", true);
    echo constant;
    echo "</br>";
    //or
    echo Constant;
    echo "</br>";

    //define(name, value, case_sensitive );
    define("constant_name", "I am learning PHP.", false);
     //or define("constant", "I am learning PHP."); if case_sensitive
    echo constant_name; //not echo Constant_name;
?>