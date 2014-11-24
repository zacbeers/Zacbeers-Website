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
	    		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8', 'page9', 'page10', 'page11', 'page12', 'page13', 'page14', 'page15', 'page16', 'page17', 'page18', 'page19', 'page20', 'page21', 'page22', 'page23', 'page24', 'page25', 'page26', 'page27', 'page28', 'page29', 'page30', 'page31'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image 1', 'image 2', 'image 3', 'image 4', 'image 5', 'image 6', 'image 7', 'image 8', 'image 9', 'image 10', 'image 11', 'image 12', 'image 13', 'image 14', 'image 15', 'image 16', 'image 17', 'image 18', 'image 19', 'image 20', 'image 21', 'image 22', 'image 23', 'image 24', 'image 25', 'image 26', 'image 27', 'image 28', 'image 29', 'image 30', 'see more']
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
                    if (url.indexOf("page31") > -1) {
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
                <p class="title bt wt">a day at the dog park</p>
                <p class="wt">personal photography</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-1.png" class="ot point">
                    <img src="images/projects/photography-2-1.png" class="pi in" alt="french bull dog photo" title="french bull dog photo">
                </a>
                <?php require_once 'arrow-down.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">Brought my camera along to shoot some photos of the dogs.</p>

            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-2.png" class="ot point">
                    <img src="images/projects/photography-2-2.png" class="pi in" alt="small animal photography" title="small animal photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-3.png" class="ot point">
                    <img src="images/projects/photography-2-3.png" class="pi in" alt="young girl portait picture" title="young girl portait picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/photography-2-4.png" class="ot point">
                    <img src="images/projects/photography-2-4.png" class="pi in" alt="teen girl and puppy image" title="teen girl and puppy image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-5.png" class="ot point">
                    <img src="images/projects/photography-2-5.png" class="pi in" alt="panting dog photo" title="panting dog photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section6">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-6.png" class="ot point">
                    <img src="images/projects/photography-2-6.png" class="pi in" alt="happy puppy photography" title="happy puppy photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section7">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-7.png" class="ot point">
                    <img src="images/projects/photography-2-7.png" class="pi in" alt="french bull dog picture" title="french bull dog picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section8">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-8.png" class="ot point">
                    <img src="images/projects/photography-2-8.png" class="pi in" alt="black dog image" title="black dog image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section9">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-9.png" class="ot point">
                    <img src="images/projects/photography-2-9.png" class="pi in" alt="female portrait photography" title="female portrait photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section10">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-10.png" class="ot point">
                    <img src="images/projects/photography-2-10.png" class="pi in" alt="introspective girl picture" title="introspective girl picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section11">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-11.png" class="ot point">
                    <img src="images/projects/photography-2-11.png" class="pi in" alt="smiling dog photo" title="smiling dog photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section12">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-12.png" class="ot point">
                    <img src="images/projects/photography-2-12.png" class="pi in" alt="girl and two dogs image" title="girl and two dogs image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section13">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-13.png" class="ot point">
                    <img src="images/projects/photography-2-13.png" class="pi in" alt="dogs drinking water picure" title="dogs drinking water picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section14">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-14.png" class="ot point">
                    <img src="images/projects/photography-2-14.png" class="pi in" alt="profesional pet photography" title="profesional pet photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section15">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-15.png" class="ot point">
                    <img src="images/projects/photography-2-15.png" class="pi in" alt="two small dogs photo" title="two small dogs photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section16">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-16.png" class="ot point">
                    <img src="images/projects/photography-2-16.png" class="pi in" alt="happy white puppy image" title="happy white puppy image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section17">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-17.png" class="ot point">
                    <img src="images/projects/photography-2-17.png" class="pi in" alt="pointed dog ears picture" title="pointed dog ears picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section18">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-18.png" class="ot point">
                    <img src="images/projects/photography-2-18.png" class="pi in" alt="walking dogs photo" title="walking dogs photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section19">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-19.png" class="ot point">
                    <img src="images/projects/photography-2-19.png" class="pi in" alt="young puppies photography" title="young puppies photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section20">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-20.png" class="ot point">
                    <img src="images/projects/photography-2-20.png" class="pi in" alt="cute smiling portrait" title="cute smiling portrait">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section21">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-21.png" class="ot point">
                    <img src="images/projects/photography-2-21.png" class="pi in" alt="dogs licking camera image" title="dogs licking camera image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section22">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-22.png" class="ot point">
                    <img src="images/projects/photography-2-22.png" class="pi in" alt="young woman portrait photography" title="young woman portrait photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section23">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-23.png" class="ot point">
                    <img src="images/projects/photography-2-23.png" class="pi in" alt="walking dogs photos" title="walking dogs photos">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section24">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-24.png" class="ot point">
                    <img src="images/projects/photography-2-24.png" class="pi in" alt="summer grass picture" title="summer grass picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section25">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-25.png" class="ot point">
                    <img src="images/projects/photography-2-25.png" class="pi in" alt="cute little dog image" title="cute little dog image">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section26">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-26.png" class="ot point">
                    <img src="images/projects/photography-2-26.png" class="pi in" alt="puppies in summer photo" title="puppies in summer photo">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section27">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-27.png" class="ot point">
                    <img src="images/projects/photography-2-27.png" class="pi in" alt="dogs drinking water photography" title="dogs drinking water photography">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section28">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-28.png" class="ot point">
                    <img src="images/projects/photography-2-28.png" class="pi in" alt="nice pet images" title="nice pet images">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section29">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-29.png" class="ot point">
                    <img src="images/projects/photography-2-29.png" class="pi in" alt="small black dog picture" title="small black dog picture">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section30">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
            </div>
            <div class="box3 in ct">
                <a href="images/projects/photography-2-30.png" class="ot point">
                    <img src="images/projects/photography-2-30.png" class="pi in" alt="white puppy close up photography" title="white photography close up photography">
                </a>
            </div>
	    </div>
	    <div class="section wood ct" id="section31">
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
