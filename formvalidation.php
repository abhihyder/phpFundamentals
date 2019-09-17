
<!--
 for more details
 
https://www.w3schools.com/php/php_form_validation.asp

-->




<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="POST">
    <!-- $_SERVER['PHP_SELF'] means user submitted data will show on the same file(formvalidation.php)-->
    <table>
    
        <tr>
            <td>First name:</td>
            <td><input  name="firstname" type="text" /></td>
        </tr>
        
        <tr>
            <td>Last name:</td>
            <td><input   name="lastname" type="text" /></td>
        </tr>
        
        <tr>
            <td>Email:</td>
            <td><input   name="email" type="email" /></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input   name="password" type="password" /></td>
        </tr>

        <tr>
            <td>Gender:</td>
            <td>
            <input type="radio" name="gender" value="Male" />Male
            <input  type="radio" name="gender" value="Female" />Female</td>
        </tr>

        <tr>
            <td></td>
            <td><input id="submit_reset" type="reset" value="Reset" /></td>
            <td><input id="submit_reset" type="submit" value="Submit" /></td>
        </tr>
        
    </table>

</form>


<?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $firstName  =validation($_REQUEST['firstname']); //we can catch POST/GET both method data by $_REQUEST.
        $lastName   =validation($_REQUEST['lastname']);
        $email      =validation($_REQUEST['email']);
        $password   =validation($_REQUEST['password']);
        $gender     =validation($_REQUEST['gender']);


        echo "First name: ". $firstName;
        echo "</br>";
        echo "Last name: ". $lastName;
        echo "</br>";
        echo "Email: ". $email;
        echo "</br>";
        echo "Password: ". $password;
        echo "</br>";
        echo "Gender: ". $gender;
        echo "</br>";
    
    }

    function validation($formdata){
        $formdata= trim($formdata);
        $formdata= stripcslashes($formdata);
        $formdata= htmlspecialchars($formdata);

        return $formdata;
    }





?>