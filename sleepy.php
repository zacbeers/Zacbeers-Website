<!--header-->
<?php $title = 'Sleepy - Animation'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'passauto.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'camtrucks.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Personal Project</p>
    </div>
    <div class="box3 in ct mt">
        <iframe width="560" height="315" src="//www.youtube.com/embed/YK0za-Hh0y4?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
<!--image 2
    <div class="box3 in ct mt">
        <a href="images/projects/sleepy-1.png" class="ot point">
            <img src="images/projects/sleepy-1.png" class="pi in" alt="sleepy animation still" title="sleepy animation still">
        </a>
    </div>-->
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="passauto.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Pass Auto Sales</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="camtrucks.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Cam Trucks ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>