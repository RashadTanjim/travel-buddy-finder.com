<?php
/**
 * The template for displaying the footer.
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

			<?php wpex_hook_main_bottom(); ?>

		</main><!-- #main-content -->

		<?php wpex_hook_main_after(); ?>

		<?php wpex_hook_wrap_bottom(); ?>

	</div><!-- #wrap -->

	<?php wpex_hook_wrap_after(); ?>

</div><!-- #outer-wrap -->

<?php wpex_outer_wrap_after(); ?>

<?php wp_footer(); ?>

</body>
</html>