<?php get_header(); ?>


<main id= "main">
	<?php 
	// loop
	?>
	<section class= "hero">
		<h1>
			Latest News
		</h1>
	</section>
	<section class="p-grid">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post();?>
			<article <?php post_class('card'); ?>>

			<?php if(has_post_thumbnail()) : ?>
				<div class="p-image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('medium'); ?>
					</a>
					</div>
			<?php endif; ?>
				<h2 class="p-title">
					<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
					</a>
				</h2>
				<p class="p-date">
					<?php the_time('F j, Y'); ?>
				</p>
				<div class="p-excerpt">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php else: ?>
			<?php echo '<p>No posts found.</p>'; ?>
	<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
