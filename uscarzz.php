<!--header-->
<?php $title = 'USCarzz - Web Development'; require_once 'includes/modules/header.php'; ?>
<!--keyboard navigation-->
<script>
    document.addEventListener('keydown', function(event) {
        if(event.keyCode == 37) {
            window.location.href = 'livenetwork.php';
        }
        else if(event.keyCode == 39) {
            window.location.href = 'cardealershipsoftware.php';
        }
    });
</script>
<!--content-->
<div class="dg ct">
<!--image 1-->
    <div class="box2 ct in mt4">
        <p class="title bt wt"><?php echo $title; ?></p>
        <p class="wt">This was an exciting project to work on. Responsive design, backend development, login and registration system, and inventory management all came together to create USCarzz's online debut.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/uscarzz-1.png" class="ot point">
            <img src="images/projects/uscarzz-1.png" class="pi in" alt="us carzz mobile friendly responsive website" title="us carzz mobile friendly responsive website">
        </a>
    </div>
<!--image 2-->
    <div class="box2 ct in mt">
        <p class="wt">There were many features required by this website, one of which was that it needed to be mobile friendly. Often there's not much time to shop for a car, and their customers need to be able to check out their inventory wherever they go. The finished site is fully responsive, and will look great no matter what device their customers decide to use.</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/uscarzz-2.png" class="ot point">
            <img src="images/projects/uscarzz-2.png" class="pi in" alt="us carzz mobile friendly responsive website" title="us carzz mobile friendly responsive website">
        </a>
    </div>
<!--image 3-->
    <div class="box2 ct in mt">
        <p class="wt">Additionally the site needed to feature a way for the users to save their favorite vehicles to a sort of wish list, so that they could remember their favorites. To solve that, I started with a register an login system built using php.
</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/uscarzz-3.png" class="ot point">
            <img src="images/projects/uscarzz-3.png" class="pi in" alt="us carzz creating user accounts" title="us carzz creating user accounts">
        </a>
    </div>
<!--image 4-->
    <div class="box2 ct in mt">
        <p class="wt">This made it convienient for users to come back and see their personal information. Here they are able to manage many parts of their profile, most importantly, their list of favorite vehicles.
</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/uscarzz-4.png" class="ot point">
            <img src="images/projects/uscarzz-4.png" class="pi in" alt="us carzz personal profile page example" title="us carzz personal profile page example">
        </a>
    </div>
<!--image 5-->
    <div class="box2 ct in mt">
        <p class="wt">And of course the customers will want to browse through their inventory. It's set up so they can find the car they're looking for quickly and easily. Opening up the Advanced Search Options gives the ability to sort the results by Year, Make, Model, Mpg, and Price Range.
</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/uscarzz-5.png" class="ot point">
            <img src="images/projects/uscarzz-5.png" class="pi in" alt="us carzz browse current inventory webpage" title="us carzz browse current inventory webpage">
        </a>
    </div>
<!--image 6-->
    <div class="box2 ct in mt">
        <p class="wt">Clicking on an individual vehicle gives them an array of options including, adding it to their favorites list, sharing on facebook and twitter, and emailing the car to a friend. They are even able to put in an offer to buy the car through the website.
</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/uscarzz-6.png" class="ot point">
            <img src="images/projects/uscarzz-6.png" class="pi in" alt="us carzz vehicle details page design" title="us carzz vehicle details page design">
        </a>
    </div>
<!--image 7-->
    <div class="box2 ct in mt">
        <p class="wt">Although the website just launched, they are already expecting a big rise in business. This website will hopefully help them to sell a whole lot of cars in the coming months.
</p>
    </div>
    <div class="box3 in ct mt">
        <a href="images/projects/uscarzz-7.png" class="ot point">
            <img src="images/projects/uscarzz-7.png" class="pi in" alt="us carzz web design" title="us carzz web design">
        </a>
    </div>
<!--footer-->
    <div class="box1 vb1 ct mt">
					<div class="btn in o">
						<a href="livenetwork.php" class="point wt" title="Press LEFT on keyboard">
							<p class="c">< Last Project - Live Network</p>
						</a>
					</div>
                    <div class="btn in o">
						<a href="cardealershipsoftware.php" class="point wt" title="Press RIGHT on keyboard">
							<p class="c">Next Project - Car Dealership Software ></p>
						</a>
					</div>
                </div>
    <?php include_once 'includes/modules/work-buttons.php'; ?>
</div>