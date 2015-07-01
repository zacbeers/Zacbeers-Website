<?php
if(!empty($_FILES['files']['name'][0])) {
    
    $files = $_FILES['files'];
    
    $uploaded = array();
    $failed = array();
    
    $allowed = array('txt', 'jpg');
    
    foreach($files['name'] as $position => $file_name) {
        
        $file_tmp = $files['tmp_name'][$position];
        $file_size = $files['size'][$position];
        $file_error= $files['error'][$position];
        
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        
        if(in_array($file_ext, $allowed)) {
            
            if($file_error === 0) {
                
                if($file_size <= 20000000) {
                    
                    $file_name_new = uniqid('', true) . '.' . $file_ext;
                    $file_destination = 'images/projects/' . $file_name_new;
                    
                    if(move_uploaded_file($file_tmp, $file_destination)) {
                        $uploaded[$position] = $file_destination;
                    } else {
                        $failed[$position] = "[{$file_name}] failed to upload. Error code {$file_error}.<br />";
                    }
                    
                } else {
                    $failed[$position] = "[{$file_name}] exceeds the 20mb size limit.<br />";
                }
                
            } else {
                $failed[$position] = "[{$file_name}] failed to upload. Error code {$file_error}.<br />";
            }
            
        } else {
            $failed[$position] = "[{$file_name}] file extention '{$file_ext}' is not allowed.<br />";
        }
    }
    
    if(!empty($uploaded)) {
        print_r($uploaded);
    }
    
    if(!empty($failed)) {
        print_r($failed);
    }
    
}
include_once 'footer.php';