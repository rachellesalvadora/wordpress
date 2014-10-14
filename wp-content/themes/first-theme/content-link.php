<?php

/**
 * content-link.php
 *
 * The default template for displaying posts with the Link post format.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<!-- Meta information -->
			<p class="entry-meta">
				<?php
					// Display meta information
					alpha_post_meta();
				?>
			</p>


	<!-- Article content -->
	<div class="entry-content">
		<!-- display content -->
		<?php

				the_content( __( 'Continue reading &rarr;', 'alpha' ) );
			
				wp_link_pages();

		?>
	</div> <!-- end entry-content -->

	<!-- Article footer -->
	<footer class="entry-footer">

		<!-- Meta information -->
		<p class="entry-meta">
			<?php
				// Display meta information
				alpha_post_meta();
			?>
			</p>

		<?php
			// If we have a single page and the author biography exist, display it
			if ( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer>




</article>