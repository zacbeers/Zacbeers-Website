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
	    		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'image 4', 'image 5', 'image 6', 'image 7', 'see more']
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
                    if (url.indexOf("page8") > -1) {
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
                <p class="title bt wt">fni manager</p>
                <p class="wt">website design and back end development</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-8-1.png" class="ot point">
                    <img src="images/projects/design-8-1.png" class="pi in" alt="fni manager final web design" title="fni manager final web design">
                </a>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">built to work well on every device.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-8-2.png" class="ot point">
                    <img src="images/projects/design-8-2.png" class="pi in" alt="fni manager mobile friendly responsive website" title="fni manager mobile friendly responsive website">
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
                <a href="images/projects/design-8-3.png" class="ot point">
                    <img src="images/projects/design-8-3.png" class="pi in" alt="fni manager about us webpage example" title="fni manager about us webpage example">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">they can easily sort through all their data.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-8-4.png" class="ot point">
                    <img src="images/projects/design-8-4.png" class="pi in" alt="fni manager back end functionality" title="fni manager back end functionality">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">and display detailed information on each vehicle.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-8-5.png" class="ot point">
                    <img src="images/projects/design-8-5.png" class="pi in" alt="fni manager detailed information on each vehicle" title="fni manager detailed information on each vehicle">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section6">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt"></p>
            </div>
            <div clas="box3 in ct">
                <a href="images/projects/design-8-6.png" class="ot point">
                    <img src="images/projects/design-8-6.png" class="pi in" alt="fni manager no photos webpage example" title="fni manager no photos webpage example">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section7">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt"></p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-8-7.png" class="ot point">
                    <img src="images/projects/design-8-7.png" class="pi in" alt="fni manager web design" title="fni manager web design">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section8">
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
