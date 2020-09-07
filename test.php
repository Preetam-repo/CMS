<?php 
function custom_copy($src, $dst) {  
   
    // open the source directory 
    $dir = opendir($src);  
   
    // Make the destination directory if not exist 
    @mkdir($dst);  
   
    // Loop through the files in source directory 
    foreach (scandir($src) as $file) {  
   
        if (( $file != '.' ) && ( $file != '..' )) {  
            if ( is_dir($src . '/' . $file) )  
            {  
   
                // Recursively calling custom copy function 
                // for sub directory  
                custom_copy($src . '/' . $file, $dst . '/' . $file);  
   
            }  
            else {  
                copy($src . '/' . $file, $dst . '/' . $file);  
            }  
        }  
    }  
   
    closedir($dir); 
}   
  
$src = "/home/taxanaly/public_html/gst"; 
  
$dst = "/home/taxanaly/public_html/home/gst"; 
  
custom_copy($src, $dst); 
  
?> 