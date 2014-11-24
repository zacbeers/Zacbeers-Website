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
                        window.location.replace("photography-after.php");
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
                <p class="title bt wt">breakfast photoshoot</p>
                <p class="wt">personal photography</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-3-1.png" class="ot point">
                    <img src="images/projects/photography-3-1.png" class="pi in" alt="young boy picture" title="young boy picture">
                </a>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">I spent Easter morning with my friend and his family as we ate at Mimi's Cafe. Of course, I brought along my camera.</p>

            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-3-2.png" class="ot point">
                    <img src="images/projects/photography-3-2.png" class="pi in" alt="chewing food image" title="chewing food image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-3-3.png" class="ot point">
                    <img src="images/projects/photography-3-3.png" class="pi in" alt="baby portait photography" title="baby portrait photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/photography-3-4.png" class="ot point">
                    <img src="images/projects/photography-3-4.png" class="pi in" alt="child high five photo" title="child high five photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-3-5.png" class="ot point">
                    <img src="images/projects/photography-3-5.png" class="pi in" alt="young boy picture" title="young boy picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section6">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-3-6.png" class="ot point">
                    <img src="images/projects/photography-3-6.png" class="pi in" alt="suprised child image" title="suprised child image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section7">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-3-7.png" class="ot point">
                    <img src="images/projects/photography-3-7.png" class="pi in" alt="baby portait photography" title="baby portrait photography">
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
