<?php 
// footer section
?>

<footer id="footer">
	<p>
		&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
</p>
</footer>
<?php wp_footer(); // Hook for plugins to add scripts or content before closing body tag. ?>
</body>
</html>