<?php

 // Opens the file for reading
   $file = fopen("myfile.txt", "r"); 
   if ($file) {
       echo "File opened successfully!";
   } else {
       echo "Error opening the file.";
   }

   while (($line = fgets($file)) !== false) {
       echo $line . "<br>";
   }
   //write to the file
    $file = fopen("myfile.txt", "w");
   if ($file) {
       fwrite($file, "This is a new line added to the file.\n");
       fclose($file);
   } else {
       echo "Error opening the file for writing.";
   }
?>