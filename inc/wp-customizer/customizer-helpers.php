<?php

function simpletheme_get_option( $setting, $default ) {
    $options = get_option( 'option_name', array() );
    $value = $default;
    if ( isset( $options[ $setting ] ) ) {
        $value = $options[ $setting ];
    }
    return $value;
}

function simpletheme_get_theme_mod($name, $default='') {
    $mods = get_theme_mods();
    if(!isset($mods[$name])) {
        //echo $default . ";";
        return $default;
    }
    return get_theme_mod($name, $default);
}

function pseudo_css_selector($selector, $x) {
    return implode(',', array_map(function($single_selector) use ($x){
        return trim($single_selector) . $x;
    }, explode(',', $selector)));
}

function css_selector_hover($selector) {
    return pseudo_css_selector($selector, ':hover');
}

function css_selector_active($selector) {
    return pseudo_css_selector($selector, ':active');
}

function css_selector_focus($selector) {
    return pseudo_css_selector($selector, ':focus');
}

function css_selector_visited($selector) {
    return pseudo_css_selector($selector, ':visited');
}

function css_selector_link($selector) {
    return pseudo_css_selector($selector, ':link');
}

function simpletheme_the_content($post_id, $more_link_text = null, $strip_teaser = false) {
        $content = get_post_field('post_content', $post_id);
        /**
         * Filters the post content.
         *
         * @since 0.71
         *
         * @param string $content Content of the current post.
         */
        $content = apply_filters( 'the_content', $content );
        $content = str_replace( ']]>', ']]&gt;', $content );
        echo $content;
}