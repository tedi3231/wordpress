<?php get_header(); ?>
<style>
	h2{ line-height: 30px;}
	span.title{ font-size: 1.2em;}
	span.author{margin-left:5px;}

</style>
<?php if(have_posts()):?>
	<div class="main" style="margin-bottom:20px;"> 
		<?php while (have_posts()):the_post();?>
			<?php get_template_part("entry",get_post_format()); ?>
		<?php endwhile;?>
	</div>
<?php endif;?>
