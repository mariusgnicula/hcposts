<div class="wrap">

	<div class="hc-shorgen">

		<p>

			<?php _e('This is a HCP Shortcode Generator. Make sure to copy the shortcode and insert it wherever you like.', 'hcp_posts'); ?>

		</p>

		<form>

			<p>

				<label for="hc-shortgen_number">

					<?php _e('Please select the number of posts you wish to display', 'hcp_posts'); ?>

				</label> <br />

				<input style="width: 100%; max-width: 400px" type="number" name="hc-shortgen_number" id="hcShortGenNumber">

			</p>

			<p>
				<label for="hc-shortgen_number">

					<?php _e('Please select which posts you wish to display', 'hcp_posts'); ?>

				</label> <br />

				<?php

				$hc_args = [
					'numberposts' => -1,
					'post_type'   => 'hcposts'
				];

				$hc_posts = get_posts($hc_args);

				if ( $hc_posts ) {

					echo '<select multiple style="width: 100%; max-width: 400px" id="hcShortGenPosts">';

					foreach ( $hc_posts as $hc_post ) {

						echo '<option value="' . $hc_post->ID . '">' . $hc_post->post_title .' (' . get_the_time('d.m.Y', $hc_post->ID) . ')</option>';

					}

					echo '</select>';

				}

				?>

			</p>

			<p>

				<input type="submit" value="<?php _e('Generate Shortcode', 'hcp_posts'); ?>" id="hcShortGenSubmit">

			</p>

		</form>

		<div class="hc-shortgen__result" id="hcShortGenResult"></div>

	</div>

</div>