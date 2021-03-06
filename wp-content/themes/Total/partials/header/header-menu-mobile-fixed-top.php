<?php
/**
 * Mobile Icons Header Menu.
 *
 * @package Total WordPress Theme
 * @subpackage Partials
 * @version 4.6.6.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Menu Location
$menu_location = apply_filters( 'wpex_main_menu_location', 'main_menu' );

// Multisite global menu
$ms_global_menu = apply_filters( 'wpex_ms_global_menu', false );

// Display if menu is defined
if ( has_nav_menu( $menu_location ) || $ms_global_menu ) : ?>

	<div id="wpex-mobile-menu-fixed-top" class="clr wpex-mobile-menu-toggle wpex-hidden">
		<div class="container clr">
			<div class="wpex-inner">
				<a href="#mobile-menu" class="mobile-menu-toggle"><?php echo apply_filters( 'wpex_mobile_menu_open_button_text', '<span class="fa fa-navicon"></span>' ); ?><span class="wpex-text"><?php echo wpex_get_mod( 'mobile_menu_toggle_text', esc_html__( 'Menu', 'total' ) ); ?></span></a>
				<?php /* if ( $extra_icons = wpex_get_mobile_menu_extra_icons() ) { ?>
					<div class="wpex-aside"><?php echo $extra_icons; ?></div>
				<?php } */ ?>
			</div>
		</div>
	</div>

<?php endif; ?>