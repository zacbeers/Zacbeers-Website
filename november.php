<!--header-->
<?php $title = 'November - Photography'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'latenights.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'everynightidreamofdancing.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">All work shot on 11/8/14</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/november-1.png" class="ot point">
            <img src="images/projects/november-1.png" class="pi in" alt="outside at night photography" title="outside at night photography">
        </a>
    </div>
<!--image 2-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-2.png" class="ot point">
            <img src="images/projects/november-2.png" class="pi in" alt="bokeh streetlight photos" title="bokeh streetlight photos">
        </a>
    </div>
<!--image 3-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-3.png" class="ot point">
            <img src="images/projects/november-3.png" class="pi in" alt="dark sifi carwash picture" title="dark sifi carwash picture">
        </a>
    </div>
<!--image 4-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-4.png" class="ot point">
            <img src="images/projects/november-4.png" class="pi in" alt="freeway underpass image" title="freeway underpass image">
        </a>
    </div>
<!--image 5-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-5.png" class="ot point">
            <img src="images/projects/november-5.png" class="pi in" alt="standing outside on the sidewalk picture" title="standing outside on the sidewalk picture">
        </a>
    </div>
<!--image 6-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-6.png" class="ot point">
            <img src="images/projects/november-6.png" class="pi in" alt="misty building at night photography" title="misty building at night photography">
        </a>
    </div>
<!--image 7-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-7.png" class="ot point">
            <img src="images/projects/november-7.png" class="pi in" alt="abandoned parking lot photos" title="abandoned parking lot photos">
        </a>
    </div>
<!--image 8-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-8.png" class="ot point">
            <img src="images/projects/november-8.png" class="pi in" alt="dark overgrown stairs image" title="dark overgrown stairs image">
        </a>
    </div>
<!--image 9-->
    <div class="box3 in ct mt">
        <a href="images/projects/november-9.png" class="ot point">
            <img src="images/projects/november-9.png" class="pi in" alt="outside at night photography" title="outside at night photography">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="latenights.php" class="point wt" title="press LEFT on keyboard">
							<p class="c">< Last Project - Late Nights with Trav &amp; Los</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="everynightidreamofdancing.php" class="point wt" title="press RIGHT on keyboard">
							<p class="c">Next Project - Every Night I Dream of Dancing ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>
