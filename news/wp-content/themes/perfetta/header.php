<?php
/**
 * The Header template for our theme
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if lte IE 8]>
	<div id="ie-toolbar"><div><?php _e('You\'re using an unsupported version of Internet Explorer. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/products/ie/home">upgrade your browser</a> for the best user experience on our site. Thank you.', 'perfetta') ?></div></div>
	<![endif]-->
	
	<div id="page" class="hfeed site">
<style>
* {
-webkit-transition: all ease-in-out 0.2s;
transition: all ease-in-out 0.2s;
}
.header {width: 100%!important; position: fixed; top: 0px;left: 0px;z-index: 999;box-shadow: 0px 0px 8px #393939;}
.box1 {width: 100%;height: 60px;}
.ct {text-align: center;}
.w {background: #fff;}
.in {display: inline;}
.wt {color: #fff;}
.box2 {width: 80%;}
.title {font-size: 200%;font-family: courier new; padding: 0px 40px; margin-top: 10px;}
.bt {font-weight: bold;}
.ot {color: #ff6347;}
.va {line-height: 20px;}
.l {float: left;}
.r {float: right;}
.tl {margin: 0px 5px;list-style: none;}
.point {cursor: pointer;}
input[type="submit"] {background:#ff6347!important; border: 0px!important; font-family: Ubuntu, sans-serif; color: #fff!important;text-transform: lowercase!important;}
input[type="submit"]:active, input[type="submit"]:focus, input[type="submit"]:hover {text-decoration: underline!important; background: #3286c6!important;}
#gk-search-area {background: none transparent!important; background-color: none transparent!important;}
#main {margin-top: 120px;}
.fullnav {padding-right: 20px;}
.fullnav a {color: #ff6347!important;}
.fullnav a:hover {text-decoration: underline;}
input[type="text"] {background: #fff!important;}
input[type"text"]:focus, input[type"text"]:hover, input[type"text"]:active {background: #ccc!important;}
</style>


	<div class="header box1 ct w" id="header">
            <div class="box2 in">
                    <a href="http://news.zacbeers.com/" class="point">
                        <p class="title bt ot l w">News.ZacBeers</p>
                </a>
		<div id="gk-search-area" class="l">
			<?php get_search_form(); ?>
		</div>
<!--navigation-->
                <ul class="fullnav va r">
                    <li class="tl va l"><a href="http://zacbeers.com/work.php" class="ot point">work</a></li>
                    <li class="tl va l"><a href="http://zacbeers.com/labs.php" class="ot point">labs</a></li>
                    <li class="tl va l"><a href="http://zacbeers.com/resume.pdf" target="_blank" class="ot point">resume</a></li>
                    <li class="tl va l"><a href="http://zacbeers.com/contact.php" class="ot point">contact</a></li>
                </ul>
            </div>
        </div>
				
		
		
				
		<?php if ( is_active_sidebar( 'top' ) ) : ?>
		<?php $top_color = get_theme_mod('perfetta_top_color', 'light'); ?>
		<div id="gk-top"<?php echo $top_color == 'dark' ? '' : ' class="light-bg"'; ?> role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar( 'top' ); ?>
			</div>
		</div>
		<?php endif; ?>		
		
		<div id="main" class="site-main">