<?php
date_default_timezone_set( "America/Los_Angeles" );
require_once 'core/init.php'; ?>
<html lang="en">
    <head>
        <title>Zac Beers</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="hi, my name is Zac Beers. i'm a web designer, illustrator, & animator.">
        <meta name="keywords" content="web design, illustration, animation, photography, zac beers, orange county, los angeles">
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

    <body class="dg">
<!--header-->
        <div class="header box1 ct w" id="header">
            <div class="box2 in">
                <a href="index.php?page=home" class="point zacbeers">
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
<div class="box1 ct contact" id="contact">
    <!--using margins with the current stand-alone header causes problems, top margins can only be used on pages that have the module version header. The stand alone must be used on this page to avoid multiple http headers sent by the contact script TLDR: leave these boxes alone-->
    <div class="box1 ct"></div>
    <div class="box1 ct"></div>
    <?php if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        
        $to = "zacbeers@gmail.com";
        $subject = "CONTACT FORM";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $body = "User: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;
        
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'name' => array(
                'required' => true
            ),
            'email' => array(
                'required' => true
            ),
            'message' => array(
                'required' => true
            )
        ));
        
        if($validation->passed()) {
            if (mail($to, $subject, $body)) {
                    echo("<p class='bt bluet title2 ct error'>email successfully sent!</p>");
                } else {
                    echo("<p class='bt ot title ct error'>internal server error</p>");
                }
        } else {
            foreach ($validation->errors() as $error) {
                echo "<p class='bt ot title ct error'>", $error, "</p>";
            }
        }
    }
} ?>
    <div class="box1 ct">
        <p class="title2 bt wt">contact</p>
    </div>
    <div class="box2 in ct">
        <div class="box2 in">
            <p class="wt">you can reach me at <a href="mailto:zacbeers@gmail.com" class="ot point">zacbeers@gmail.com</a> or by simply filling out the form below, whichever you prefer.</p>
        </div>
    </div> 
    <div class="box2 in ct">
        <div class="box2 in">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="box1 ct">
                    <div class="field eighth in">
                        <label for="name" class="wt b">name</label>
                        <input type="text" id="name" name="name" placeholder="name">
                    </div>
                    <div class="field eighth in">
                        <label for="email" class="wt b">email</label>
                        <input type="email" id="email" name="email" placeholder="email">
                    </div>
                </div>
                <div class="field half in">
                    <label for="message" class="wt b">message</label>
                    <textarea id="message" name="message" placeholder="message"></textarea>
                </div>
                <div class="field half in">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                    <input type="submit" class="btn c ct in o point wt nb" value="send">
                </div>
            </form>
        </div>
    </div> 
</div>
<!--work-buttons-->
<div class="box1 ct">
    <div class="box1 ct">
        <div class="box3 vb1 in">
            <p class="title2 bt wt lt">see more work:</p>
        </div>
    </div>
<?php include_once 'includes/modules/work-buttons.php'; ?>
</div>
<!--footer-->
<?php include_once 'includes/modules/footer.php';