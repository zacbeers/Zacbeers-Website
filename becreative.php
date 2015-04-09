<!--header-->
<?php $title = 'BeCreative360 - Web Design'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'work.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'latenights.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">New year, new website. This redesign brought BeCreative360 back into the modern age.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-1.png" class="ot point">
            <img src="images/projects/becreative-1.png" class="pi in" alt="home page redesign" title="home page redesign">
        </a>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">The single page approach presents customers with everything they need right away.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-2.png" class="ot point">
            <img src="images/projects/becreative-2.png" class="pi in" alt="single page design" title="single page design">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-3.png" class="ot point">
            <img src="images/projects/becreative-3.png" class="pi in" alt="work samples portfolio" title="work samples portfolio">
        </a>
    </div>
<!--image 4-->
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-4.png" class="ot point">
            <img src="images/projects/becreative-4.png" class="pi in" alt="extensive client list" title="extensive client list">
        </a>
    </div>
<!--image 5-->
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-5.png" class="ot point">
            <img src="images/projects/becreative-5.png" class="pi in" alt="testimonials and reviews" title="testimonials and reviews">
        </a>
    </div>
<!--image 6-->
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-6.png" class="ot point">
            <img src="images/projects/becreative-6.png" class="pi in" alt="about the team" title="about the team">
        </a>
    </div>
<!--image 7-->
    <div class="box2 ct in mt">
        <p class="wt">Part of the redesign was a new email marketing campaign. They already had a system developed through Spot POS to send the letters, my job was to give them a glossy new finish.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-7.png" class="ot point">
            <img src="images/projects/becreative-7.png" class="pi in" alt="email marketing redesign" title="email marketing redesign">
        </a>
    </div>
<!--image 8-->
    <div class="box2 ct in mt">
        <p class="wt">In addition to all the promotional material, I also got a chance to build a few internal systems to enhance the team's productivity. One of which was an image sharing tool which would help both Customer Service and the Designers to keep customers photos organized.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-8.png" class="ot point">
            <img src="images/projects/becreative-8.png" class="pi in" alt="image upload tool" title="image upload tool">
        </a>
    </div>
<!--image 8-->
    <div class="box2 ct in mt">
        <p class="wt">The backend was build using my forte language, php, and allowed for uploading, downloading, re-ordering, and deleting image files.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/becreative-9.png" class="ot point">
            <img src="images/projects/becreative-9.png" class="pi in" alt="php based functionality" title="php based functionality">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="work.php" class="point wt" title="press LEFT on keyboard">
							<p class="c">< Back to All Projects</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="latenights.php" class="point wt" title="press RIGHT on keyboard">
							<p class="c">Next Project - Late Nights with Trav &amp; Los ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>
