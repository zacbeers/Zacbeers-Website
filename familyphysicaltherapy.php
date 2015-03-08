<!--header-->
<?php $title = 'Family Physical Therapy - Animation'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'lilly.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'x9.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Family Physical Therapy is a clinic located in Waterbury, Vermont. They needed an exciting web presence that would help patients learn about their practice.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/familypt-1.png" class="ot point">
            <img src="images/projects/familypt-1.png" class="pi in" alt="family physical therapy final web design" title="family physical therapy final web design">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/familypt-2.png" class="ot point">
            <img src="images/projects/familypt-2.png" class="pi in" alt="family physical therapy mobile friendly responsive web design" title="family physical therapy mobile friendly responsive web design">
        </a>
    </div>
<!--image 3-->
    <div class="box2 ct in mt">
        <p class="wt">
The client wanted to create a strong "above the fold" homepage, where you can see everything you need without having to scroll down too far. With this design most pages are only a single click away.
</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/familypt-3.png" class="ot point">
            <img src="images/projects/familypt-3.png" class="pi in" alt="family physical therapy web design above the fold example" title="family physical therapy web design above the fold example">
        </a>
    </div>
<!--image 4-->
    <div class="box2 ct in mt">
        <p class="wt">
There was a lot of information to include on the website, and much more to come in the future. For this reason the site was build on the Wordpress platform, to make editing and adding new text quick and simple.
</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/familypt-4.png" class="ot point">
            <img src="images/projects/familypt-4.png" class="pi in" alt="family physical therapy easy to use with wordpress" title="family physical therapy easy to use with wordpress">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="november.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Lilly</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="ferret.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - X9 ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>