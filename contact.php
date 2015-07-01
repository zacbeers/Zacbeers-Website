<?php
$page = "contact";
require_once 'core/init.php';
include_once 'header.php';
?>
    <section>
<?
if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        
        $to = "zacbeers@gmail.com";
        $subject = "CONTACT FORM";
        $name = $_POST["name"];
        $message = $_POST["message"];
        $body = "User: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;
        
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'name' => array(
                'required' => true
            ),
            'email' => array(
                'required' => true
            ),
            'message' => array(
                'required' => true
            )
        ));
        if($validation->passed()) {
            if (mail($to, $subject, $body)) {
                    echo("<p>email successfully sent!</p>");
                } else {
                    echo("<p>internal server error</p>");
                }
        } else {
            foreach ($validation->errors() as $error) {
                echo "<p>", $error, "</p>";
            }
        }
    }
} ?>
    <h3>Contact</h3>
    <p>you can reach me at <a href="mailto:zacbeers@gmail.com">zacbeers@gmail.com</a> or by simply filling out the form below, whichever you prefer.</p>
</section>
<div style="margin: 0px auto; width: 200px;">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="field">
        <input type="text" id="name" name="name" placeholder="name">
    </div>
    <div class="field">
        <input type="email" id="email" name="email" placeholder="email">
    </div>
    <div class="field">
        <textarea id="message" name="message" placeholder="message"></textarea>
    </div>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" class="smlbtn c ct in o point wt nb" value="send">
</form>
</div>