<!--header-->
<?php $title = 'Pass Auto Sales - Redesign'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'breakfast.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'sleepy.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">The final of many rebranding efforts I did for Pass Auto Sales. With only a vague idea of their website in mind, it took a few tries before we were able to settle on this design. The main points of interest for the client was to have the site really pop out at you. They wanted a very in-your-face design that users would not be able to ignore. Without a doubt, this design accomplishes that.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/passauto-1.png" class="ot point">
            <img src="images/projects/passauto-1.png" class="pi in">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/passauto-2.png" class="ot point">
            <img src="images/projects/passauto-2.png" class="pi in">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/passauto-3.png" class="ot point">
            <img src="images/projects/passauto-3.png" class="pi in">
        </a>
    </div>
<!--image 4-->
    <div class="box3 ct in mt">
        <p class="wt">The logo needed a fresh coat of paint as well. The redesigned vector logo ensures high readability, no matter the size.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/passauto-4.png" class="ot point">
            <img src="images/projects/passauto-4.png" class="pi in">
        </a>
    </div>
<!--image 5-->
    <div class="box3 in ct mt">
        <a href="images/projects/passauto-5.png" class="ot point">
            <img src="images/projects/passauto-5.png" class="pi in">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="breakfast.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Breakfast Photoshoot</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="sleepy.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Sleepy ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>