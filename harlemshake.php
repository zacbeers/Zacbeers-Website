<!--header-->
<?php $title = 'Jordis Sweet 16 Harlem Shake - Video'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'nitw.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'fnimanager.php';
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
        <iframe width="560" height="315" src="//www.youtube.com/embed/Fhv_zJ6zOHw?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">I was hired to do the editing and graphics for her sweet 16 video. </p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/harlemshake-1.png" class="ot point">
            <img src="images/projects/harlemshake-1.png" class="pi in" alt="harlem shake video still" title="harlem shake video still">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="nitw.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Night in the Woods</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="fnimanager.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - FNI Manager ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>