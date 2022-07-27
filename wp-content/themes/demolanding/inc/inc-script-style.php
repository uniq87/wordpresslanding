<?
    function addjQuery() {
        wp_deregister_script("jquery-core");
        wp_register_script("jquery-core", get_template_directory_uri()."/assets/js/jquery-3.6.0.min.js");
        wp_enqueue_script("jquery");
    }
    add_action("wp_enqueue_scripts", "addjQuery");

    function addScripts() {
        wp_register_script("owlCarousel", get_template_directory_uri()."/assets/js/owl.carousel.min.js");
        wp_enqueue_script("owlCarousel");
        wp_enqueue_script("script", get_template_directory_uri()."/assets/js/script.js");
    }
    add_action("wp_enqueue_scripts", "addScripts");

    function addStyles() {
        wp_enqueue_style("owlcarousel", get_template_directory_uri()."/assets/css/owl.carousel.min.css");
        wp_enqueue_style("main", get_stylesheet_uri());
    }
    add_action("wp_enqueue_scripts", "addStyles");
?>