<?php
    // user input data will come here for POST method


    echo $_POST['username'];   // here we write "$_POST" because already we selected the method as POST in form. "username" is the value of name attribute.
    echo "<br>";
    echo $_POST['password'];    //"password" is the value of name attribute.
    echo "<br>";

 

    // $_REQUEST[] also can use as alternet of $_POST[].
 
 ?>
 