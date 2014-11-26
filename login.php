<?php
require_once 'core/init.php';

if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        
        $to = "zacbeers@gmail.com";
        $subject = "mesasge sent from zacbeers.com";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true
            ),
            'password' => array(
                'required' => true
            )
        ));
        
        if($validation->passed()) {
            $user = new User();
            $login = $user->login(Input::get('username'), Input::get('password'));
            
            if($login) {
                Redirect::to('admin.php');
            } else {
                echo "<p class='flash'>Loging in failed, please <a href='#'>refresh</a> and try again.</p>";
            }
            
        } else {
            foreach ($validation->errors() as $error) {
                echo "<p class='error'>", $error, "</p>";
            }
        }
    }
}

require_once 'header-pure.php';
?>
<div class="box1 ct" id="login">
    <div class="box1 ct"></div>
    <div class="box1 ct"></div>
    <div class="box2">
        <form action="" method="post">
            <div class="field">
                <label for="username" class="wt">username</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </div>
    
            <div class="field">
                <label for="password" class="wt">password</label>
                <input type="password" name="password" id="password">
            </div>
    
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <input type="submit" value="log in">
        </form>
    </div>
</div>