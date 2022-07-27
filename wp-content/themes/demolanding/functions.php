<?php
    add_theme_support("custom-logo");

    require(get_template_directory()."/inc/inc-script-style.php");
    add_filter('wpcf7_autop_or_not', '__return_false');
    add_filter('wpcf7_form_elements', function($content) {
        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
        return $content;});
?>