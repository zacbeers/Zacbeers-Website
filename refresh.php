<!--header-->
<?php $title = 'Refresh Theme - Web Design'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'dogpark.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'coldmorning.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Website theme design for use with Dealerclick Software.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/refresh-1.png" class="ot point">
            <img src="images/projects/refresh-1.png" class="pi in" alt="refresh theme final web design" title="refresh theme final web design">
        </a>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">The first of many themes I built for Dealerclick, this is what helped begin their shift to mobile friendly design.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/refresh-2.png" class="ot point">
            <img src="images/projects/refresh-2.png" class="pi in" alt="refresh theme mobile friendly responsive website" title="refresh theme mobile friendly responsive website">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/refresh-3.png" class="ot point">
            <img src="images/projects/refresh-3.png" class="pi in" alt="refresh theme about us page example" title="refresh theme about us page example">
        </a>
    </div>
<!--image 4-->
    <div class="box3 in ct mt">
        <a href="images/projects/refresh-4.png" class="ot point">
            <img src="images/projects/refresh-4.png" class="pi in" alt="refresh theme footer options" title="refresh theme footer options">
        </a>
    </div>
<!--image 5-->
    <div class="box3 in ct mt">
        <a href="images/projects/refresh-5.png" class="ot point">
            <img src="images/projects/refresh-5.png" class="pi in" alt="refresh theme browse inventory design" title="refresh theme browse inventory design">
        </a>
    </div>
<!--image 6-->
    <div class="box3 in ct mt">
        <a href="images/projects/refresh-6.png" class="ot point">
            <img src="images/projects/refresh-6.png" class="pi in" alt="refresh theme contact us page design" title="refresh theme contact us page design">
        </a>
    </div>
<!--image 7-->
    <div class="box3 in ct mt">
        <a href="images/projects/refresh-7.png" class="ot point">
            <img src="images/projects/refresh-7.png" class="pi in" alt="refresh theme web design" title="refresh theme web design">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="dogpark.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - A Day at the Dog Park</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="coldmorning.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Cold Morning Collection ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>