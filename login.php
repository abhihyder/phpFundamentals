
<div class="login_page">
    <form class="form" action="" method="POST">
        <table id="formTable">
            <tr>
                <td>Username :</td>
                <td> <input class="line" type="text" name="userName"></td>
            </tr>

            <tr>
                <td>Password :</td>
                <td><input class="line" type="password" name="password"></td>
            </tr>

            <tr>
                <td></td>
                <td><input class="line" type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</div>

<?php
   

?>




<style>

    *{margin:0; padding:0}
    body{
        background:#0a5c65;
    }

    .login_page{
        width:320px;
        height:300px;
        background: #1fc5d6;
        margin:0 auto;
        margin-top: 100px;
        border: 2px solid black;
        border-radius: 5%;
    }

    #formTable{
        margin-top:50px;
        padding: 20px;
    }

    #formTable .line{
       margin: 10px 0;
       padding:10px;
       border:1px solid white;
       border-radius:10px;
       font-weight:bold;
    }
    


</style>