<!--header-->
<?php $title = 'Late Nights with Trav & Los - Animation'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'work.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'november.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Motion graphics animation based on their podcast logo.</p>
    </div>
    <div class="box3 in ct mt">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dsQkEwV4z14?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/latenights-1.png" class="ot point">
            <img src="images/projects/latenights-1.png" class="pi in" alt="work in progress" title="work in progress">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/latenights-2.gif" class="ot point">
            <img src="images/projects/latenights-2.gif" class="pi in" alt="animation loop" title="animation loop">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="work.php" class="point wt" title="press LEFT on keyboard">
							<p class="c">< Back to All Projects</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="november.php" class="point wt" title="press RIGHT on keyboard">
							<p class="c">Next Project - November ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>
