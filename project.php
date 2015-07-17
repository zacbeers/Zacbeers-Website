<?php
$page = "portfolio";
require_once 'core/init.php';
if (!isset($_GET['id'])) {
    Redirect::to('portfolio.php');
} else {
    $id = $_GET['id'];
    $y = 0;
    $total = 0;
    while($y <= $total) {
        $check = DB::getInstance()->action("SELECT *", "projects", array('id', '=', $y));
        $y++;
        if($check->count()) {
            $total = $y;
        }
    }
    $allprojects = $total -= 1;
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
                    if (strpos($text,'images/projects') !== false) {
                    ?>
                    <p>
                        <a href="<?php echo $text; ?>" target="_blank"><img <?php echo $text; ?>></a>
                    </p>
                    <?php
                    } else {
                    ?>
                    <p><?php echo $text; ?></p>
                    <?php
                    }
                    $x++;
                }
            ?><div class="ctanav"><?php
                if($id > 0) {
                ?>
                <a href="project.php?id=<?php echo $id - 1; ?>"><button><&nbsp;&nbsp;&nbsp;last project</button></a>
                    <?php }
            if($id < $allprojects) {
                ?>
                    <a href="project.php?id=<?php echo $id + 1; ?>"><button>next project&nbsp;&nbsp;&nbsp;></button></a>
                    <?php } ?>
                </div>
            </section>
        <?php
        }
    }
}
include_once 'footer.php';