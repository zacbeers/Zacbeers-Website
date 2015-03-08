<!--header-->
<?php $title = 'Breakfast Photoshoot - Photography'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'idrive.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'passauto.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">I spent Easter morning with my friend and his family as we ate at Mimi's Cafe. Of course, I brought along my camera.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/breakfast-1.png" class="ot point">
            <img src="images/projects/breakfast-1.png" class="pi in" alt="young boy picture" title="young boy picture">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/breakfast-2.png" class="ot point">
            <img src="images/projects/breakfast-2.png" class="pi in" alt="chewing food image" title="chewing food image">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/breakfast-3.png" class="ot point">
            <img src="images/projects/breakfast-3.png" class="pi in" alt="baby portait photography" title="baby portrait photography">
        </a>
    </div>
<!--image 4-->
    <div class="box3 in ct mt">
        <a href="images/projects/breakfast-4.png" class="ot point">
            <img src="images/projects/breakfast-4.png" class="pi in" alt="child high five photo" title="child high five photo">
        </a>
    </div>
<!--image 5-->
    <div class="box3 in ct mt">
        <a href="images/projects/breakfast-5.png" class="ot point">
            <img src="images/projects/breakfast-5.png" class="pi in" alt="young boy picture" title="young boy picture">
        </a>
    </div>
<!--image 6-->
    <div class="box3 in ct mt">
        <a href="images/projects/breakfast-6.png" class="ot point">
            <img src="images/projects/breakfast-6.png" class="pi in" alt="suprised child image" title="suprised child image">
        </a>
    </div>
<!--image 7-->
    <div class="box3 in ct mt">
        <a href="images/projects/breakfast-7.png" class="ot point">
            <img src="images/projects/breakfast-7.png" class="pi in" alt="baby portait photography" title="baby portrait photography">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="idrive.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - iDrive Autohaus</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="passauto.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Pass Auto Sales ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>