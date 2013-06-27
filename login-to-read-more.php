<?php
/*
Plugin Name: Login to read more
Plugin URI: http://wpist.me/
Description: Display content enclosed by the shortcode for registered users only.
Author: Takayuki Miyauchi
Version: 0.2.0
Author URI: http://wpist.me/
*/

new Plugin_Login_Read_More();

class Plugin_Login_Read_More {

function __construct()
{
    add_action('plugins_loaded', array($this, 'plugins_loaded'));
}

public function plugins_loaded()
{
    add_shortcode('auth', array($this, 'login_read_more'));
}

public function login_read_more($p, $content = null) {
    if (is_user_logged_in() && !is_null( $content )) {
        return $content;
    } else {
        extract(shortcode_atts(array(
            'class' => apply_filters(
                'login_to_read_more_class',
                'btn btn-primary btn-large btn-readmore'
            ),
            'href' => apply_filters(
                'login_to_read_more_href',
                wp_login_url(get_permalink())
            ),
            'text' => apply_filters(
                'login_to_read_more_text',
                'Login to read more'
            ),
        ), $p));
        return apply_filters(
            'login_to_read_more_html',
            sprintf(
                '<a class="%s" href="%s">%s</a>',
                esc_attr($class),
                esc_attr($href),
                $text
            )
        );
    }
}

}

