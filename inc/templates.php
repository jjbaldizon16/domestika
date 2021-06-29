<?php

/**
 * Cambia el contenido del extracto por un botón
 *
 * @param $more
 *
 * @return string
 */
function domestika_excerpt_more( $more ) {
	return $more . ' <p class="read-more"><a class="button" href="' . get_permalink() . '">' . __( 'Read more', 'domestika' ) . '</a></p>';
}
add_filter( 'excerpt_more', 'domestika_excerpt_more' );