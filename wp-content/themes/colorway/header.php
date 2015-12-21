<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel=stylesheet type=text/css href="<?php echo get_template_directory_uri(); ?>/css/main.css">
		<script type=text/javascript src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.4.min.js"></script>
		<script type=text/javascript src="<?php echo get_template_directory_uri(); ?>/js/slides.jquery.js"></script>
		<script>
			$(function(){
				//滚动Banner图片的显示
				$('#slides').slides({
					preload: false,
					preloadImage: '<?php echo get_template_directory_uri(); ?>/images/loading.gif',
					effect: 'fade',
					slideSpeed: 400,
					fadeSpeed: 100,
					play: 3000,
					pause: 100,
					hoverPause: true
				});
		        	$('#js-news').ticker();
		    	});
		</script>
		<style type="text/css">
		h10{
			color:black;
			font-size:18px;
			font-family:宋体;
			}
		</style>
        <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        wp_head();
        $bgcolor = get_background_color();
        ?>
    </head>
    <body <?php body_class(); ?> background="<?php
    if (inkthemes_get_option('inkthemes_bodybg') != '') {
        echo inkthemes_get_option('inkthemes_bodybg');
    } else {
        if (empty($bgcolor)) {
            ?>
                                         <?php echo get_template_directory_uri(); ?>/images/body-bg.png
                                         <?php
                                     }
                                 }
                                 ?>">
                                     <?php global $page, $paged; ?>
        <!--Start Container Div-->
        <div class="container_24 container">
            <!--Start Header Grid-->
            <div class="grid_24 header">
            	<!-- start logo and add a href to upload -->
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php if (inkthemes_get_option('colorway_logo') != '') { ?><?php echo inkthemes_get_option('colorway_logo'); ?><?php } else { ?><?php echo get_template_directory_uri(); ?>/images/logo.png<?php } ?>" alt="<?php bloginfo('name'); ?> logo"/></a>
                <div align="right">	<a href="http://172.18.163.246:8080/yanjiusuo/"><h10>精品课程</h10></a> </div>
                </div>
                <!--Start MenuBar-->
                <div class="menu-bar">  
                    <?php inkthemes_nav(); ?>                       
                    <div class="clearfix"></div>
                </div>
                <!--End MenuBar-->
            </div>
            <div class="clear"></div>
            <!--End Header Grid-->
