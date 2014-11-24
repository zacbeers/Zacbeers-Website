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
                    var url      = window.location.href; 
                    if (url.indexOf("page4") > -1) {
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
                <p class="title bt wt">indecent</p>
                <p class="wt">promotional art for the band, <a href="https://www.facebook.com/theindecent" class="ot point" target="_blank">The Indecent</a>. these were done just before the release of their lyrics video i did, which you can see <a href="indecentvideo.php" class="ot point">here</a>.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/illustration-2-1.png" class="ot point">
                    <img src="images/projects/illustration-2-1.png" class="pi in" alt="the indecent final promotional illustration" title="the indecent final promotional illustration">
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
                <a href="images/projects/illustration-2-2.png" class="ot point">
                    <img src="images/projects/illustration-2-2.png" class="pi in" alt="the indecent band member sketch" title="the indecent band member sketch">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/illustration-2-3.png" class="ot point">
                    <img src="images/projects/illustration-2-3.png" class="pi in" alt="the indecent band member sketch" title="the indecent band member sketch">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section4">
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
