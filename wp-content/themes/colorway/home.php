<?php
/*
  /**
 * The main front page file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?>
<!--Start Slider-->
<?php if (inkthemes_get_option('colorway_home_page_slider') != 'off') { ?>
    <div class="grid_24 slider">
    	<div class="slider-container">
            <!-- 滚动图片 -->
			<div id="slides" class="banner">
			<div class="banner_l"><a class="prev" href="#"><img alt="上一"页 src="<?php echo get_template_directory_uri(); ?>/images/banner_l.png" width="24" height="43"></a></div>
			<div class="bannerImg">
				<div class="slides_container">
					<div id="banner_pic_1"><a href="#" target="_blank"><img alt="研究所" src="<?php echo get_template_directory_uri(); ?>/images/11.jpg" width="1171" height="457"></a></div>
					<div style="DISPLAY: none" id="banner_pic_2"><a href="#" target="_blank"><img alt="研究所" src="<?php echo get_template_directory_uri(); ?>/images/22.jpg" width="1171" height="457"></a></div>
					<div style="DISPLAY: none" id="banner_pic_3"><a href="#" target="_blank"><img alt="研究所" src="<?php echo get_template_directory_uri(); ?>/images/33.jpg" width="1171" height="457"></a></div>
					<div style="DISPLAY: none" id="banner_pic_4"><a href="#" target="_blank"><img alt="研究所" src="<?php echo get_template_directory_uri(); ?>/images/44.jpg" width="1171" height="457"></a></div>
				</div>
			</div>
			<div class="banner_r"><a class="next" href="#"><img alt="下一页" src="<?php echo get_template_directory_uri(); ?>/images/banner_r.png" width="24" height="43"></a></div>
			</div>
		</div>
			<!-- 滚动图片 -->            
    </div>
<?php } else {
    ?>
    <div class="heading_section"></div>
<?php }
?>
<div class="clear"></div>
<!--End Slider-->
<!--Start Content Grid-->
<div class="grid_24 content">
    <div class="content-wrapper">
        <div class="content-info home">
            <center>
                <h2>
                    <?php if (inkthemes_get_option('inkthemes_mainheading') != '') { ?>
                        <?php echo inkthemes_get_option('inkthemes_mainheading'); ?>
                    <?php } else { ?>
                        <?php _e('学生优秀作品', 'colorway'); ?>
                    <?php } ?>
                </h2>
            </center>
        </div>
        <div class="clear"></div>
        <div  id="content">
            <div class="columns">
                <div class="one_fourth"> <a href="http://www.likerspace.com/" class="bigthumbs">
                        <?php if (inkthemes_get_option('inkthemes_fimg1') != '') { ?>
                            <img src="<?php echo inkthemes_get_option('inkthemes_fimg1'); ?>"/>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg"/>
                        <?php } ?>
                    </a>
                    <?php if (inkthemes_get_option('inkthemes_headline1') != '') { ?>
                        <h2><a href="<?php echo inkthemes_get_option('inkthemes_link1'); ?>"><?php echo inkthemes_get_option('inkthemes_headline1'); ?></a></h2>
                    <?php } else { ?>
                        <h2><a href="http://www.likerspace.com/"><?php _e('Liker圈子', 'colorway'); ?></a></h2>
                    <?php } ?>
                    <?php if (inkthemes_get_option('inkthemes_feature1') != '') { ?>
                        <p><?php echo inkthemes_get_option('inkthemes_feature1'); ?></p>
                    <?php } else { ?>
                        <p><?php _e('Liker是首个真正意义上的社交网盘。它供用户管理人脉、快速存取、分享及搜索资料，并致力于提供有价值的资源。
Liker会成为你知识的存储库。', 'colorway'); ?></p>
                    <?php } ?>
                </div>
                <div class="one_fourth middle"> <a href="<?php echo inkthemes_get_option('inkthemes_link2'); ?>" class="bigthumbs">
                        <?php if (inkthemes_get_option('inkthemes_fimg2') != '') { ?>
                            <img src="<?php echo inkthemes_get_option('inkthemes_fimg2'); ?>"/>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg"/>
                        <?php } ?>
                    </a>
                    <?php if (inkthemes_get_option('inkthemes_headline2') != '') { ?>
                        <h2><a href="<?php echo inkthemes_get_option('inkthemes_link2'); ?>"><?php echo inkthemes_get_option('inkthemes_headline2'); ?></a></h2>
                    <?php } else { ?>
                        <h2><a href="http://ggx.nuaa.edu.cn/weiciyun/expression.jsp"><?php _e('微词云', 'colorway'); ?></a></h2>
                    <?php } ?>
                    <?php if (inkthemes_get_option('inkthemes_feature2') != '') { ?>
                        <p><?php echo inkthemes_get_option('inkthemes_feature2'); ?></p>
                    <?php } else { ?>
                        <p><?php _e('
大数据可以帮助您确定目标客户，以及激励客户的因素。通过分析大数据，可以发现改进客户互动、增加价值和建立持久关系的方法。', 'colorway'); ?></p>
                    <?php } ?>
                </div>
                <div class="one_fourth"> <a href="<?php echo inkthemes_get_option('inkthemes_link3'); ?>" class="bigthumbs">
                        <?php if (inkthemes_get_option('inkthemes_fimg3') != '') { ?>
                            <img src="<?php echo inkthemes_get_option('inkthemes_fimg3'); ?>"/>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg"/>
                        <?php } ?>
                    </a>
                    <?php if (inkthemes_get_option('inkthemes_headline3') != '') { ?>
                        <h2><a href="<?php echo inkthemes_get_option('inkthemes_link3'); ?>"><?php echo inkthemes_get_option('inkthemes_headline3'); ?></a></h2>
                    <?php } else { ?>
                        <h2><a href="#"><?php _e('搜索引擎', 'colorway'); ?></a></h2>
                    <?php } ?>
                    <?php if (inkthemes_get_option('inkthemes_feature3') != '') { ?>
                        <p><?php echo inkthemes_get_option('inkthemes_feature3'); ?></p>
                    <?php } else { ?>
                        <p><?php _e('形成像图书馆目录一样的分类树形结构索引。目录索引无需输入任何文字，根据网站提供的主题分类目录，层层点击进入，便可查到所需的网络信息资源。', 'colorway'); ?></p>
                    <?php } ?>
                </div>
                <div class="one_fourth last"> <a href="<?php echo inkthemes_get_option('inkthemes_link4'); ?>" class="bigthumbs">
                        <?php if (inkthemes_get_option('inkthemes_fimg4') != '') { ?>
                            <img src="<?php echo inkthemes_get_option('inkthemes_fimg4'); ?>"/>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg"/>
                        <?php } ?>
                    </a>
                    <?php if (inkthemes_get_option('inkthemes_headline4') != '') { ?>
                        <h2><a href="<?php echo inkthemes_get_option('inkthemes_link4'); ?>"><?php echo inkthemes_get_option('inkthemes_headline4'); ?></a></h2>
                    <?php } else { ?>
                        <h2><a href="#"><?php _e('学生处管理系统', 'colorway'); ?></a></h2>
                    <?php } ?>
                    <?php if (inkthemes_get_option('inkthemes_feature4') != '') { ?>
                        <p><?php echo inkthemes_get_option('inkthemes_feature4'); ?></p>
                    <?php } else { ?>
                        <p><?php _e('用户管理模块主要涉及日志管理功能，日志管理功能分为系统日志记录和用户使用记录。便于日常系统维护和管理，涉及系统的安全问题和使用情况。', 'colorway'); ?></p>
                    <?php } ?>
                </div>
            </div>            
        </div>        
        <div class="clear"></div>
        <?php if (inkthemes_get_option('colorway_home_page_blog_post') != 'off') { ?>
            <div class="home_page_blog">
                <div class="<?php if (inkthemes_get_option('colorway_home_page_blog_post') == 'on_with_sidebar') {
                ?>grid_16 alpha<?php } else {
                ?>grid_24<?php } ?>">
                    <div class="content-wrap home">
                        <?php if (inkthemes_get_option('inkthemes_blog_head') != '') { ?>
                            <h1 class="blog_head"><?php echo stripslashes(inkthemes_get_option('inkthemes_blog_head')); ?></h1>
                        <?php } else { ?>
                            <h1 class="blog_head"><?php _e('所内新闻', 'colorway'); ?></h1>
                        <?php } ?> 
                        <div class="blog" id="blogmain">
                            <ul class="blog_post">
                                <!-- Start the Loop. -->
                                <?php
                                $post_on_home_page = inkthemes_get_option('inkthemes_blog_posts');
                                $post_on_home_page--;
                                ?>
                                <?php query_posts("posts_per_page=$post_on_home_page"); ?>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                        <li id="post-<?php the_ID();
                                        ?>" <?php post_class(); ?>>
                                                <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                                                </a>
                                                <?php
                                            } else {
                                                echo inkthemes_main_image();
                                            }
                                            ?>
                                            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to ', 'colorway') . the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                            <?php echo inkthemes_custom_trim_excerpt(25); ?>
                                            <a href="<?php the_permalink() ?>"><?php _e('继续阅读...', 'colorway'); ?></a> </li>
                                        <!-- End the Loop. -->
                                        <?php
                                    endwhile;
                                else:
                                    ?>
                                    <li>
                                        <p> <?php _e('Sorry, no posts matched your criteria.', 'colorway'); ?> </p>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if (inkthemes_get_option('colorway_home_page_blog_post') == 'on_with_sidebar') {
                    ?>
                    <div class="grid_8 omega">
                        <?php if (is_active_sidebar('home-page-right-feature-widget-area')) : ?>
                            <div class="sidebar home">
                                <?php dynamic_sidebar('home-page-right-feature-widget-area'); ?>
                            </div>
                        <?php else : ?>
                            <div class="sidebar home">
                                <img class="widget_img" src="<?php echo get_template_directory_uri(); ?>/images/widget-area.png" />
                            </div>
                        <?php endif; ?>
                    </div><?php } ?>
            </div>
        <?php } ?>
        <div class="clear"></div>
        <?php if (inkthemes_get_option('inkthemes_testimonial') != '') { ?>
            <blockquote class="home_blockquote"><?php echo inkthemes_get_option('inkthemes_testimonial'); ?></blockquote>
        <?php } else { ?>
            <blockquote class="home_blockquote"><?php _e('信息管理与电子商务研究所在学术界产生重要影响。下设管理信息系统与企业信息化等二级学科，本学科研究方向包括信息管理与电子商务、物流管理等研究方向。</br>研究所已经有多名学生被阿里巴巴、百度、腾讯所录用。', 'colorway'); ?></blockquote>
        <?php } ?>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<!--End Content Grid-->
</div>
<!--End Container Div-->
<?php get_footer(); ?>
