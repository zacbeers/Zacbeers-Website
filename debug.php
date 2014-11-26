<?php
    include_once 'index.php';
    
$included_files = get_included_files();

foreach ($included_files as $filename) {
    echo "$filename <br>";
}
?>