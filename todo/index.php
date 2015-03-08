<?php

require_once 'app/init.php';

$itemsQuery = $db->prepare("
    SELECT id, name, done
    FROM items
    WHERE user = :user
");

$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];

?><?php $title='To Do List'; require_once '../sub-header.php'; ?>
<link rel="stylesheet" href="../css/todo.css">
 </head>



















    <body class="dg">
<!--header-->
        <div class="box1 w ct">
            <div class="box2 in">
                <a href="http://www.zacbeers.com/" class="point zacbeers">
                    <p class="title bt ot va l zacbeers" style="background: #fff!important;">Zac Beers</p>
                </a>
            
<!--navigation-->
                <ul class="fullnav va r">
                    <li class="tl l"><a href="http://zacbeers.com/work.php" class="ot point">work</a></li>
                    <li class="tl l"><a href="http://zacbeers.com/labs.php" class="ot point">labs</a></li>
                    <li class="tl l"><a href="http://zacbeers.com/resume.pdf" target="_blank" class="ot point">resume</a></li>
                    <li class="tl l"><a href="http://zacbeers.com/contact.php" class="ot point">contact</a></li>
                    <li class="l">
                        <a href="http://www.zacbeers.tumblr.com/" target="_blank" class="point sm">
                            <img class="ot sm" src="http://zacbeers.com/images/icons/social-tumblr.png" alt="follow zac beers on tumblr" title="tumblr">
                        </a>
                    </li>
                    <li class="l">
                        <a href="https://twitter.com/ZacBeers/" target="_blank" class="point">
                            <img class="ot sm" src="http://zacbeers.com/images/icons/social-twitter.png" alt="follow zac beers on twitter" title="twitter">
                        </a>
                    </li>
                    <li class="l">
                        <a href="https://www.behance.net/ZacBeers/" target="_blank" class="point">
                            <img class="ot sm" src="http://zacbeers.com/images/icons/social-behance.png" alt="follow zac beers on behance" title="behance">
                        </a>
                    </li>
                    <li class="l">
                        <a href="http://www.linkedin.com/pub/zac-beers/" target="_blank" class="point">
                            <img class="ot sm" src="http://zacbeers.com/images/icons/social-linkedin.png" alt="follow zac beers on linkedin" title="linkedin">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<?php date_default_timezone_set( "America/Los_Angeles" ); ?>
<div class="box1 ct">
    <div class="box4 in ct w section mt2 todo">
        <h1 class="wt bt">To Do List</h1>
        <?php if(!empty($items)): ?>
        <ul>
            <?php foreach($items as $item): ?>
                <li>
                    <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <form class="item-add ct" action="add.php" method="post">
            <input type="text" name="name" placeholder="add item" class="input l tl" autocomplete="off" required>
            <input type="submit" value="+" class="btn c ct l o point wt nb">
        </form>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('.item').click(function() {
            $(this).toggleClass('done');
        });
    });
</script>