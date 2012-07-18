<?php get_header(); ?>
<div class="inner">
	<section class="eightcol">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>			
	</section>
	<aside class="sidebar fourcol last">
		<?php if(function_exists('dynamic_sidebar')) dynamic_sidebar('Home'); ?>
	</aside>
</div>
<?php get_footer(); ?>