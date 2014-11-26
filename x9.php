<!--header-->
<?php require_once 'includes/modules/header.php'; ?>
    <style>
        html, body {
            overflow: hidden;
        }
        #header {
            top: -120;
        }
    </style>
	<script type="text/javascript" src="scripts/jquery.pagepiling.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			* Plugin intialization
			*/
	    	$('#pagepiling').pagepiling({
	          	direction: 'vertical',
	    		menu: '#menu',
	    		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'image 4', 'text', 'see more']
			   	},
			    afterRender: function(){
			    	$('#pp-nav').addClass('custom');
			    },
			    afterLoad: function(anchorLink, index){
			    	if(index>1){
			    		$('#pp-nav').removeClass('custom');
			    	}else{
			    		$('#pp-nav').addClass('custom');
			    	}
                    var url = window.location.href; 
                    if (url.indexOf("page6") > -1) {
                        window.location.replace("photography-after.php");
                    }
			    }
			});
	    });
    </script>
	<div id="pagepiling">
	    <div class="section wood ct" id="section1">
            <div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="title bt wt">x9</p>
                <p class="wt">personal photography</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-4-1.png" class="ot point">
                    <img src="images/projects/photography-4-1.png" class="pi in" alt="photo portrait at the beach" title="photo portrait at the beach">
                    <?php include_once 'includes/modules/arrow-down-small.php'; ?>
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-4-2.png" class="ot point">
                    <img src="images/projects/photography-4-2.png" class="pi in" alt="calm bird at the beach photography" title="calm bird at the beach photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-4-3.png" class="ot point">
                    <img src="images/projects/photography-4-3.png" class="pi in" alt="driving at night pictures" title="driving at night pictures">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/photography-4-4.png" class="ot point">
                    <img src="images/projects/photography-4-4.png" class="pi in" alt="driving at night image" title="driving at night image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <p class="wt">If pop culture was so definable, so easily identifiable, like a pattern.  Like plaid, or maybe stripes.  Let it be sold in stores, like the patterns on duct tape.  Let us wrap ourselves up in the sticky sheets for protection.  The fibers on the edges torn, but still adhering.  We will wrap up every spot on our bodies, blocking out our virgin skin from the outside world.  Don't let the sunlight hit it.  Cover ourselves so completely in the tape, but only the best patterns.  The most expensive ones, the first ones to sell out.  If you want it, I do too.  Let me wear the same patterns as my peers, in fact, let the whole world come together in the same pattern.  If you could see us from space we would no longer be separate people, but instead one giant strip of patterned duct tape.  We could all move together.  There would never be the hesitant moment of recognition before acknowledgement, no, we would not acknowledge each other at all.  We would continue on alone, together, unknown.  A perfect disguise, we all wear the same one.  Please don't take notice of me.  </p>
            </div>
	    </div>
	    <div class="section wood ct" id="section6">
            <div class="box1 ct">
                <div class="box3 vb1 in">
                    <p class="title2 bt wt lt">see more work:</p>
                </div>
            </div>
            <?php include_once 'includes/modules/work-buttons.php'; ?>
        </div>
    </div>
