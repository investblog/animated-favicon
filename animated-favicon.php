<?php
/**
 * Plugin Name: Animated Favicon Plugin
 * Plugin URI: https://github.com/investblog/animated-favicon/
 * Description: Adds an animated favicon to your WordPress website
 * Version: 1.0.0
 * Author: Invest Blog
 * Author URI: https://investblog.io
 */

function add_animated_favicon() {
    echo '<link rel="icon" href="' . esc_url( get_template_directory_uri() ) . '/favicon.svg" type="image/svg+xml">';
    echo '<script>
            var counter = 1;
            const NumberOfPics = 6;
            var nodeFavicon = document.getElementsByTagName("link");

            function animateFavicon() {
                for (var i = 0; i < nodeFavicon.length; i++) {
                    if (nodeFavicon[i].getAttribute("rel") == "icon" || nodeFavicon[i].getAttribute("rel") == "shortcut icon") {
                        nodeFavicon[i].setAttribute("href", "'. esc_url( get_template_directory_uri() ) .'/favicon/favicon-" + counter + ".svg");
                    }
                }

                if (counter < NumberOfPics) {
                    setTimeout(animateFavicon, 3000);
                    counter++;

                    if (counter == NumberOfPics) {
                        counter = 1;
                    }
                }
            }

            animateFavicon();
        </script>';
}

add_action( 'wp_head', 'add_animated_favicon' );
