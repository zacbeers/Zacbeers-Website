<!--header-->
<?php $title = '25 Steps - Animation'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'cardealershipsoftware.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'idrive.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Motion graphic lyrics video commissioned by the band The Indecent.</p>
    </div>
    <div class="box3 in ct mt">
        <iframe width="560" height="315" src="//www.youtube.com/embed/0E_b7CKl1rw?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/25steps-1.png" class="ot point">
            <img src="images/projects/25steps-1.png" class="pi in" alt="car dealership software mobile friendly responsive website" title="car dealership software mobile friendly responsive website">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/25steps-2.png" class="ot point">
            <img src="images/projects/25steps-2.png" class="pi in" alt="car dealership software mobile friendly responsive website" title="car dealership software mobile friendly responsive website">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="cardealershipsoftware.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Car Dealership Software</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="idrive.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - iDrive Autohaus ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>