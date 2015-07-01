<?php
require_once 'core/init.php';
if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array('required' => true),
            'password' => array('required' => true)
        ));
        
        if($validation->passed()) {
            $user = new User();
            
            $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);
            
            if($login) {
                Redirect::to('profile.php');
            } else {
                include_once 'header.php';
                echo 'Failed to login';
            }
        } else {
            include_once 'header.php';
            foreach($validation->errors() as $error) {
                echo $error, '<br />';
            }
        }
    }
}
include_once 'header.php';
?>
<form action="" method="post">
    <h2>Log in</h2>
    <div class="field">
        <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
    </div>
    <div class="field">
        <input type="password" name="password" id="password" placeholder="Password">
    </div>
    <div class="field">
        <label for="remember">
            <input type="checkbox" name="remember" id="remember"> Keep me signed in
        </label>
    </div>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Log in">
</form>
<?php
include_once 'footer.php';