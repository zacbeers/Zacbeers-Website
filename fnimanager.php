<!--header-->
<?php $title = 'FNI Manager - Web Development'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'harlemshake.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'livenetwork.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Frontend Design and ASP.net development. Login and registration for car dealerships to use to manage their inventory and finances.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/fni-1.png" class="ot point">
            <img src="images/projects/fni-1.png" class="pi in" alt="fni manager final web design" title="fni manager final web design">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/fni-2.png" class="ot point">
            <img src="images/projects/fni-2.png" class="pi in" alt="fni manager mobile friendly responsive website" title="fni manager mobile friendly responsive website">
        </a>
    </div>
<!--image 3-->
    <div class="box3 ct in mt">
        <p class="wt">The bright orange call-to-actions in the design were chosen to stand out warm and inviting. This design helps to make the chore of managing your finances much more enjoyable by intuitivly guiding you through your work.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/fni-3.png" class="ot point">
            <img src="images/projects/fni-3.png" class="pi in" alt="fni manager about us webpage example" title="fni manager about us webpage example">
        </a>
    </div>
<!--image 3-->
    <div class="box3 ct in mt">
    <p class="wt">Heavy work was put into the search functionality on the pages listing out their cars to make it as easy as possible to pull up the information that they need.</p>
        </div>
    <div class="box3 in ct mt">
        <a href="images/projects/fni-4.png" class="ot point">
            <img src="images/projects/fni-4.png" class="pi in" alt="fni manager back end functionality" title="fni manager back end functionality">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/fni-5.png" class="ot point">
            <img src="images/projects/fni-5.png" class="pi in" alt="fni manager detailed information on each vehicle" title="fni manager detailed information on each vehicle">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/fni-6.png" class="ot point">
            <img src="images/projects/fni-6.png" class="pi in" alt="fni manager no photos webpage example" title="fni manager no photos webpage example">
        </a>
    </div>
<!--image 3-->
    <div class="box3 ct in mt">
    <p class="wt">Two separate platforms were developed for the client, both utilizing the same framework. FNI Manager and My FNI Manager. It's essentially the two plans that they offer, each with slighly different services and prices. The visual look for the two sites needed to feel distictly different from each other, but still get across the same emotional empact and color scheme. </p>
        </div>
    <div class="box3 in ct mt">
        <a href="images/projects/fni-7.png" class="ot point">
            <img src="images/projects/fni-7.png" class="pi in" alt="fni manager web design" title="fni manager web design">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/fni-8.png" class="ot point">
            <img src="images/projects/fni-8.png" class="pi in" alt="my fni manager final web design" title="my fni manager final web design">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/fni-9.png" class="ot point">
            <img src="images/projects/fni-9.png" class="pi in" alt="my fni manager mobile friendly responsive website" title="my fni manager mobile friendly responsive website">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/fni-10.png" class="ot point">
            <img src="images/projects/fni-10.png" class="pi in" alt="my fni manager web design" title="my fni manager web design">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="harlemshake.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Harlem Shake</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="livenetwork.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Live Network ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>