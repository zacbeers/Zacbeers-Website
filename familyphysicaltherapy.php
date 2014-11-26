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
	    		anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'image 4', 'see more']
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
                    if (url.indexOf("page5") > -1) {
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
                <p class="title bt wt">family physical therapy</p>
                <p class="wt">web design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-9-1.png" class="ot point">
                    <img src="images/projects/design-9-1.png" class="pi in" alt="family physical therapy final web design" title="family physical therapy final web design">
                </a>
                <?php include_once 'includes/modules/arrow-down-small.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">Family Physical Therapy is a clinic located in Waterbury, Vermont. They needed an exciting web presence that would help patients learn about their practice.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-9.png" class="ot point" alt="family physical therapy mobile friendly responsive website" title="family physical therapy mobile friendly responsive website">
                    <img src="images/projects/design-9.png" class="pi in">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">The client wanted to create a strong "above the fold" homepage, where you can see everything you need without having to scroll down too far. With this design most pages are only a single click away.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-9-2.png" class="ot point">
                    <img src="images/projects/design-9-2.png" class="pi in" alt="family physical therapy web design above the fold example" title="family physical therapy web design above the fold example">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">There was a lot of information to include on the website, and much more to come in the future. For this reason the site was build on the Wordpress platform, to make editing and adding new text quick and simple.</p>
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/design-9-3.png" class="ot point">
                    <img src="images/projects/design-9-3.png" class="pi in" alt="family physical therapy easy to use with wordpress" title="family physical therapy easy to use with wordpress">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section5">
            <div class="box1 ct">
                <div class="box3 vb1 in">
                    <p class="title2 bt wt lt">see more work:</p>
                </div>
            </div>
            <?php include_once 'includes/modules/work-buttons.php'; ?>
        </div>
    </div>
