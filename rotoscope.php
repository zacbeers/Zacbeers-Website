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
                        window.location.replace("illustration-after.php");
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
                <p class="title bt wt">rotoscope</p>
                <p class="wt">animated music video for <a href="https://www.youtube.com/user/songstowearpantsto" class="ot point" target="_blank">Andrew Huang</a></p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/illustration-7-1.gif" class="ot point">
                    <img src="images/projects/illustration-7-1.gif" class="pi in" alt="andrew huang final animation" title="andrew huang final animation">
                </a>
                <?php include_once 'includes/modules/arrow-down-small.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">in collaboration with many artists around the world we each took a small portion of the video to animate, later to be pieced together by Andrew.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/illustration-7-2.png" class="ot point">
                    <img src="images/projects/illustration-7-2.png" class="pi in" alt="andrew huang animation frames" title="andrew huang animation frames">
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
