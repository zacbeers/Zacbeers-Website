<?php
require_once 'core/init.php';

$user = new User();
require_once 'header-pure.php';

if($user->isLoggedIn()) {
    ?>
<div class="box1 ct"></div>
<div class="box1 ct"></div>
<?php
    if(!empty($_FILES['files']['name'][0])) {

        $files = $_FILES['files'];

        $uploaded = array();
        $failed = array();

    // whitelist
        $allowed = array('txt', 'pdf', 'jpg', 'png', 'gif', 'bmp');

        foreach($files['name'] as $position => $file_name) {

            $file_tmp = $files['tmp_name'][$position];
            $file_size = $files['size'][$position];
            $file_error = $files['error'][$position];

            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            if(in_array($file_ext, $allowed)) {

                if($file_error === 0) {

                    if($file_size <= 10000000) {

                        $file_name_new = uniqid('', true) . '.' . $file_ext;
                        $file_destination = 'images/uploads/' . $file_name_new;

                        if(move_uploaded_file($file_tmp, $file_destination)) {
                            $uploaded[$position] = $file_destination;
                        } else {
                            $failed[$position] = "[{$file_name}] failed to upload.<br>";
                        }

                    } else {
                        $failed[$position] = "[{$file_name}] is too large. Maximum file size is 10MB.<br>";
                    }

                } else {
                    $failed[$position] = "[{$file_name}] failed to upload. Error code: {$file_error}.<br>";
                }

            } else {
                $failed[$position] = "[{$file_name}] file extention '{$file_ext}' is not allowed. <br>";
            }

        }

        if(!empty($uploaded)) {
            //print_r($uploaded);
        }

        if(!empty($failed)) {
            print_r($failed);
        }

    }
    ?>
    <form action="" method="post" class="wt">
                <div class="field">
                    <label for="title">title</label><br>
                    <input type="text" name="title" id="title"><br><br>
                </div>
                <div class="field">
                    <label for="category">category</label><br>
                    <input type="text" name="category" id="category"><br><br>
                </div>
                <div class="field">
                    <label for="description">description</label><br>
                    <textarea name="description" id="description"></textarea><br><br>
                </div>
                <div class="field">

    <?php

    foreach($uploaded as $position => $file_name) {
        echo "<div class='wt'><img src='{$file_name}' width='200px'><br><label>image {$position} </label><input type='text' value='{$file_name}'><br><label>alt/title</label><input type='text' value='image'></div><br><br>";
    }
    ?>
                </div>
                <input type="submit" value="publish project">
            </form>
<?php
} else {
?>
<div class="box1 ct" id="failed">
    <div class="box2 in">
        <div class="box1 ct"></div>
        <div class="box1 ct"></div>
        <div class="box2">
            <p class="greeting title wt lt">You must be <a href="login.php" class="bt ot point">logged in</a> to view this page</p>
        </div>
    </div>
</div>
<!--footer-->
<?php
}
require_once 'footer.php';