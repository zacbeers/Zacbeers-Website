<!doctype html>
<html ng-app>
    <head>
        <title><?php if (isset($page)) {echo ucwords($page);}
else {echo "Zac Beers";} ?></title>
        <!--google's stuff-->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:700|Lato' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!--my stuff-->
        <link rel="stylesheet" type="text/css" href="style/output/global.css">
        <script src="scripts/toggles.js"></script> 
    </head>
    <body>
        <nav id="menu">
            <svg id="closeNav" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2em" height="2em"
	 viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
                <polygon fill="#222222" points="438.8,85.3 438.8,109 109,438.8 85.3,438.8 61.2,414.7 61.2,391 391,61.2 414.7,61.2 "/>
                <polygon fill="#222222" points="414.7,438.8 391,438.8 61.2,109 61.2,85.3 85.3,61.2 109,61.2 438.8,391 438.8,414.7 "/>
            </svg>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="labs.php">Labs</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="resume.pdf">Resume</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                    $user = new User();
                    if($user->isLoggedIn()) {
                ?>
                <li><a href='profile.php'>Admin</a></li>
                <?php 
                    }
                ?>
            </ul>
        </nav>
        <div id="menuGhost"></div>
        <header>
            <a href="http://zacbeers.com/gamma"><h1>ZacBeers</h1></a>
            <?php if(isset($page)){ echo "<a class='breadcrumbs' href='", $page, ".php'> >&nbsp;&nbsp;&nbsp;", $page, "</a>";
             } else {
                $page = 'ZacBeers';
                }?>
            <svg id="openNav" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="2em" height="2em" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
                <polygon fill="#666666" points="500,90 483.3,106.8 16.7,106.8 0,90 0,55.9 16.7,39.2 483.3,39.2 500,55.9 ">
                </polygon>
                <polygon fill="#666666" points="500,264.1 483.3,280.8 16.7,280.8 0,264.1 0,230 16.7,213.3 483.3,213.3 500,230 ">
                </polygon>
                <polygon fill="#666666" points="500,444.1 483.3,460.8 16.7,460.8 0,444.1 0,410 16.7,393.2 483.3,393.2 500,410 ">
                </polygon>
            </svg>
        </header>