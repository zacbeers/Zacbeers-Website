<html lang="en">
    <head>
        <title>Zac Beers</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="hi, my name is Zac Beers. i'm a web designer, illustrator, & animator.">
        <meta name="keywords" content="web design,illustration,animation,photography,zac beers,orage county,los angeles">
        <meta name="author" content="Zac Beers">
        
        <link rel="shortcut icon" href="images/icons/favicon.ico"/>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" />
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(function(){
                var lastScrollTop = 0, delta = 5;
                $(window).scroll(function(event){
                    var st = $(this).scrollTop();

                    if(Math.abs(lastScrollTop - st) <= delta)
                    return;

                    if (st > lastScrollTop){
                        $("#arrow-down").css('-webkit-animation','hide 0.5s 1 forwards');
                        $("#arrow-down").css('-moz-animation','hide 0.5s 1 forwards');
                        $("#arrow-down").css('-o-animation','hide 0.5s 1 forwards');
                        $("#arrow-down").css('animation','hide 0.5s 1 forwards');
                        $("#header").css('position','fixed');
                        $("#header").css('top','-120').hover ()
                    } else {
                        $("#arrow-down").css('-webkit-animation','show 0.5s 1 forwards');
                        $("#arrow-down").css('-moz-animation','show 0.5s 1 forwards');
                        $("#arrow-down").css('-o-animation','show 0.5s 1 forwards');
                        $("#arrow-down").css('animation','show 0.5s 1 forwards');
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
        <div class="header box1 ct w" id="header">
            <div class="box2 in">
                <a href="index.php" class="point zacbeers">
                    <p class="title ot bt va l zacbeers">Zac Beers</p>
                </a>
<!--navigation-->
                <ul class="fullnav va r">
                    <li class="tl l"><a href="work.php" class="ot point">work</a></li>
                    <li class="tl l"><a href="resume.pdf" class="ot point">resume</a></li>
                    <li class="tl l"><a href="contact.php" class="ot point">contact</a></li>
                    <li class="l">
                        <a href="http://www.zacbeers.tumblr.com/" target="_blank" class="point sm">
                            <img class="ot sm" src="images/icons/social-tumblr.png" alt="follow zac beers on tumblr" title="tumblr">
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
                        <a href="http://www.linkedin.com/pub/zac-beers/" target="_blank" class="point">
                            <img class="ot sm" src="images/icons/social-linkedin.png" alt="follow zac beers on linkedin" title="linkedin">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<?php date_default_timezone_set( "America/Los_Angeles" ); ?>