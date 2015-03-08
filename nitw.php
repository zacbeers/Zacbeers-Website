<!--header-->
<?php $title = 'Night in the Woods - Illustration'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'x9.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'harlemshake.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Based on the upcoming game.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/nitw-1.png" class="ot point">
            <img src="images/projects/nitw-1.png" class="pi in" alt="night in the woods game fan art illustration" title="night in the woods game fan art illustration">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/nitw-2.png" class="ot point">
            <img src="images/projects/nitw-2.png" class="pi in" alt="fan art illustraion closeup" title="fan art illustraion closeup">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="x9.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - X9</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="harlemshake.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Harlem Shake ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>