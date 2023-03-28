<?php
/**
 * Plugin Name: Animated Favicon Plugin
 * Plugin URI: https://github.com/investblog/animated-favicon/
 * Description: Adds an animated favicon to your WordPress website
 * Version: 1.0.0
 * Author: Invest Blog
 * Author URI: https://investblog.io
 */
function add_favicon() {
    $num_of_pics = get_option('animated_favicon_number_of_pics', 6);
    $file_extension = get_option('animated_favicon_file_extension', 'svg');
    $template_directory_uri = esc_url(get_template_directory_uri());
    echo '<link rel="icon" href="' . $template_directory_uri . '/favicon-1.' . $file_extension . '" type="image/' . $file_extension . '">';
    echo '<script>
            var counter = 1;
            const NumberOfPics = ' . $num_of_pics . ';
            var nodeFavicon = document.getElementsByTagName("link");
            function animateFavicon() {
                for (var i = 0; i < nodeFavicon.length; i++) {
                    if (nodeFavicon[i].getAttribute("rel") == "icon" || nodeFavicon[i].getAttribute("rel") == "shortcut icon") {
                        nodeFavicon[i].setAttribute("href", "' . $template_directory_uri . '/favicon-" + counter + ".' . $file_extension . '");
                    }
                }
                if (counter < NumberOfPics) {
                    setTimeout(animateFavicon, ' . get_option('animated_favicon_timeout', 3000) . ');
                    counter++;
                    if (counter == NumberOfPics) {
                        counter = 1;
                    }
                }
            }
            animateFavicon();
        </script>';
}

add_action('wp_head', 'add_favicon');


function animated_favicon_settings_init() {
    add_settings_section(
        'animated_favicon_settings_section',
        'Animated Favicon Settings',
        'animated_favicon_settings_section_callback',
        'animated_favicon'
    );

    add_settings_field(
        'animated_favicon_number_of_pics',
        'Number of Pics',
        'animated_favicon_number_of_pics_callback',
        'animated_favicon',
        'animated_favicon_settings_section'
    );

    add_settings_field(
        'animated_favicon_timeout',
        'Timeout (in ms)',
        'animated_favicon_timeout_callback',
        'animated_favicon',
        'animated_favicon_settings_section'
    );

    add_settings_field(
        'animated_favicon_file_extension',
        'File Extension',
        'animated_favicon_file_extension_callback',
        'animated_favicon',
        'animated_favicon_settings_section'
    );

    register_setting(
        'animated_favicon_settings_group',
        'animated_favicon_number_of_pics',
        array(
            'type' => 'integer',
            'sanitize_callback' => 'absint',
            'default' => 6
        )
    );

    register_setting(
        'animated_favicon_settings_group',
        'animated_favicon_timeout',
        array(
            'type' => 'integer',
            'sanitize_callback' => 'absint',
            'default' => 3000
        )
    );

    register_setting(
        'animated_favicon_settings_group',
        'animated_favicon_file_extension',
        array(
            'type' => 'string',
            'sanitize_callback' => 'sanitize_file_extension',
            'default' => 'svg'
        )
    );
}

add_action('admin_init', 'animated_favicon_settings_init');
add_action('admin_menu', 'animated_favicon_admin_menu');

function sanitize_file_extension($input) {
    $allowed_extensions = array('ico', 'png', 'gif', 'svg');
    if (in_array($input, $allowed_extensions)) {
        return $input;
    }
    return 'svg';
}

function animated_favicon_admin_menu() {
    add_options_page(
        'Animated Favicon Settings',
        'Animated Favicon',
        'manage_options',
        'animated_favicon',
        'animated_favicon_options_page'
    );
}

function animated_favicon_options_page() {
    ?>
    <div class="wrap">
        <h1>Animated Favicon Settings</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('animated_favicon_settings_group');
            do_settings_sections('animated_favicon');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function animated_favicon_settings_section_callback() {
    echo '<p>Configure the settings for the Animated Favicon plugin.</p>';
}

function animated_favicon_number_of_pics_callback() {
    $num_of_pics = get_option('animated_favicon_number_of_pics', 6);
    echo '<input type="number" name="animated_favicon_number_of_pics" value="' . $num_of_pics . '" min="1" max="100" step="1">';
}

function animated_favicon_timeout_callback() {
    $timeout = get_option('animated_favicon_timeout', 3000);
    echo '<input type="number" name="animated_favicon_timeout" value="' . $timeout . '" min="100" max="60000" step="100">';
}

function animated_favicon_file_extension_callback() {
    $file_extension = get_option('animated_favicon_file_extension', 'svg');
    echo '<select name="animated_favicon_file_extension">
            <option value="ico"' . selected($file_extension, 'ico', false) . '>ico</option>
            <option value="png"' . selected($file_extension, 'png', false) . '>png</option>
            <option value="gif"' . selected($file_extension, 'gif', false) . '>gif</option>
            <option value="svg"' . selected($file_extension, 'svg', false) . '>svg</option>
          </select>';
}
