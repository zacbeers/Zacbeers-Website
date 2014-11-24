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
    <!--page piling-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			* Plugin intialization
			*/
	    	$('#pagepiling').pagepiling({
	          	direction: 'vertical',
	    		menu: '#menu',
	    		anchors: ['page1', 'page2'],
			    navigation: {
			    	'position': 'right',
                    'bulletsColor': '#fff',
			   		'tooltips': ['image', 'see more']
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
                    if (url.indexOf("page2") > -1) {
                        window.location.replace("illustration-after.php");
                        $(".content").fadeOut();
                    }
			    }
			});
	    });
    </script>
    <div id="container">
        <div class="content">
            <div id="pagepiling">
                <div class="section wood ct" id="section1">
                    <div class="box1 ct"></div>
                    <div class="box1 ct"></div>
                    <div class="box2 ct in">
                        <p class="title bt wt">ferret</p>
                        <p class="wt">personal illustration</p>
                    </div>
                    <div class="box3 in ct">
                        <a href="images/projects/illustration-8-1.png" class="ot point">
                            <img src="images/projects/illustration-8-1.png" class="pi in" alt="punk ferret illustraion" title="punk ferret illustration">
                        </a>
                        <?php require_once 'arrow-down.php'; ?>
                    </div>
                </div>
                <div class="section wood ct" id="section2">
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
        </div>
    </div>
</body>
</html>
