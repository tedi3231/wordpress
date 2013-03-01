<?php
   /**
    *My first custom template
    *Template name:AboutTemplate
    */
?>
<?php get_header();?>

<div class="top-single">
    <img src="<?php bloginfo("template_url"); ?>/images/banner1.png"></div>
<div class="main">
    <div class="container_12">
        <div class="main-continer continer-left">
            <div class="grid_8">
                <div class="sidebar-content">
                    <?php if(have_posts()):?>
                        <?php while(have_posts()):the_post();?>
                            <h3> <?php the_title(); ?></h3>
                            <?php the_content();?>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar  sidebar-right">
                    <div class="grid_3">
                        <div class="sidebar-top">
                            <div class="sidebar-widget">
                                <h1>Infrastructure</h1>
                                <ul class="">
                                    <li style="font-size:14px;"><a href="#"><img src="images/content/icons/network.png" />Network</a></li>
                                    <li style="font-size:14px"><a href="#"><img src="images/content/icons/storage.png" />Storage</a></li>
                                    <li style="font-size:14px"><a href="#"><img src="images/content/icons/security.png" />Security</a></li>
                                    <li style="font-size:14px"><a href="#"><img src="images/content/icons/monitor.png" />Monitor</a></li>
                                    <li style="font-size:14px"><a href="#"><img src="images/content/icons/solution_inf.png" />Solutions</a>
                                    <ul>
                                    <li style="font-size:12px; margin-left:38px;"><a href="#">FlexCube</a></li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                                <h1>Links</h1>
                                <ul class="">
                                    <li style="font-size:14px"><a href="#">www.wedoapp.com</a></li>
                                    <li style="font-size:14px"><a href="#">www.wedoforce.com</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                                <h1>Downloads</h1>
                                <ul class="">
                                    <li class="">
                                        <div class="date">
                                        <img src="images/download.png" />
                                        </div>
                                         <div class="post-data"><a href="#">abcdef sdfsdfsdf dsfsfsdfs.pdf</a></div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="">
                                        <div class="date">                                        <img src="images/download.png" />
                                        </div>
                                         <div class="post-data"><a href="#">abcdef sdfsdfsdf dsfsfsdfs.pdf</a></div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="">
                                        <div class="date">                                        <img src="images/download.png" />
                                        </div>
                                         <div class="post-data"><a href="#">abcdef sdfsdfsdf dsfsfsdfs.pdf</a></div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-bottom"></div>
                    </div>
                </div>
                <div class="clear"></div>
</div>
<?php get_footer();?>
