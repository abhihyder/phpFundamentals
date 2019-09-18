
<!--
 for more details
 
https://www.w3schools.com/php/php_form_required.asp

-->
<style>
    span{
        color:red;
    }
    .button{
        margin-right:20px;
    }
</style>

<?php 
    // Difide variables and set as empty 
    $nameErr=  $emailErr= $websiteErr= $genderErr= " ";
    $name= $email= $website= $comment= $gender= " ";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_REQUEST['name'])){  //we can catch POST/GET both method data by $_REQUEST.
            $nameErr= "Name required";
        }else{
            $name=validation($_REQUEST['name']);
        }

        if(empty($_REQUEST['email'])){
            $emailErr="Email required";
        }else{
            $email=validation($_REQUEST['email']);
        }

        if(empty($_REQUEST['website'])){
            $websiteErr="Website required";
        }else{
            $website=validation($_REQUEST['website']);
        }

        if(empty($_REQUEST['comment'])){
            $comment="";
        }else{
            $comment=validation($_REQUEST['comment']);
        }

        if(empty($_REQUEST['gender'])){
            $genderErr="Gender required";
        }else{
            $gender=validation($_REQUEST['gender']);
        }

       

    }

    function validation($formdata){
        $formdata= trim($formdata);
        $formdata= stripcslashes($formdata);
        $formdata= htmlspecialchars($formdata);

        return $formdata;
    }

?>



<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="POST">
    <!-- $_SERVER['PHP_SELF'] means user submitted data will show on the same file(formvalidation.php)-->
    <table>
    
        <tr>
            <td>Name:</td>
            <td><input  name="name" type="text" /><span>* <?php echo $nameErr; ?></span></td>
        </tr>
        
        
        <tr>
            <td>Email:</td>
            <td><input   name="email" type="email" /><span>* <?php echo $emailErr; ?></span></td>
        </tr>

        <tr>
            <td>Website:</td>
            <td><input   name="website" type="text" /><span>* <?php echo $websiteErr; ?></span></td>
        </tr>
		
		<tr>
			<td>Comment:</td>
			<td><textarea name="comment"  cols="20" rows="10"></textarea></td>
		</tr>
		
        <tr>
            <td>Gender:</td>
            <td>
            <input name="gender" type="radio" value="Male" />Male
            <input  name="gender" type="radio" value="Female" />Female<span>* <?php echo $genderErr; ?></span></td>
        </tr>

        <tr>
            <td></td>
            <td><input class="button" type="submit" value="Submit" /></td>
        </tr>
        
    </table>

</form>

<?php
    echo "Name: ". $name;
    echo "</br>";
    echo "Email: ". $email;
    echo "</br>";
    echo "Website: ". $website;
    echo "</br>";
    echo "Comment: ". $comment;
    echo "</br>";
    echo "Gender: ". $gender;
    echo "</br>";

    

    //have to learn so many things about it
?>