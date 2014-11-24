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
                    var url      = window.location.href; 
                    if (url.indexOf("page10") > -1) {
                        window.location.replace("illustration-after.php");
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
                <p class="title bt wt">anatomy</p>
                <p class="wt">illustration practice</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/illustration-1-1.png" class="ot point">
                    <img src="images/projects/illustration-1-1.png" class="pi in" alt="life study illustration" title="life study illustration">
                </a>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/illustration-1-2.png" class="ot point">
                    <img src="images/projects/illustration-1-2.png" class="pi in" alt="crouching stance anatomy practice" title="crouching stance anatomy practice">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/illustration-1-3.png" class="ot point">
                    <img src="images/projects/illustration-1-3.png" class="pi in" alt="standing and bending over male anatomy illustrations" title="standing and bending over male anatomy illustrations">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/illustration-1-4.png" class="ot point">
                    <img src="images/projects/illustration-1-4.png" class="pi in" alt="human male anatomy practice" title="human male anatomy practice">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/illustration-1-5.png" class="ot point">
                    <img src="images/projects/illustration-1-5.png" class="pi in" alt="gesture drawings from life" title="gesture drawings from life">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section6">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/illustration-1-6.png" class="ot point">
                    <img src="images/projects/illustration-1-6.png" class="pi in" alt="sketching legs for anatomy practice" title="sketching legs for anatomy practice">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section7">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/illustration-1-7.png" class="ot point">
                    <img src="images/projects/illustration-1-7.png" class="pi in" alt="male form human anatomy practice" title="male form human anatomy practice">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section8">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/illustration-1-8.png" class="ot point">
                    <img src="images/projects/illustration-1-8.png" class="pi in" alt="facial expresions example" title="facial expressions example">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section9">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/illustration-1-9.png" class="ot point">
                    <img src="images/projects/illustration-1-9.png" class="pi in" alt="practicing hands and fingers illustration" title="practicing hands and fingers illustration">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section10">
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
