<?php
require_once 'core/init.php';
if(Session::exists('projectslist')) {
    echo Session::flash('projectslist') . '<br />';
    
}
$user = new User();
if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
} else {
    //keep below http headers && before echo output
    include_once 'header.php';
    if(Input::exists()) {
        if(Token::check(Input::get('token'))) {
            //combine inputs first
            
            //$content = Input::get('text');
            //$fp = fopen("myText.txt","w");
            //fwrite($fp,$content);
            //fclose($fp);
        }
    }
?>
<form action="" method="post">
    <?php
        $textfile = file_get_contents( "myText.txt" );
        $texts = explode('%n', $textfile); //n stands for new file
        foreach($texts as $text) {
            $imgortext = explode('%2', $text); //2 because your splitting the string into two parts
            foreach($imgortext as $iot) {
                if (strpos($iot,'images/') !== false) {
                    ?>
                    <img src="<?php echo $txt; ?>" width="100px" height="auto"><br/>
                    <?php
                } else {
                    ?>
                    <div class="field">
                        <textarea name="text" id="text"><?php echo $iot; ?></textarea>
                    </div>
                <?php
                }
            }
        }
    ?>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Save Changes">
</form>
    <?php
}
include_once 'footer.php';