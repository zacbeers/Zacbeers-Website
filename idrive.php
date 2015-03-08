<!--header-->
<?php $title = 'iDrive Autohaus - Web Design'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = '25steps.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'breakfast.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">We took a slightly different aproach to this design. The client knew what features needed to be included, but was much less concerned with precicly how they were implimented. Instead the client was focused on the overall feeling customers would get from the site. Ux over Ui. We spent a considerable amount of time going over other sites that they liked, particularly a few high end watch sites and apple.com
The final design is one that aims to look sharp and glossy, but at the same time remains inviting. </p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/idrive-1.png" class="ot point">
            <img src="images/projects/idrive-1.png" class="pi in" alt="idrive autohaus final web design" title="idrive autohaus final web design">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/idrive-2.png" class="ot point">
            <img src="images/projects/idrive-2.png" class="pi in" alt="idrive autohaus mobile friendly responsive website" title="idrive autohaus mobile friendly responsive website">
        </a>
    </div>
<!--image 3-->
    <div class="box2 ct in mt">
        <p class="wt">The logo needed a fresh coat of paint as well.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/idrive-3.png" class="ot point">
            <img src="images/projects/idrive-3.png" class="pi in" alt="idrive autohaus profesional logo design" title="idrive autohaus profesional logo design">
        </a>
    </div>
<!--image 4-->
    <div class="box3 in ct mt">
        <a href="images/projects/idrive-4.png" class="ot point">
            <img src="images/projects/idrive-4.png" class="pi in" alt="idrive autohaus additional logo design" title="idrive autohaus additional logo design">
        </a>
    </div>
<!--image 5-->
    <div class="box3 in ct mt">
        <a href="images/projects/idrive-5.png" class="ot point">
            <img src="images/projects/idrive-5.png" class="pi in" alt="idrive autohaus web design" title="idrive autohaus web design">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="25steps.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - 25 Steps</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="breakfast.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Breakfast Photoshoot ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>