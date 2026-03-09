<?php
// template name: single
?>

<?php //loop ?>
<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
<div class="single-p">
	<article <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<p class="p-date">
			<?php the_time('F j, Y'); ?>
		</p>
		<div class="p-content">
			<?php the_content(); ?>
		</div>
	</article>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>