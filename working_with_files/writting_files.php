<?php
$file = "example.txt";

if($handle = fopen($file,'w')){

    fwrite($handle,"i write worst possible php code on earth");

    fclose($handle);

}else{
    echo "cant open";
}



?>