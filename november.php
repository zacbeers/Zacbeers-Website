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
	    		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8', 'page9', 'page10'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'image 4', 'image 5', 'image 6', 'image 7', 'image 8', 'image 9', 'see more']
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
                    if (url.indexOf("page10") > -1) {
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
                <p class="title bt wt">november</p>
                <p class="wt">personal photography</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-1.png" class="ot point">
                    <img src="images/projects/photography-5-1.png" class="pi in" alt="outside at night photography" title="outside at night photography">
                    <?php include_once 'includes/modules/arrow-down-small.php'; ?>
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">all work shot on 11/8/14</p>

            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-2.png" class="ot point">
                    <img src="images/projects/photography-5-2.png" class="pi in" alt="bokeh streetlight photos" title="bokeh streetlight photos">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-3.png" class="ot point">
                    <img src="images/projects/photography-5-3.png" class="pi in" alt="dark sifi car wash picture" title="dark sifi car wash picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/photography-5-4.png" class="ot point">
                    <img src="images/projects/photography-5-4.png" class="pi in" alt="freeway underpass image" title="freeway underpass image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-5.png" class="ot point">
                    <img src="images/projects/photography-5-5.png" class="pi in" alt="standing outide on the sidewalk picture" title="standing outside on the sidewalk picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section6">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-6.png" class="ot point">
                    <img src="images/projects/photography-5-6.png" class="pi in" alt="misty building at night photography" title="misty building at night photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section7">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-7.png" class="ot point">
                    <img src="images/projects/photography-5-7.png" class="pi in" alt="abandoned parking lot photos" title="abandoned parking lot photos">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section8">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-8.png" class="ot point">
                    <img src="images/projects/photography-5-8.png" class="pi in" alt="dark overgrown stairs image" title="dark overgrown stairs image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section9">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-5-9.png" class="ot point">
                    <img src="images/projects/photography-5-9.png" class="pi in" alt="outside at night photography" title="outside at night photography">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section10">
            <div class="box1 ct">
                <div class="box3 vb1 in">
                    <p class="title2 bt wt lt">see more work:</p>
                </div>
            </div>
            <?php include_once 'includes/modules/work-buttons.php'; ?>
        </div>
    </div>
