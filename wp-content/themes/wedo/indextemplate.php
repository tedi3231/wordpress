<?php
   /**
    *My first custom template
    *Template name:Hometemplate
    */
?>
<?php get_header();?>
<?php if(have_posts()):?>
    <?php while(have_posts()):the_post();?>
        <?php the_content();?>
    <?php endwhile;?>
<?php endif;?>
<?php get_footer();?>
