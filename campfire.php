<!--header-->
<?php $title = 'Campfire - Animation'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'ferret.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'lilly.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
    </div>
    <div class="box3 in ct mt">
        <iframe width="560" height="315" src="//www.youtube.com/embed/S__bu-bptQM?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">Made in <a href="http://blender.org" target="_blank" class="ot tl point">Blender</a></p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/campfire-1.png" class="ot point">
            <img src="images/projects/campfire-1.png" class="pi in" alt="work in progress" title="work in progress">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/campfire-2.gif" class="ot point">
            <img src="images/projects/campfire-2.gif" class="pi in" alt="low poly loop" title="low poly loop">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="ferret.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Ferret</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="lilly.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Lilly ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>