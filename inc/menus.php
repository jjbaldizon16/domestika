<?php

/**
 * Registra los menús de navegación
 */
function domestika_register_menus() {
	register_nav_menu( 'main-menu', __( 'Main menu', 'domestika' ) );
	register_nav_menu( 'mobile-menu', __( 'Mobile menu', 'domestika' ) );
}
add_action( 'after_setup_theme', 'domestika_register_menus' );