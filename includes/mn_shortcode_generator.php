<div class="wrap">

	<div class="mn-shorgen">

		<p>

			<?php _e('This is a MNP Shortcode Generator. Make sure to copy the shortcode and insert it wherever you like.', 'mnp_posts'); ?>

		</p>

		<form>

			<p>

				<label for="mn-shortgen_number">

					<?php _e('Please select the number of posts you wish to display', 'mnp_posts'); ?>

				</label> <br />

				<input
					style="width: 100%; max-width: 400px"
					type="number"
					name="mn-shortgen_number"
					id="mnShortGenNumber"
					placeholder="<?php _e('Please insert number here', 'mnp_posts'); ?>">

			</p>

			<p>
				<label for="mn-shortgen_number">

					<?php _e('Please select which posts you wish to display', 'mnp_posts'); ?>

				</label> <br />

				<?php

				$mn_args = [
					'numberposts' => -1,
					'post_type'   => 'mnposts'
				];

				$mn_posts = get_posts($mn_args);

				if ( $mn_posts ) {

					echo '<select multiple style="width: 100%; max-width: 400px" id="mnShortGenPosts">';

					foreach ( $mn_posts as $mn_post ) {

						echo '<option value="' . $mn_post->ID . '">' . $mn_post->post_title .' (' . get_the_time('d.m.Y', $mn_post->ID) . ')</option>';

					}

					echo '</select>';

				}

				?>

			</p>

			<p>

				<input type="submit" value="<?php _e('Generate Shortcode', 'mnp_posts'); ?>" id="mnShortGenSubmit">

			</p>

		</form>

		<div class="mn-shortgen__result" id="mnShortGenResult"></div>

	</div>

</div>