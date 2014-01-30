<?php
/*
Template Name: Blog
*/
	get_header();
	get_nav();
	// Grab all posts
	$posts = get_posts();
?>

<div class="container">
	<div class="col-xs-12 blog-page">
		<a class="btn btn-default" href="<?php echo bloginfo('url'); ?>">Back to Siphon</a>
		<?php foreach($posts as $key=>$post): setup_postdata($post); ?>
		<div class="list-group">
		    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="list-group-item">
		        <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
		        <p class="list-group-item-text"><?php the_excerpt(); ?></p>
		    </a>
		    <div class="gutter">
		        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
		    </div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<?php get_footer(); ?>
