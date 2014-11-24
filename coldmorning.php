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
	    		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8', 'page9', 'page10', 'page11', 'page12', 'page13', 'page14', 'page15', 'page16'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'image 4', 'image 5', 'image 6', 'image 7', 'image 8', 'image 9', 'image 10', 'image 11', 'image 12', 'image 13', 'image 14', 'image 15', 'see more']
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
                    if (url.indexOf("page16") > -1) {
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
                <p class="title bt wt">cold morning collection</p>
                <p class="wt">personal photography</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-1.png" class="ot point">
                    <img src="images/projects/photography-1-1.png" class="pi in" alt="truck double exposure photography" title="truck double exposure photography">
                </a>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">This collection was created as a timestamp on the date it was created, early February. The abstract images, and washed out colors are used to illustrate the feeling of the end of winter.</p>

            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-2.png" class="ot point">
                    <img src="images/projects/photography-1-2.png" class="pi in" alt="abstract streetlights photos" title="abstract streetlights photos">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-3.png" class="ot point">
                    <img src="images/projects/photography-1-3.png" class="pi in" alt="icy landscape image" title="icy landscape image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/photography-1-4.png" class="ot point">
                    <img src="images/projects/photography-1-4.png" class="pi in" alt="cars experimental picture" title="cars experimental picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-5.png" class="ot point">
                    <img src="images/projects/photography-1-5.png" class="pi in" alt="cold wet photography" title="cold wet photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section6">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-6.png" class="ot point">
                    <img src="images/projects/photography-1-6.png" class="pi in" alt="vehicle pov photo" title="vehicle pov photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section7">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-7.png" class="ot point">
                    <img src="images/projects/photography-1-7.png" class="pi in" alt="abstract sky image" title="abstract sky image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section8">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-8.png" class="ot point">
                    <img src="images/projects/photography-1-8.png" class="pi in" alt="smog landscape california morning" title="smog landscape california morning">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section9">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-9.png" class="ot point">
                    <img src="images/projects/photography-1-9.png" class="pi in" alt="double exposure telephone poles picture" title="double exposure telephone poles picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section10">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-10.png" class="ot point">
                    <img src="images/projects/photography-1-10.png" class="pi in" alt="morning sunrise golden photography" title="morning sunrise golden photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section11">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-11.png" class="ot point">
                    <img src="images/projects/photography-1-11.png" class="pi in" alt="abstract blue image" title="abstract blue image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section12">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-12.png" class="ot point">
                    <img src="images/projects/photography-1-12.png" class="pi in" alt="cluttered mirror photo" title="cluttered mirror photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section13">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-13.png" class="ot point">
                    <img src="images/projects/photography-1-13.png" class="pi in" alt="double exposure street signs picture" title="double exposure street signs picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section14">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-14.png" class="ot point">
                    <img src="images/projects/photography-1-14.png" class="pi in" alt="morning sunrise photography" title="morning sunrise photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section15">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-1-15.png" class="ot point">
                    <img src="images/projects/photography-1-15.png" class="pi in" alt="cold abstract images" title="cold abstract images">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section16">
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
