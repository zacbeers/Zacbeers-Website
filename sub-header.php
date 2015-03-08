<!--include this header for subdomains. this file will contain absolute urls-->
<html lang="en">
    <head>
        <title><?php if (isset($title)) {echo $title;}
else {echo "Zac Beers";} ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="hi, my name is Zac Beers. i'm a web designer, illustrator, & animator.">
        <meta name="keywords" content="web design,illustration,animation,photography,zac beers,orage county,los angeles">
        <meta name="author" content="Zac Beers">
        
        <link rel="shortcut icon" href="http://zacbeers.com/images/icons/favicon.ico"/>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://zacbeers.com/css/global.css">
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
   