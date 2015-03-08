<!--header-->
<?php $title = 'Lilly Physical Therapy - Rebranding'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'campfire.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'familyphysicaltherapy.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">The design went through many different stages before completion.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/lilly-1.png" class="ot point">
            <img src="images/projects/lilly-1.png" class="pi in" alt="lilly physical therapy final logo design" title="lilly physical therapy final logo design">
        </a>
    </div>
<!--image 2-->
    <div class="box3 ct in mt">
        <p class="wt">We also played with the idea of animating the logos, this helped to define the personality of the brand better than one static image. These were the three motion graphics I came up with. </p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/lilly-5.gif" class="ot point" alt="lilly physical therapy logo design process" title="lilly physical therapy logo design process">
            <img src="images/projects/lilly-2.gif" class="pi in">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/lilly-6.gif" class="ot point" alt="lilly physical therapy logo design process" title="lilly physical therapy logo design process">
            <img src="images/projects/lilly-3.gif" class="pi in">
        </a>
    </div>
<!--image 4-->

    <div class="box3 in ct mt">
        <a href="images/projects/lilly-7.gif" class="ot point" alt="lilly physical therapy logo design process" title="lilly physical therapy logo design process">
            <img src="images/projects/lilly-4.gif" class="pi in">
        </a>
    </div>
<!--image 5-->
    <div class="box3 ct in mt">
        <p class="wt">In the end they decided they liked both the first and third designs. The final version was designed to be a mix of both directions.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/lilly-8.png" class="ot point" alt="lilly physical therapy final logo design" title="lilly physical therapy final logo design">
            <img src="images/projects/lilly-8.png" class="pi in">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="campfire.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Campfire</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="familyphysicaltherapy.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Family Physical Therapy ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>