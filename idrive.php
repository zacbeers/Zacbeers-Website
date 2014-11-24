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
                <p class="title bt wt">idrive autohaus</p>
                <p class="wt">web design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-4-1.png" class="ot point">
                    <img src="images/projects/design-4-1.png" class="pi in" alt="idrive autohaus final web design" title="idrive autohaus final web design">
                </a>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">the website obviously had to be mobile friendly.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-4-2.png" class="ot point">
                    <img src="images/projects/design-4-2.png" class="pi in" alt="idrive autohaus mobile friendly responsive website" title="idrive autohaus mobile friendly responsive website">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">logo design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-4-3.png" class="ot point">
                    <img src="images/projects/design-4-3.png" class="pi in" alt="idrive autohaus profesional logo design" title="idrive autohaus profesional logo design">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">additional logo design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-4-4.png" class="ot point">
                    <img src="images/projects/design-4-4.png" class="pi in" alt="idrive autohaus additional logo design" title="idrive autohaus additional logo design">
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
                <a href="images/projects/design-4-5.png" class="ot point">
                    <img src="images/projects/design-4-5.png" class="pi in" alt="idrive autohaus web design" title="idrive autohaus web design">
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