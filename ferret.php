<!--header-->
<?php $title = 'Ferret - Illustration'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'everynightidreamofdancing.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'campfire.php';
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
        <a href="images/projects/ferret-1.png" class="ot point">
            <img src="images/projects/ferret-1.png" class="pi in" alt="punk ferret illustraion" title="punk ferret illustration">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/ferret-2.png" class="ot point">
            <img src="images/projects/ferret-2.png" class="pi in" alt="punk ferret illustraion" title="punk ferret illustration">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="everynightidreamofdancing.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Every Night I Dream of Dancing</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="campfire.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Campfire ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>