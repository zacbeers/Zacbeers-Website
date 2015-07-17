<?php
$page = "labs";
require_once 'core/init.php';
//keep below http headers && before echo output
include_once 'header.php';
$labs = DB::getInstance()->action("SELECT *", "labs", array('id', '>=', '0'), "ORDER BY id DESC");

if(!$labs->count()) {
    echo 'no labs';
} else {
    ?>
    <section>
        <h2>Labs</h2>
        <p>Personal work done to explore new coding conventions, languages, or visual styles. Click on an image to view more information about that particular project.</p>
    <?php
    foreach($labs->results() as $lab) {
        ?>
        <a href="lab.php?id=<?php echo $lab->id; ?>"><div class="rect shadow" style="background: #<?php echo $lab->color; ?> url('<?php echo $lab->cover; ?>') no-repeat center center / cover;">
            <p style="background: #<?php echo $lab->color; ?>; color: #<?php echo $lab->textcolor; ?>;";><?php echo $lab->title; ?></p>
        </div></a>
        <?php
    }
    ?>
    </section>
    <?php
}
include_once 'footer.php';