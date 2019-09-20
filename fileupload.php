<?php
    date_default_timezone_set("Asia/Dhaka");

?>

    <form enctype="multipart/form-data" action="" method="POST">  <!-- Note: The enctype attribute can be used only if method="post".-->
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">

    </form>



    <?php

       
       $uploadedFile= $_FILES["image"]; // assign in a variable

      
        /*
        $_FILES['userfile']['name'] The original name of the file on the client machine.

        $_FILES['userfile']['tmp_name'] The temporary filename of the file in which the uploaded file was stored on the server
        */

       $fileName= $uploadedFile["name"]; // assign in a variable of the file name
       $tmpName= $uploadedFile["tmp_name"]; // assign in a variable of the tpm name
       $fileType= $uploadedFile["type"]; // assign in a variable of the file type
       $fileSize= $uploadedFile["size"]; // assign in a variable of the file size


        /* 
        The move_uploaded_file() function moves an uploaded file to a new destination.

        Note: This function only works on files uploaded via PHP's HTTP POST upload mechanism.

        Note: If the destination file already exists, it will be overwritten


        Syntex:
        move_uploaded_file(tmp_name, destination); 
        
        Example:
        move_uploaded_file($_FILES["image"]["tmp_name"], destination);

        or
        move_uploaded_file($uploadedFile["tmp_name"], destination); -- coz, already assign to a var.

        or
        below 
        */
        $customFileName= date("d.m.y-H_i_s-").$fileName; //custom file name created

       move_uploaded_file($tmpName, "images/".$customFileName);

       echo "File name:  $customFileName"; // PHP variable works in double quotation not in single quotation.
       echo "</br>";
       echo "Tmp address: ". $tmpName;
       echo "</br>";
       echo "File type: ". $fileType;
       echo "</br>";

       
       $convert= $fileSize/1000 ; //size in byte. so converted to KB

       if($convert>1000){
           echo "File size: ".floor($convert/1000)."MB"; //converted to MB
       }else{
        echo "File size: ".floor($convert)."KB";
       }

       echo "</br>";
       
       echo "<img class='imgsize' src='images/$customFileName' />";  //src attribute quotation must be single (src= ' ').
     
       
    ?>

    <style>
    .imgsize{
        width: 400px;
    }
    </style>