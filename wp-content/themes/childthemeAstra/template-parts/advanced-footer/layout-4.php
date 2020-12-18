<?php
/**
 * Footer Layout 4
 *
 * @package Astra Addon
 * @since   Astra 1.0.12
 */

/**
 * Hide advanced footer markup if:
 *
 * - User is not logged in. [AND]
 * - All widgets are not active.
 */
if ( ! is_user_logged_in() ) {
	if (
		! is_active_sidebar( 'advanced-footer-widget-1' ) &&
		! is_active_sidebar( 'advanced-footer-widget-2' ) &&
		! is_active_sidebar( 'advanced-footer-widget-3' ) &&
		! is_active_sidebar( 'advanced-footer-widget-4' )
	) {
		return;
	}
}

$classes[] = 'footer-adv';
$classes[] = 'footer-adv-layout-4';
$classes   = implode( ' ', $classes );
?>

<div class="<?php echo esc_attr( $classes ); ?>">
	<div class="footer-adv-overlay">
		<div class="ast-container">
			<div class="ast-row">
				 
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12 footer-adv-widget footer-adv-widget-3" <?php echo wp_kses_post( apply_filters( 'astra_sidebar_data_attrs', '', 'advanced-footer-widget-3' ) ); ?>>
					<?php astra_get_footer_widget( 'advanced-footer-widget-3' ); ?>
					<div style="width: 100%"><iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Ana%20L%C3%A1zaro,%20C/%20Francisco%20Medina%20Y%20Mendoza%2021%20Bloque%2010%20A%20Puerta%206,%2019171%20Cabanillas%20del%20Campo,%20Guadalajara,%20Espa%C3%B1a+(Grafimprex)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
				</div>
				<div class="ast-col-lg-6 ast-col-md-6 ast-col-sm-12 ast-col-xs-12 footer-adv-widget footer-adv-widget-4" <?php echo wp_kses_post( apply_filters( 'astra_sidebar_data_attrs', '', 'advanced-footer-widget-4' ) ); ?>>
					<?php astra_get_footer_widget( 'advanced-footer-widget-4' ); ?>
				</div>
			</div><!-- .ast-row -->
		</div><!-- .ast-container -->
	</div><!-- .footer-adv-overlay-->
</div><!-- .ast-theme-footer .footer-adv-layout-4 -->
