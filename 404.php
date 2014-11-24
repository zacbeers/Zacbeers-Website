<html lang="en">
    <head>
        <title>Zac Beers</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="imagesd/icons/favicon.ico"/>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" />
        <script>
            $(function(){
                var lastScrollTop = 0, delta = 5;
                $(window).scroll(function(event){
                    var st = $(this).scrollTop();

                    if(Math.abs(lastScrollTop - st) <= delta)
                    return;

                    if (st > lastScrollTop){
                        $("#header").css('position','fixed');
                        $("#header").css('top','-80').hover ()
                    } else {
                        $("#header").css('position','fixed');
                        $("#header").css('top','0');
                    }
                    lastScrollTop = st;
                });
            });
        </script>
        <script>
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
    </head>

    <body class="wood">
<!--header-->
        <div class="header box1 vb1 ct w" id="header">
            <div class="box2 vb1 in">
                <a href="index.php" class="point">
                    <p class="title ot bt va l">Zac Beers</p>
                </a>
<!--navigation-->
                <ul class="fullnav va r">
                    <li class="tl l"><a href="work.php" class="ot point">work</a></li>
                    <li class="tl l"><a href="resume.php" class="ot point">resume</a></li>
                    <li class="tl l"><a href="contact.php" class="ot point">contact</a></li>
                    <li class="l">
                        <a href="http://www.zacbeers.tumblr.com/" target="_blank" class="point">
                            <img class="sm" src="images/icons/social-tumblr.png" alt="follow zac beers on tumblr" title="tumblr">
                        </a>
                    </li>
                    <li class="l">
                        <a href="https://twitter.com/ZacBeers/" target="_blank" class="point">
                            <img class="ot sm" src="images/icons/social-twitter.png" alt="follow zac beers on twitter" title="twitter">
                        </a>
                    </li>
                    <li class="l">
                        <a href="https://www.behance.net/ZacBeers/" target="_blank" class="point">
                            <img class="ot sm" src="images/icons/social-behance.png" alt="follow zac beers on behance" title="behance">
                        </a>
                    </li>
                    <li class="l">
                        <a href="http://www.linkedin.com/pub/zac-beers/61/204/a04/" target="_blank" class="point">
                            <img class="ot sm" src="images/icons/social-linkedin.png" alt="follow zac beers on linkedin" title="linkedin">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<div class="box1 ct" id="404">
    <div class="box1 ct"></div>
    <div class="box1 ct"></div>
    <div class="box1 ct">
        <p class="title2 bt wt">404</p>
        <p class="wt">whoops! that page doesn't exist.</p>
    </div>
</div>
<!--work-buttons-->
<!--footer-->
<div class="box1 ct">
    <div class="box1 ct">
        <div class="box3 vb1 in">
            <p class="title2 bt wt lt">try these instead:</p>
        </div>
    </div>
    <div class="box3 vb1 in">
        <a href="design.php" class="point td">
            <div class="eighth in nd">
                <div class="circle">
                    <img src="images/projects/square-1.png" class="box1">
                </div>
                <p class="wt ct">design</p>
            </div>
        </a>
        <a href="illustration.php" class="point td">
            <div class="eighth in nd">
                <div class="circle">
                    <img src="images/projects/square-2.png" class="box1">
                </div>
                <p class="wt ct">illustration</p>
            </div>
        </a>
        <a href="videos.php" class="point td">
            <div class="eighth in nd">
                <div class="circle">
                    <img src="images/projects/square-3.png" class="box1">
                </div>
                <p class="wt ct">videos</p>
            </div>
        </a>
        <a href="photography.php" class="point td">
            <div class="eighth in nd">
                <div class="circle">
                    <img src="images/projects/square-4.png" class="box1">
                </div>
                <p class="wt ct">photography</p>
            </div>
        </a>
    </div>
        </div>
        <div class="box1 ct">
    <div class="box1 vb2">
        <ul class="in">
            <li class="nd l">
                <a href="work.php" class="wt point">work</a>
            </li>
            <li class="nd l">
                <a href="labs.php" class="wt point">labs</a>
            </li>
            <li class="nd l">
                <a href="resume.php" class="wt point">resume</a>
            </li>
            <li class="nd l">
                <a href="contact.php" class="wt point">contact</a>
            </li>
        </ul>
    </div>
    <div class="box1 vb1">
        <p class="wt l nd">copyright 2014</p>
    </div>
</div>
</body>
</html>