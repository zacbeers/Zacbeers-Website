<!--header-->
<?php $title = 'X9 - Photography'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'familyphysicaltherapy.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'nitw.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">If pop culture was so definable, so easily identifiable, like a pattern.  Like plaid, or maybe stripes.  Let it be sold in stores, like the patterns on duct tape.  Let us wrap ourselves up in the sticky sheets for protection.  The fibers on the edges torn, but still adhering.  We will wrap up every spot on our bodies, blocking out our virgin skin from the outside world.  Don't let the sunlight hit it.  Cover ourselves so completely in the tape, but only the best patterns.  The most expensive ones, the first ones to sell out.  If you want it, I do too.  Let me wear the same patterns as my piers, in fact, let the whole world come together in the same pattern.  If you could see us from space we would no longer be separate people, but instead one giant strip of patterned duct tape.  We could all move together.  There would never be the hesitant moment of recognition before acknowledgement, no, we would not acknowledge each other at all.  We would continue on alone, together, unknown.  A perfect disguise, we all wear the same one.  Please don't take notice of me. </p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/x9-1.png" class="ot point">
            <img src="images/projects/x9-1.png" class="pi in" alt="photo portrait at the beach" title="photo portrait at the beach">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/x9-2.png" class="ot point">
            <img src="images/projects/x9-2.png" class="pi in" alt="calm bird at the beach photography" title="calm bird at the beach photography">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/x9-3.png" class="ot point">
            <img src="images/projects/x9-3.png" class="pi in" alt="driving at night pictures" title="driving at night pictures">
        </a>
    </div>
<!--image 4-->
    <div class="box3 in ct mt">
        <a href="images/projects/x9-4.png" class="ot point">
            <img src="images/projects/x9-4.png" class="pi in" alt="driving at night image" title="driving at night image">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="familyphysicaltherapy.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Family Physical Therapy</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="nitw.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Night in the Woods ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>