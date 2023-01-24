<h3>here is the php file </h3>
<html>

<?php /*
echo readfile("wedictonary.txt");# this will read the file and will display the content
 */
/*
PHP Read File - fread()
The fread() function reads from an open file.

The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read

The following PHP code reads the "webdictionary.txt" file to the end:.

r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
*/




$myfile = fopen("wedictonary.txt", "r") or die("unable to open the file");
#echo fread($myfile,filesize("wedictonary.txt"));#this will display whole content of file 
echo fgets($myfile)."<br>";#this will return first line of file 
#Note: After a call to the fgets() function, the file pointer has moved to the next line.
echo fgets($myfile); #this will give second line of file
fclose($myfile);
?>
</html>