<h2 id="POST_<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>" rel="bookmark" alt="link to post <?php the_title();?>" >
		<span class="title"><?php the_title(' { ',' } ',display);?></span>
	</a>
	<small>
		<span class="date"><?php the_date(); ?></span>
		<span class="author"><?php the_author(); ?> posted in <?php the_category(',');?></span>
		<!--more-->
	</small>
</h2>
<div class="entry" style="background-color:#3f3f3f;color:white;padding:10px 0px 10px 10px;">
	<?php  the_content();?>
</div>