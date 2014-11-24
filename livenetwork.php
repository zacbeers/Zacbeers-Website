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
	          	direction: 'horizontal',
	    		menu: '#menu',
	    		anchors: ['page1', 'page2', 'page3', 'page4'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['video 1', 'image', 'video 2', 'see more']
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
                        window.location.replace("videos-after.php");
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
                <p class="title bt wt">live network</p>
                <p class="wt">concept background done for a small educational music video company. The idea was to create a set of music videos teaching people the dangers, and prevention of Hiv and Aids.</p>
            </div>
            <div class="box3 in ct">
                <iframe width="560" height="315" src="//www.youtube.com/embed/9Rw51L-nMmI?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
        <div class="section wood ct" id="section2">
            <div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">character design</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/video-4-1.png" class="ot point">
                    <img src="images/projects/video-4-1.png" class="pi in" alt="live network character design illustration" title="live network character design illustration">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
            <div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">animatic</p>
            </div>
            <div class="box3 in ct">
                <iframe width="560" height="315" src="//www.youtube.com/embed/dF5pcisPyU0?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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
