<?php
$files = glob('../automytho2_tk/log/*'); // get all file names
foreach($files as $file){ // iterate files
    if(is_file($file)){
        echo  "$file <br />";
        unlink($file);
	}
}
?>