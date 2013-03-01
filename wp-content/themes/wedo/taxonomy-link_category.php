<?php get_header();?>
<!-- START TOP -->
<div class="top-single">
	<img src="<?php bloginfo('template_url');?>/images/banner3.png"></div>
<!-- END TOP -->
<!-- START MAIN -->
<!-- test -->
<?php
    //print_r(@get_defined_constants());
?>
<?php
    if( have_posts()){
        while(have_posts()){
            //echo 'one <br/>';
            echo 'a';
            the_post();
        }
        //echo "have posts";
    } 
?>
<div class="main">
	<div class="container_12">
		<div class="grid_12">
			<h3 style="color:#99cc33">Partners</h3>
			<hr class="hr-fullwidth"/>
		
<?php
	//global $post;
	$args = array(
		'taxonomy' =>'link_category',
		'show_count'   => 10,
		'hide_empty'   => 0,
                'orderby'=>'name',
                'order'=>'ASC'
	);
	$link_categories = get_categories($args);
	foreach($link_categories as $cat) {
?>
<h5 style="margin-bottom:20px;"><?php echo $cat->cat_name; /*echo $cat->term_id;*/ ?></h5>
<?php 
	$bookmarks = get_bookmarks(array("category" => $cat->term_id));
	foreach ( (array)$bookmarks as $bookmark ) :
?>
<div class="grid_3 img-border" style="margin:5px;">
   <a href="<?php echo $bookmark->link_url;?>" target="<?php echo $bookmark->link_target; ?>">
    	<img src="<?php echo $bookmark->link_image; ?>" />
	</a>
 </div>

<?php
	endforeach;
?>
 <hr class="hr-fullwidth"/>
 <div class="clear"></div>
<?php }?>
	</div>
	</div>
</div>
<?php get_footer();?>
