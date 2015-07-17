<?php
$page = "portfolio";
require_once 'core/init.php';
if (!isset($_GET['id'])) {
    Redirect::to('portfolio.php');
} else {
    $id = $_GET['id'];
    $projects = DB::getInstance()->get('projects', array('id', '=', $id));

    if(!$projects->count()) {
        echo 'no project with the id of ', $id;
    } else {
        foreach($projects->results() as $project) {
            $textfile = file_get_contents($project->data);

            //keep below http headers && before echo output
            include_once 'header.php';

            ?>
            <section>
                <h2><?php echo $project->title; ?></h2>
                <?php
                $texts = explode('%n', $textfile);
                $x = 0;
                foreach($texts as $text) {
                    if (strpos($text,'images/') !== false) {
                    ?>
                    <p>
                        <a href="<?php echo $text; ?>" target="_blank"><img src="<?php echo $text; ?>"></a>
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