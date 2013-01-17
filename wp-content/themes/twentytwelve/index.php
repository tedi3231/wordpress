<?php get_header(); ?>
<style>
	h2{ line-height: 30px;}
	span.title{ font-size: 1.2em;}
	span.author{margin-left:5px;}
	div.navagation{ margin-bottom: 10px;}
</style>
<?php if(have_posts()):?>
	
	<div class="main" style="margin-bottom:20px;"> 
		<?php while (have_posts()):the_post();?>
			<?php get_template_part("entry",get_post_format()); ?>
		<?php endwhile;?>
		<div class="navagation">
			<div class="alignleft">
				<?php previous_post_link('Privious');?>
			</div>
			<div class="alignright">
				<?php next_post_link('Next'); ?>
			</div>
		</div>
	</div>
<?php endif;?>