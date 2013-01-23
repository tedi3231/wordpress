<?php
   /**
    *My first custom template
    *Template name:AboutTemplate
    */
?>
<?php get_header();?>

<div class="top-single">
    <img src="<?php bloginfo("template_url"); ?>/images/banner5.png"></div>
<div class="main">
    <div class="container_12">
        <div class="main-continer continer-left">
            <div class="grid_8">
                <div class="sidebar-content">
                    <?php if(have_posts()):?>
                        <?php while(have_posts()):the_post();?>
                            <h3>WEDO Application Co., Ltd.</h3>
                            <?php the_content();?>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>