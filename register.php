<?php
require_once 'core/init.php';
if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users',
                'numstart' => true
            ),
            'password' => array(
                'required' => true,
                'min' => 6,
                'max' => 64,
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            ),
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
        ));

        if($validation->passed()) {
            $user = new User();
            $salt = Hash::salt(32);
            try {
                $user->create(array(
                    'username' => Input::get('username'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'salt' => $salt,
                    'name' => Input::get('name'),
                    'joined' => date('Y-m-d H:i:s'),
                    'group' => 1
                ));
                
                Session::flash('profile', 'You have been registered and can now <a href="login.php">log in</a>');
                Redirect::to('profile.php');
            } catch(Exception $e) {
                die($e->getMessage());
            }
        } else {
            include_once 'header.php';
            foreach($validation->errors() as $error) {
                echo $error, '<br />';
            }
            echo '<br />';
        }
    }
}
include_once 'header.php';
?>
<h2>Register</h2>
<form action="" method="post">
    <div class="field">
        <input type="text" name="username" id="username" placeholder="Username" value="<?php echo Input::get('username'); ?>" autocomplete="off">
    </div>
    <div class="field">
        <input type="password" name="password" id="password" placeholder="Password">
    </div>
    <div class="field">
        <input type="password" name="password_again" id="password_again" placeholder="Repeat Password">
    </div>
    <div class="field">
            <input type="text" name="name" id="name" placeholder="Name" value="<?php echo Input::get('name'); ?>">
    </div>
    
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Register">
</form>
<?php
include_once 'footer.php';