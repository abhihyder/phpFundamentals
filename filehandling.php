
<?php
/*The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success)

syntex: echo readfile("filename");
*/
echo readfile("testfile.txt");

echo "<hr></hr>";




/*
 file open


The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. The following example also generates a message if the fopen() function is unable to open the specified file

details: https://www.php.net/manual/en/function.fopen.php
*/

$myfile = fopen("testfile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("testfile.txt"));
fclose($myfile);
?>


