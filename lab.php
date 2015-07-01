<?php
$page = "labs";
require_once 'core/init.php';
if (!isset($_GET['id'])) {
    Redirect::to('labs.php');
} else {
    $id = $_GET['id'];
    $labs = DB::getInstance()->get('labs', array('id', '=', $id));

    if(!$labs->count()) {
        echo 'no lab with the id of ', $id;
    } else {
        foreach($labs->results() as $lab) {
            $textfile = file_get_contents($lab->data);

            //keep below http headers && before echo output
            include_once 'header.php';

            ?>
            <section>
                <h2><?php echo $lab->title; ?></h2>
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