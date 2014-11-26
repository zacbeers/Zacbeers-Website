<?php
require_once 'core/init.php';

$user = new User();

require_once 'header-pure.php';

if($user->isLoggedIn()) {
?>
//admin panel or dashboard
<div class="box1 ct" id="login">
    <div class="box2">
        <div class="box1 ct"></div>
        <div class="box1 ct"></div>
        <div class="box2">
            <p class="greeting title wt lt bt">hello <?php echo escape($user->data()->username); ?></p>

            <ul>
                <li class="l nd"><a href="logout.php" class="wt point">log out</a></li>
                <li class="l nd"><a href="new-project.php" class="wt point">new project</a></li>
                <li class="l nd"><a href="update.php" class="wt point">edit existing project</a></li>
            </ul>
        </div>
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