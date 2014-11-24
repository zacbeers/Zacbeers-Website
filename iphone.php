<?php
require_once 'header.php';
?>
    <style>
        html, body {
            overflow: hidden;
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
			    }
			});
	    });
    </script>
	<div id="pagepiling">
	    <div class="section wood ct" id="section1">
            <div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="title bt wt">iPhone 3d model</p>
                <p class="wt">this was my first real attempt at 3d modeling. i'm sure that it's not the best iPhone model out there, but it was a really great way for me to learn to use this software. all of the modeling was done in <a href="http://www.blender.org" class="ot point" target="_blank">Blender</a>, and the texturing was done in Photoshop.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/labs/lab-1-1.gif" class="ot point">
                    <img src="images/labs/lab-1-1.gif" class="pi in" alt="iPhone 3d model" title="iPhone 3d model">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section2">
            <div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="title bt wt"></p>
                <p class="wt">the goal was to incooporate as much detail into the build as possible, while maintaining a fairly easy to work with model. the entire iPhone is one object, started from a single cube.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/labs/lab-1-2.gif" class="ot point">
                    <img src="images/labs/lab-1-2.gif" class="pi in" alt="iPhone 3d model" title="iPhone 3d model">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section3">
            <div class="box1 ct">
                <div class="box3 vb1 in">
                    <p class="title2 bt wt lt">download</p>
                    <p class="wt">all of the souce material used on this project is available to download below. feel free to use it for whatever you like.</p>
                </div>
                <div class="box1 vb1">
                    <div class="btn in o">
                        <a href="https://github.com/zacbeers/iPhone" target="_blank" class="point wt">
                            <p class="c">github</p>
                        </a>
                    </div>
                </div>
                <div class="box1 vb1 ct">
                    <a href="labs.php" class="point ot">< back to labs</a>
                </div>
            </div>
	    </div>
	</div>
</body>
</html>
