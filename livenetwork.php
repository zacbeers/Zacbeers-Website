<!--header-->
<?php $title = 'Live Network - Animation'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'fnimanager.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'uscarzz.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">Concept background done for a small educational music video company. The idea was to create a set of music videos teaching people the dangers, and prevention of Hiv and Aids.</p>
    </div>
    <div class="box3 in ct mt">
        <iframe width="560" height="315" src="//www.youtube.com/embed/9Rw51L-nMmI?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">Character Design</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/livenetwork-1.png" class="ot point">
            <img src="images/projects/livenetwork-1.png" class="pi in" alt="harlem shake video still" title="harlem shake video still">
        </a>
    </div>
<!--image 3-->
    <div class="box2 ct in mt">
        <p class="wt">Animatic</p>
    </div>
    <div class="box3 in ct mt">
        <iframe width="560" height="315" src="//www.youtube.com/embed/dF5pcisPyU0?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="nitw.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - FNI Manager</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="uscarzz.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - USCarzz ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>