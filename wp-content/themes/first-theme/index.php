<?php
/**
 * index.php
 *
 * The main template file.
 */
?>

<div class="main-content col-md-8" role="main">
	<?php if ( have_posts() ): while( have_posts() ) : the_post(); ?>
		hello <!--- print hello if have post -->
	<?php endwhile; ?>
	<?php endif; ?>