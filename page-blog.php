<?php
/*
Template Name: Blog
*/
	get_header();
	get_nav();
?>

<div class="container">
	<div class="col-xs-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="list-group">
		    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="list-group-item">
		        <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
		        <p class="list-group-item-text"><?php the_excerpt(); ?></p>
		    </a>
		    <div class="gutter">
		        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
		    </div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>

<?php get_footer(); ?>
