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
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            )
        ));
        
        if($validation->passed()) {
            try {
                $user->update(array(
                    'name' => Input::get('name')
                ));
                
                Session::flash('profile', 'Updated successfully');
                Redirect::to('profile.php');
                
            } catch(Exception $e) {
                die($e->getMessage());
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
        <input type="text" name="name" id="name" placeholder="Name" value="<?php echo escape($user->data()->name); ?>">
    </div>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Save Changes">
</form>
<?php
include_once 'footer.php';