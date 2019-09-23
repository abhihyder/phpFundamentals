<!--

The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.

Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.

-->




<?php

//when "customfile.php" will not exist, "include" will only produce a warning (E_WARNING) and the script will continue

 include "customFile.php";
?>

<div id="content">
    <article>
        <h2>Where does it come from?</h2>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
    </article>
</div>

<?php
//when "footer.php" will not exist, "require" will produce a fatal error (E_COMPILE_ERROR) and stop the script

 require "footer.php"; 
?>



<style>

#content{
	width:900px;
	margin:0 auto;
	
}

#content h2{
	color:#247327;
	
	
}

#content p{
	text-align:justify;
	font-family:arial;
	
}

</style>