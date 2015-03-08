<!--header-->
<?php $title = 'Every Night I Dream of Dancing - Animation'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'november.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'ferret.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Photoshop animation for a music video by <a href="https://www.youtube.com/user/songstowearpantsto" class="ot point" target="_blank">Andrew Huang</a></p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/everynight-1.gif" class="ot point">
            <img src="images/projects/everynight-1.gif" class="pi in" alt="andrew huang final animation" title="andrew huang final animation">
        </a>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">In collaboration with many artists around the world we each took a small portion of the video to animate, later to be pieced together by Andrew. These are only my frames.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/everynight-2.png" class="ot point">
            <img src="images/projects/everynight-2.png" class="pi in" alt="andrew huang animation frames" title="andrew huang animation frames">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="november.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - November</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="ferret.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Ferret ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>
