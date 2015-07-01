<?php
$page = "blog";
require_once 'core/init.php';
if (!isset($_GET['id'])) {
    Redirect::to('labs.php');
} else {
    $id = $_GET['id'];
    $posts = DB::getInstance()->get('blogs', array('id', '=', $id));

    if(!$posts->count()) {
        echo 'no post with the id of ', $id;
    } else {
        foreach($posts->results() as $post) {
            $textfile = file_get_contents($post->data);

            //keep below http headers && before echo output
            include_once 'header.php';

            ?>
            <section style="text-align: left;">
                <h2 style="text-align: center;"><?php echo $post->title; ?></h2>
                <?php
                $texts = explode('%n', $textfile);
                $x = 0;
                foreach($texts as $text) {
                    if (strpos($text,'images/') !== false) {
                    ?>
                    <p>
                    <img src="<?php echo $text; ?>">
                    </p>
                    <?php
                    } else {
                    ?>
                    <p><?php echo $text; ?></p>
                    <?php
                    }
                    $x++;
                }
                ?>
            </section>
        <?php
        }
    }
}
include_once 'footer.php';