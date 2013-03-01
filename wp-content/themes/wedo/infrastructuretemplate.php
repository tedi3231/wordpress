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
                                <h1>Infrastructure</h1>
                                <ul class="">
                                    <li style="font-size:14px;"><a href="#"><img src="<?php bloginfo('template_url')?>/images/content/icons/network.png" />Network</a></li>
                                    <li style="font-size:14px"><a href="#"><img src="<?php bloginfo('template_url')?>/images/content/icons/storage.png" />Storage</a></li>
                                    <li style="font-size:14px"><a href="#"><img src="<?php bloginfo('template_url')?>/images/content/icons/security.png" />Security</a></li>
                                    <li style="font-size:14px"><a href="#"><img src="<?php bloginfo('template_url')?>/images/content/icons/solution_inf.png" />Solutions</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                                <h1>Links</h1>
                                <ul class="">
                                    <li style="font-size:14px"><a href="#">www.wedoapp.com</a></li>
                                    <li style="font-size:14px"><a href="#">www.wedoforce.com</a></li>
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