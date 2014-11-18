 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function parallax_home_genesis_meta() {

	if ( is_active_sidebar( 'home-section-1' ) || is_active_sidebar( 'home-section-2' ) || is_active_sidebar( 'home-section-3' ) || is_active_sidebar( 'home-section-4' ) || is_active_sidebar( 'home-section-5' )  || is_active_sidebar( 'home-section-6' )  || is_active_sidebar( 'home-section-7' )  || is_active_sidebar( 'home-section-8' )  || is_active_sidebar( 'home-section-9' )  || is_active_sidebar( 'home-section-10' ) ) {
