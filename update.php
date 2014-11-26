<?php
require_once 'core/init.php';

$user = new User();

require_once 'header-pure.php';

if($user->isLoggedIn()) {
?>
//update form
<div class="box1 ct" id="update">
    <div class="box1 ct"></div>
    <div class="box1 ct"></div>
    <div class="box2">
        <form action="" method="post">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php escape($user->data()->name); ?>">
            </div>
            <input type="submit" value="save changes">
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
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