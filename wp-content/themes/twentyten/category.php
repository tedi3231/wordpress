<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header(); ?>
<h1>use user defined method</h1>
<?php
    $myPosts = new WP_Query( 'posts_per_page=5' );
    while($myPosts->have_posts()):$myPosts->the_post();
?>
<?php the_title();?>
<?php endwhile;?>
<?php
    if(have_posts()):
        while(have_posts()):the_post();
?>
    <div class="entry">
    <a href="<?php echo the_permalink(); ?>"><?php echo the_title();?></a>
    <?php the_author(); ?><?php if(is_author()):edit_post_link();endif;?> 
    <?php the_content("Read more",false); ?>
    </div>
<?php
        endwhile;
    endif;
?>
		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
