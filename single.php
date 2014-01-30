<?php get_header();
      get_nav(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?php if( have_posts() ): the_post(); ?>
			<article class="post">
				<a class="btn btn-default" href="blog">Back to Posts</a>
				<header>
					<h1><?php the_title(); ?></h1>
					<small><?php the_date(); ?>, <?php the_author(); ?></small>
				</header>
				<section class="the-meat">
					<?php the_content(); ?>
				</section>
				<footer>
				Posted in <?php the_category(', '); ?>
				</footer>
			</article>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<section class="comments">
				<?php comments_template( '', true ); ?>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>