<?php

function domestika_setup_editor() {
	$editor_color_palette = [
		[
			'name' => __( 'Orange', 'domestika' ),
			'slug' => 'domestika-orange',
			'color' => '#f47a29',
		],
		[
			'name' => __( 'Black', 'domestika' ),
			'slug' => 'domestika-black',
			'color' => '#333',
		],
		[
			'name' => __( 'Light Gray', 'domestika' ),
			'slug' => 'domestika-light-gray',
			'color' => '#e6e6e6',
		],
		[
			'name' => __( 'Dark Gray', 'domestika' ),
			'slug' => 'domestika-dark-gray',
			'color' => '#8a8a8a',
		],
		[
			'name' => __( 'White', 'domestika' ),
			'slug' => 'domestika-white',
			'color' => '#fefefe',
		],
	];
  add_theme_support( 'editor-color-palette', $editor_color_palette );
  add_theme_support( 'disable-custom-colors' );

	$editor_font_sizes = [
		[
			'name' => __( 'Small', 'domestika' ),
			'slug' => 'domestika-small',
			'size' => 15.2,
		],
		[
			'name' => __( 'Normal', 'domestika' ),
			'slug' => 'domestika-normal',
			'size' => 19,
		],
		[
			'name' => __( 'Large', 'domestika' ),
			'slug' => 'domestika-large',
			'size' => 35,
		],
		[
			'name' => __( 'Huge', 'domestika' ),
			'slug' => 'domestika-huge',
			'size' => 50,
		],
	];
  add_theme_support( 'editor-font-sizes', $editor_font_sizes );
  add_theme_support( 'disable-custom-font-sizes' );

	// Estilos del Editor de WP (Gutenberg)
	add_theme_support('editor-styles');
	add_editor_style( 'style-editor.css' );

}

add_action( 'after_setup_theme', 'domestika_setup_editor' );
