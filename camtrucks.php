<!--header-->
<?php $title = 'Cam Trucks - Web Design'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'sleepy.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'dogpark.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">This was a full redesign and update for Cam Trucks. Their previous site was outdated, and didn't scale well on mobile devices. </p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/camtrucks-1.png" class="ot point">
            <img src="images/projects/camtrucks-1.png" class="pi in" alt="cam trucks final web design" title="cam trucks final web design">
        </a>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">The site was rebuilt from the ground up to ensure that it would look great across all platforms. Helping to bring them fully into the digital age, new php forms were added to the website, eliminating the need for customers to fax over personal information. </p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/camtrucks-2.png" class="ot point">
            <img src="images/projects/camtrucks-2.png" class="pi in" alt="mobile first approach" title="mobile first approach">
        </a>
    </div>
<!--image 3-->
    <div class="box2 ct in mt">
        <p class="wt">Helping to bring them fully into the digital age, new php forms were added to the website, eliminating the need for customers to fax over personal information. </p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/camtrucks-3.png" class="ot point">
            <img src="images/projects/camtrucks-3.png" class="pi in" alt="modern forms" title="modern form">
        </a>
    </div>
<!--image 4-->
    <div class="box3 in ct mt">
        <a href="images/projects/camtrucks-4.png" class="ot point">
            <img src="images/projects/camtrucks-4.png" class="pi in" alt="specials" title="specials">
        </a>
    </div>
<!--image 5-->
    <div class="box3 in ct mt">
        <a href="images/projects/camtrucks-5.png" class="ot point">
            <img src="images/projects/camtrucks-5.png" class="pi in" alt="cam trucks website design" title="cam trucks website design">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="sleepy.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Sleepy</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="dogpark.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - A Day at the Dog Park ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>