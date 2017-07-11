<?php if ( $hc_query->have_posts() ) :

	$hc_posts_output .= '<div class="hc_post__container row">';

		while ( $hc_query->have_posts() ) : $hc_query->the_post();

			$hc_class_array = get_post_class("hcpost col-sm-12 col-md-6 col-lg-4");

			$hc_posts_output .= '<article class="';

			foreach ( $hc_class_array as $key => $class) {

				$hc_posts_output .= '' . $class . ' ';

			}

			$hc_posts_output .= '">';

				$hc_posts_output .= get_the_post_thumbnail(get_the_ID(), "medium");

				$hc_posts_output .= '<h2>' . get_the_title() . '</h2>';

				$hc_posts_output .= '<p>' . get_the_content() . '</p>';

				$hc_posts_output .= '<a class="btn btn-primary" href="' . get_post_meta(get_the_ID(), 'hc_button_link', true) . '">';

					$hc_posts_output .= get_post_meta(get_the_ID(), 'hc_button_text', true);

				$hc_posts_output .= '</a>';

			$hc_posts_output .= '</article>';

		endwhile;

		wp_reset_postdata();

	$hc_posts_output .= '</div>';

endif;