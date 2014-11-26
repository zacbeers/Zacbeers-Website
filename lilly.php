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
	    		anchors: ['page1', 'page2', 'page3'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'see more']
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
                    if (url.indexOf("page3") > -1) {
                        window.location.replace("design-after.php");
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
                <p class="title bt wt">lilly pt</p>
                <p class="wt">logo design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-10-1.png" class="ot point">
                    <img src="images/projects/design-10-1.png" class="pi in" alt="lilly physical therapy final logo design" title="lilly physical therapy final logo design">
                </a>
                <?php include_once 'includes/modules/arrow-down-small.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">The design went through many different stages before completion. In the end they decided they liked both the first and third designs. The final version was designed to be a mix of both directions. At one point there was a plan to animate the logos, you can click the following links to see what these looked like: <a href="images/projects/design-10-2.gif" class="ot point"> animation1</a>, <a href="images/projects/design-10-3.gif" class="ot point"> animation 2</a>, &amp; <a href="images/projects/design-10-4.gif" class="ot point"> animation 3</a></p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-10-2.png" class="ot point" alt="lilly physical therapy logo design process" title="lilly physicl therapy logo design process">
                    <img src="images/projects/design-10-2.png" class="pi in">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section3">
            <div class="box1 ct">
                <div class="box3 vb1 in">
                    <p class="title2 bt wt lt">see more work:</p>
                </div>
            </div>
            <?php include_once 'includes/modules/work-buttons.php'; ?>
        </div>
    </div>
