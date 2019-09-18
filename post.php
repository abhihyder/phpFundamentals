<!-- $_POST -->

<form action="formdata_post.php" method="POST">  <!-- "action" means where i wanna transfer the form data and "method" means POST type. -->
   User Name: <input type="text" name="username"> <!-- name value must, which will use to catch data on action file -->
   
   Password: <input type="password" name="password">


    <input type="submit" value="Submit">
 <!--     after click on the "submit" all user data will transfer to formdata_post.php or custom.php(if i mention other custom file).
    so let's open the formdata.php file.
     -->
 </form>
