<?php
require_once 'header.php';
?>
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
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'image 4', 'image 5', 'see more']
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
                    var url      = window.location.href; 
                    if (url.indexOf("page6") > -1) {
                        window.location.replace("design-after.php");
                        $(".content").fadeOut();
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
                <p class="title bt wt">pass auto sales</p>
                <p class="wt">web design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-3-1.png" class="ot point">
                    <img src="images/projects/design-3-1.png" class="pi in">
                </a>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">the final of many web designs I did for Pass Auto Sales. with only a vague idea of their website in mind, it took a few tries before we were able to settle on this design. the main points of interest for the client was to have the site really pop out at you. they wanted a very in-your-face design that users would not be able to ignore. i must say, this design definitely accomplishes that.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-3-2.png" class="ot point">
                    <img src="images/projects/design-3-2.png" class="pi in">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt"></p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-3-3.png" class="ot point">
                    <img src="images/projects/design-3-3.png" class="pi in">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">logo design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-3-4.png" class="ot point">
                    <img src="images/projects/design-3-4.png" class="pi in">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt"></p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-3-5.png" class="ot point">
                    <img src="images/projects/design-3-5.png" class="pi in">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section6">
            <div class="box1 ct">
        <div class="box3 vb1 in">
            <p class="title2 bt wt lt">see more work:</p>
        </div>
    </div>
<?php
require_once 'work-buttons.php';
echo '</div>';
?>
	    </div>
	</div>
</body>
</html>