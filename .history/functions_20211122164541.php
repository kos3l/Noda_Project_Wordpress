<?php
function Noda_enqueue_styles() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('Nodastyle', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', "Noda_enqueue_styles" );
?>