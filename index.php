<?php
require_once 'core/init.php';
//keep below http headers && before echo output
include_once 'header.php';
if(Session::exists('home')) {
    echo Session::flash('home') . '<br />';
}
$projects = DB::getInstance()->action("SELECT *", "projects", array('id', '>=', '0'), "ORDER BY id DESC");

$p = 0;
$l = 0;
$b = 0;
?>
<script src="scripts/intro.js"></script>
<div class="block">
    <div class="middle">
        <div class="profile"></div><p><h1>I'm a web developer and digital designer</h1></p>
    </div>
    <script src="scripts/mouse.js"></script>
    <span class="mouse-container"><m id="mouse"></m></span>
</div>
        <article>
            <?php
            if(!$projects->count()) {
                echo 'no projects';
            } else {
                ?>
                <section>
                    <h2>Recent Work</h2>
                <?php
                foreach($projects->results() as $project) {
                    if($p < 2) {
                    ?>
                    <a href="project.php?id=<?php echo $project->id; ?>"><div class="rect shadow" style="background: #<?php echo $project->color; ?> url('<?php echo $project->cover; ?>') no-repeat center center / cover;">
                        <p style="background: #<?php echo $project->color; ?>; color: #<?php echo $project->textcolor; ?>;";><?php echo $project->title; ?></p>
                    </div></a>
                    <?php
                    $p++;
                    }
                }
            }
$labs = DB::getInstance()->action("SELECT *", "labs", array('id', '>=', '0'), "ORDER BY id DESC");

            if(!$labs->count()) {
                echo 'no labs';
            } else {
                foreach($labs->results() as $lab) {
                    if($l < 3) {
                    ?>
                    <a href="lab.php?id=<?php echo $lab->id; ?>"><div class="square shadow" style="background: #<?php echo $lab->color; ?> url('<?php echo $lab->cover; ?>') no-repeat center center / cover;">
                        <p style="background: #<?php echo $lab->color; ?>; color: #<?php echo $lab->textcolor; ?>;";><?php echo $lab->title; ?></p>
                    </div></a>
                    <?php
                    $l++;
                    }
                }
            }
            $projects = DB::getInstance()->action("SELECT *", "projects", array('id', '>=', '0'), "ORDER BY id DESC");
            if(!$projects->count()) {
                echo 'no projects';
            } else {
                foreach($projects->results() as $project) {
                    $pTotal = $projects->count();
                    $pThird = $pTotal - 3;
                    if($project->id == $pThird) {
                        if($p < 3) {
                        ?>
                        <a href="project.php?id=<?php echo $project->id; ?>"><div class="rect shadow" style="background: #<?php echo $project->color; ?> url('<?php echo $project->cover; ?>') no-repeat center center / cover;">
                            <p style="background: #<?php echo $project->color; ?>; color: #<?php echo $project->textcolor; ?>;";><?php echo $project->title; ?></p>
                        </div></a>
                        <?php
                        $p++;
                        }
                    }
                }
            } 
$posts = DB::getInstance()->action("SELECT *", "blogs", array('id', '>=', '0'), "ORDER BY id DESC");
if(!$posts->count()) {
                echo 'no posts';
            } else {
                ?>
                <?php
                foreach($posts->results() as $post) {
                    if($b < 1) {
                    ?>
                    <a href="post.php?id=<?php echo $post->id; ?>"><div class="rect shadow" style="background: #<?php echo $post->color; ?> url('<?php echo $post->cover; ?>') no-repeat center center / cover;">
                        <p style="background: #<?php echo $post->color; ?>; color: #<?php echo $post->textcolor; ?>;";><?php echo $post->title; ?></p>
                    </div></a>
                    <?php
                    $b++;
                    }
                }
                ?>
                </section>
                <?php
            }
?>
        </article>
<?php
include_once 'footer.php';