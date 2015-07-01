<?php
require_once 'core/init.php';
$user = new User();

if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
}
if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'current_password' => array(
                'required' => true,
            ),
            'new_password' => array(
                'required' => true,
                'min' => 6,
                'max' => 64
            ),
            'new_password_again' => array(
                'required' => true,
                'matches' => 'new_password'
            ),
        ));
        
        if($validation->passed()) {
            
            if(Hash::make(Input::get('current_password'), $user->data()->salt) !== $user->data()->password) {
                include_once 'header.php';
                echo 'current_password is incorrect';
            } else {
                $salt = Hash::salt(32);
                $user->update(array(
                    'password' => Hash::make(Input::get('new_password'), $salt),
                    'salt' => $salt
                ));
                
                Session::flash('profile', 'Password changed succesfully.');
                Redirect::to('profile.php');
            }
            
        } else {
            include_once 'header.php';
            foreach($validation->errors() as $error) {
                echo $error . '<br />';
            }
        }
        
    }
}
include_once 'header.php';
?>

<form action="" method="post">
    <div class="field">
        <input type="password" name="current_password" id="current_password" placeholder="Current Password"
    </div>
    <div class="field">
        <input type="password" name="new_password" id="new_password" placeholder="New Password">
    </div>
    <div class="field">
        <input type="password" name="new_password_again" id="new_password_again" placeholder="Repeat New Password">    
    </div>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Save Changes">
</form>
    <?php
include_once 'footer.php';