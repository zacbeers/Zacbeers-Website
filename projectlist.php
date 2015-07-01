<?php
require_once 'core/init.php';
if(Session::exists('projectlist')) {
    echo Session::flash('projectlist') . '<br />';
    
}
$user = new User();
if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
} else {
    //keep below http headers && before echo output
    include_once 'header.php';
    
    
    $projects = DB::getInstance()->get('projects', array('id', '>=', '0'));
    
    if(!$projects->count()) {
        echo 'no projects';
    } else {
        ?>
        <section>
        <?php
        foreach($projects->results() as $project) {
            ?>
            <a href="editproject.php?id=<?php echo $project->id; ?>"><div class="square" style="background: #<?php echo $project->color; ?> url('<?php echo $project->cover; ?>') no-repeat center center; background-size: contain;">
                <p style="background: #<?php echo $project->color; ?>; color: #<?php echo $project->textcolor; ?>;";><?php echo $project->title, '<br/>'; ?></p>
            </div></a>
            <?php
        }
        ?>
        </section>
        <?php
    }
}
<?php
include_once 'footer.php';