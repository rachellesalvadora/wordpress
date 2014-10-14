<?php

/**
 * content-audio.php
 *
 * The default template for displaying post content with the Audio format.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Article header -->
		<header class="entry-header"> <?php

/** we have no thumbnail. we just have the post meta.


			// If the post has a thumbnail and it's not password protected
			//then display the thumbnail
			if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<figure class="entry-thumbnail"><?php the_post_thumbnail(); ?> </figure>
			<?php endif;

*/ 

			// If single page, display the title
			// Else, we display the title in a link
			if ( is_single() ) : ?>
				<h1><?php the_title(); ?></h1>
			<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<?php endif; ?>

	<!-- Meta information -->
			<p class="entry-meta">
				<?php
					// Display meta information
					alpha_post_meta();
				?>
			</p>
		</header>  <!-- end entry header -->

	<!-- Article content -->
	<div class="entry-content">
		<!-- display content -->
		<?php
/** we dont have any excerpt
			if ( is_search() ) {
				the_excerpt();
			}
			else {

*/
				the_content( __( 'Continue reading &rarr;', 'alpha' ) );
			
				wp_link_pages();
/*
			}
*/
		?>
	</div> <!-- end entry-content -->

	<!-- Article footer -->
	<footer class="entry-footer">
		<?php
			// If we have a single page and the author biography exist, display it
			if ( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer>




</article>