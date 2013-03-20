<?php
   /**
    *My first custom template
    *Template name:Infrastructure
    */
?>
<?php get_header();?>

        <!-- START TOP -->
        <div class="top-single">
            <img src="<?php bloginfo("template_url"); ?>/images/banner1.png"></div>
        </div>
        <!-- END TOP -->

        <!-- START MAIN -->
        <div class="main">
            <div class="container_12">
                <div class="main-continer continer-left">
                    <div class="grid_8">
                        <div class="sidebar-content">
                            <?php if(have_posts()):?>
                                <?php while(have_posts()):the_post();?>
                                    <h3> <?php /*the_title();*/ ?></h3>
                                    <?php the_content();?>
                                <?php endwhile;?>
                            <?php endif;?>
                         </div>
                        <hr class="hr-sidebar"/>
                        </div>
                    </div>
                
                <div class="sidebar  sidebar-right">
                    <div class="grid_3">
                        <div class="sidebar-top">
                            <div class="sidebar-widget">
                                <h1><?php _e("Infrastructure","wedo"); ?></h1>
                                <ul class="">
                                    <li style="font-size:14px;"><a href="<?php bloginfo('url');?>/?page_id=37"><img src="<?php bloginfo('template_url')?>/images/content/icons/network.png" /><?php _e("Network","wedo"); ?></a></li>
                                    <li style="font-size:14px"><a href="<?php bloginfo('url');?>/?page_id=44"><img src="<?php bloginfo('template_url')?>/images/content/icons/storage.png" /><?php _e("Storage","wedo"); ?>Storage</a></li>
                                    <li style="font-size:14px"><a href="<?php bloginfo('url');?>/?page_id=52"><img src="<?php bloginfo('template_url')?>/images/content/icons/security.png" /><?php _e("Security","wedo"); ?>Security</a></li>
                                    <li style="font-size:14px"><a href="<?php bloginfo('url');?>/?page_id=58"><img src="<?php bloginfo('template_url')?>/images/content/icons/solution_inf.png" /><?php _e("IT Management","wedo"); ?></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                                <h1><?php _e("Links","wedo"); ?></h1>
                                <ul class="">
                                    <?php 
                                        $bookmarks = get_bookmarks(array("category" => '5'));
                                        foreach ( (array)$bookmarks as $bookmark ) :
                                    ?>
                                    <li style="font-size:14px"><a href="<?php echo $bookmark->link_url;?>" target="<?php echo $bookmark->link_target; ?>">
                                            <?php echo $bookmark->link_name; ?>
                                        </a>
                                    </li>
                                    <?php
                                        endforeach;
                                    ?> 
                                </ul>
                            </div>
                        <div class="sidebar-bottom"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            </div>
        </div>
        <!-- END MAIN -->
        <?php get_footer();?>