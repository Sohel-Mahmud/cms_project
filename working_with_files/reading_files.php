<?php
$file = "example.txt";

if($handle = fopen($file,'r')){

    echo $content = fread($handle,10); //each bite equals a character;
    echo $fullread = fread($handle,filesize($file));

    fclose($handle);

}else{
    echo "cant open";
}

//for deleting
//unlink("example.text");

?>