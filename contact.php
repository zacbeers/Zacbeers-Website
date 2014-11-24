<?php
require_once 'header.php';
?>
<div class="box1 ct contact" id="contact">
    <div class="box1 ct"></div>
    <div class="box1 ct"></div>
    <div class="box1 ct">
<?php
require_once 'core/init.php';

if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        
        $to = "zacbeers@gmail.com";
        $subject = "CONTACT FORM";
        $name = $_POST["name"];
        $email = $_POST["email"];
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
                    echo("<p class='bt bluet title2 ct error'>email successfully sent!</p>");
                } else {
                    echo("<p class='bt ot title ct error'>internal server error</p>");
                }
        } else {
            foreach ($validation->errors() as $error) {
                echo "<p class='bt ot title ct error'>", $error, "</p>";
            }
        }
    }
}
?>
        <p class="title2 bt wt">contact</p>
    </div>
    <div class="box2 in ct">
        <div class="box2 in">
            <p class="wt">you can reach me at <a href="mailto:zacbeers@gmail.com" class="ot point">zacbeers@gmail.com</a> or by simply filling out the form below, whichever you prefer.</p>
        </div>
    </div> 
    <div class="box2 in ct">
        <div class="box2 in">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="box1 ct">
                    <div class="field eighth in">
                        <label for="name" class="wt b">name</label>
                        <input type="text" id="name" name="name" placeholder="Jane Doe" value="Jane Doe">
                    </div>
                    <div class="field eighth in">
                        <label for="email" class="wt b">email</label>
                        <input type="email" id="email" name="email" placeholder="example@email.com" value="example@gmail.com">
                    </div>
                </div>
                <div class="field half in">
                    <label for="message" class="wt b">message</label>
                    <textarea id="message" name="message" placeholder="write me something..." value="write me something..."></textarea>
                </div>
                <div class="field half in">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <input type="submit" class="btn c ct in o point wt nb" value="send">
                </div>
            </form>
        </div>
    </div> 
</div>
<!--work-buttons-->
<!--footer-->
<div class="box1 ct">
    <div class="box1 ct">
        <div class="box3 vb1 in">
            <p class="title2 bt wt lt">see more work:</p>
        </div>
    </div>
<?php
require_once 'work-buttons.php';

echo '</div>';

require_once 'footer.php';