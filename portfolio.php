<?php
$page = "portfolio";
require_once 'core/init.php';
//keep below http headers && before echo output
include_once 'header.php';
$projects = DB::getInstance()->action("SELECT *", "projects", array('id', '>=', '0'), "ORDER BY id DESC");

if(!$projects->count()) {
    echo 'no projects';
} else {
    ?>
    <section>
    <?php
    foreach($projects->results() as $project) {
        ?>
        <a href="project.php?id=<?php echo $project->id; ?>"><div class="rect" style="background: #<?php echo $project->color; ?> url('<?php echo $project->cover; ?>') no-repeat center center / cover;">
            <p style="background: #<?php echo $project->color; ?>; color: #<?php echo $project->textcolor; ?>;";><?php echo $project->title; ?></p>
        </div></a>
        <?php
    }
    ?>
    </section>
    <?php
}
include_once 'footer.php';