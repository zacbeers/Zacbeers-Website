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
	    		anchors: ['page1', 'page2', 'page3', 'page4'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'see more']
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
                    if (url.indexOf("page4") > -1) {
                        window.location.replace("design-after.php");
                    }
			    }
			});
	    });
    </script>
	<div id="pagepiling">
	    <div class="section dg ct" id="section1">
            <div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="title bt wt">my fni manager</p>
                <p class="wt">website design and back end development</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-7-1.png" class="ot point">
                    <img src="images/projects/design-7-1.png" class="pi in" alt="my fni manager final web design" title="my fni manager final web design">
                </a>
                <?php include_once 'includes/modules/arrow-down-small.php'; ?>
            </div>
	    </div>
	    <div class="section dg ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">built with a mobile first responsive approach.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-7-2.png" class="ot point">
                    <img src="images/projects/design-7-2.png" class="pi in" alt="my fni manager mobile friendly responsive website" title="my fni manager mobile friendly responsive website">
                </a>
            </div>
	    </div>
        <div class="section dg ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt"></p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-7-3.png" class="ot point">
                    <img src="images/projects/design-7-3.png" class="pi in" alt="my fni manager web design" title="my fni manager web design">
                </a>
            </div>
	    </div>
	    <div class="section dg ct" id="section4">
            <div class="box1 ct">
                <div class="box3 vb1 in">
                    <p class="title2 bt wt lt">see more work:</p>
                </div>
            </div>
            <?php include_once 'includes/modules/work-buttons.php'; ?>
        </div>
    </div>
