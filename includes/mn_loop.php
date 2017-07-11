<?php if ( $mn_query->have_posts() ) :

	$mn_posts_output .= '<div class="mn_post__container row">';

		while ( $mn_query->have_posts() ) : $mn_query->the_post();

			$mn_class_array = get_post_class("mnpost col-sm-12 col-md-6 col-lg-4");

			$mn_posts_output .= '<article class="';

			foreach ( $mn_class_array as $key => $class) {

				$mn_posts_output .= '' . $class . ' ';

			}

			$mn_posts_output .= '">';

				$mn_posts_output .= get_the_post_thumbnail(get_the_ID(), "medium");

				$mn_posts_output .= '<h2>' . get_the_title() . '</h2>';

				$mn_posts_output .= '<p>' . get_the_content() . '</p>';

				$mn_posts_output .= '<a class="btn btn-primary" href="' . get_post_meta(get_the_ID(), 'mn_button_link', true) . '">';

					$mn_posts_output .= get_post_meta(get_the_ID(), 'mn_button_text', true);

				$mn_posts_output .= '</a>';

			$mn_posts_output .= '</article>';

		endwhile;

		wp_reset_postdata();

	$mn_posts_output .= '</div>';

endif;