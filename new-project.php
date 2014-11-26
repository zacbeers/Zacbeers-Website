<?php
require_once 'core/init.php';

$user = new User();

require_once 'header-pure.php';

if($user->isLoggedIn()) {
?>
//upload form
<div class="box1 ct" id="upload">
    <div class="box1 ct"></div>
    <div class="box1 ct"></div>
    <div class="box2 ct">
        <!--old way-->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="field">
                <input type="file" class="w nd" name="files[]" multiple>
            </div>
            <input type="submit" value="upload">
        </form>
    </div>
</div>
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