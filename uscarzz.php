<!--header-->
<?php require_once 'includes/modules/header.php'; ?>
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
                    var url = window.location.href; 
                    if (url.indexOf("page8") > -1) {
                        window.location.replace("design-after.php");
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
                <p class="title bt wt">uscarzz</p>
                <p class="wt">website design and back-end development</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-6-1.png" class="ot point">
                    <img src="images/projects/design-6-1.png" class="pi in" alt="us carzz final web design" title="us carzz final web design">
                </a>
                <?php include_once 'includes/modules/arrow-down-small.php'; ?>
            </div>
	    </div>
	    <div class="section wood ct" id="section2">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">A full website, login and registration system, and inventory management all came together to create Us Carzz's online debut. There were many features required by this website, one of which was that it needed to be mobile friendly. Often there's not much time to shop for a car, and their customers need to be able to check out their inventory wherever they go. The finished site is responsive, and will look great no matter what device their customers decide to use.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-6-2.png" class="ot point">
                    <img src="images/projects/design-6-2.png" class="pi in" alt="us carzz mobile friendly responsive website" title="us carzz mobile friendly responsive website">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section3">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">Additionally the site needed to feature a way for the users to save their favorite vehicles to a sort of wish list, so that they could remember their favorites. To solve that, I built a register an login system using php.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-6-3.png" class="ot point">
                    <img src="images/projects/design-6-3.png" class="pi in" alt="us carzz creating user accounts" title="us carzz creating user accounts">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section4">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">This left a convienient way for users to come back and see their personal information. Here they are able to manage many parts of their profile, most importantly, their list of favorite vehicles.</p>
            </div>
            <div class="box3 in ct in">
                <a href="images/projects/design-6-4.png" class="ot point">
                    <img src="images/projects/design-6-4.png" class="pi in" alt="us carzz personal profile page example" title="us carzz personal profile page example">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section5">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">And of course the customers will want to browse through their inventory. It's set up so they can find the car they're looking for quickly and easily. Opening up the Advanced Search Options gives the ability to sort the results by Year, Make, Model, Mpg, and Price Range</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-6-5.png" class="ot point">
                    <img src="images/projects/design-6-5.png" class="pi in" alt="us carzz browse current inventory webpage" title="us carzz browse current inventory webpage">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section6">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">Clicking on an individual vehicle gives them an array of options including, adding it to their favorites list, sharing on facebook and twitter, and emailing the car to a friend. They will even be able to put in an offer to buy the car through the website.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-6-6.png" class="ot point">
                    <img src="images/projects/design-6-6.png" class="pi in" alt="us carzz vehicle details page design" title="us carzz vehicle details page design">
                </a>
            </div>
	    </div>
        <div class="section wood ct" id="section7">
	    	<div class="box1 ct"></div>
            <div class="box1 ct"></div>
            <div class="box2 ct in">
                <p class="wt">Although the website just launched, they are already expecting a big rise in business. This website will hopefully help them to sell a whole lot of cars in the coming months.</p>
            </div>
            <div class="box3 in ct">
                <a href="images/projects/design-6-7.png" class="ot point">
                    <img src="images/projects/design-6-7.png" class="pi in" alt="us carzz web design" title="us carzz web design">
                </a>    
            </div>
	    </div>
	    <div class="section wood ct" id="section8">
            <div class="box1 ct">
                <div class="box3 vb1 in">
                    <p class="title2 bt wt lt">see more work:</p>
                </div>
            </div>
            <?php include_once 'includes/modules/work-buttons.php'; ?>
        </div>
    </div>
