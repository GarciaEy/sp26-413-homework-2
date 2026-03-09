<?php get_header(); ?>
<main id= "main">
	<?php while(have_posts()) : the_post(); ?>
	<article <?php post_class('single-p'); ?>>
		<h1><?php the_title(); ?></h1>
		<div class="p-content">
			<?php the_content(); ?>
		</div>
	</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>