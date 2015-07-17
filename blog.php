<?php
$page = "blog";
require_once 'core/init.php';
//keep below http headers && before echo output
include_once 'header.php';
$posts = DB::getInstance()->action("SELECT *", "blogs", array('id', '>=', '0'), "ORDER BY id DESC");

if(!$posts->count()) {
    echo 'no posts';
} else {
    ?>
<article>
    <section>
    <?php
    foreach($posts->results() as $post) {
        ?>
        <a href="post.php?id=<?php echo $post->id; ?>"><div class="rect shadow" style="background: #<?php echo $post->color; ?> url('<?php echo $post->cover; ?>') no-repeat center center / cover;">
            <p style="background: #<?php echo $post->color; ?>; color: #<?php echo $post->textcolor; ?>;";><?php echo $post->title; ?></p>
        </div></a>
        <?php
    }
    ?>
    </section>
</article>
    <?php
}
include_once 'footer.php';