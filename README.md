# Animated Favicon Wordpress Plugin

Animated Favicon Plugin adds an animated favicon to your WordPress site. It switches between multiple images at set intervals and is easy to install and configure. The plugin assumes icons are located in the active theme's `/favicon` directory and is licensed under the GPL-2.0+ License.

## Installation

1. Upload the plugin files to the `/wp-content/plugins/animated-favicon` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Configure the plugin settings on the settings page.

## Usage

To see Animated Favicon Plugin in action, please visit [investblog.io](https://investblog.io) in your web browser.

## Frequently Asked Questions

### How can I change the number of images in the animation?

To change the number of images in the animation, modify the value of the `NumberOfPics` constant in the JavaScript code of the plugin.

### How can I change the frequency of image switching?

To change the frequency of image switching, modify the value of the `setTimeout()` function in the JavaScript code of the plugin.

### What image formats can be used for the icons?

By default, the plugin expects the icons to be in SVG format. However, other image formats can be used as well. To use a different image format, modify the `animateFavicon()` JavaScript function in the plugin code.

### Where should the icons be located?

The plugin assumes that the icons for the animation are located in the active theme directory under the `/favicon` directory.

## Contributing

We welcome contributions to Animated Favicon Plugin. Please feel free to open a pull request or issue on the [GitHub repository](https://github.com/your-username/animated-favicon).

## License

Animated Favicon Plugin is licensed under the GPL-2.0+ License.
