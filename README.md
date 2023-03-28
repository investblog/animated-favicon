# Animated Favicon Plugin for Wordpdress

Animated Favicon Plugin adds an animated favicon to your WordPress site. It switches between multiple images at set intervals and is easy to install and configure. The plugin assumes icons are located in the active theme's directory and is licensed under the GPL-2.0+ License.

The plugin includes a settings page where you can adjust the number of images in the animation, the timeout between image switches, and the file extension of the icons. The file extension should be included in the filename of each icon, for example, `favicon-1.svg`, `favicon-2.svg`, etc.

## Installation

1. Upload the plugin files to the `/wp-content/plugins/animated-favicon` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Configure the plugin settings on the settings page.

## Usage

To see Animated Favicon Plugin in action, please visit [investblog.io](https://investblog.io) in your web browser.

## Frequently Asked Questions

### How can I change the number of images in the animation?

You can change the number of images in the animation on the settings page.

### How can I change the frequency of image switching?

You can change the frequency of image switching on the settings page.

### What image formats can be used for the icons?

You can use any image format for the icons as long as the file extension is included in the filename. The icons should be named `favicon-1`, `favicon-2`, etc. and located in the active theme's directory. This is usually located at `/wp-content/themes/your-theme/`. Replace "your-theme" with the name of the active theme on your site.

## Contributing

We welcome contributions to Animated Favicon Plugin. Please feel free to open a pull request or issue on the [GitHub repository](https://github.com/investblog/animated-favicon).

## Changelog

### 1.1.0
- Added settings page to adjust number of images, timeout, and file extension

### 1.0.0
- Initial release

## License

Animated Favicon Plugin is licensed under the GPL-2.0+ License.

### Example: Creating an animated favicon with Figma

1. Open Figma and create a new project.

2. Create a square Frame for each frame of your animation. It's recommended to use a 32x32 or 64x64 pixels size to keep the images sharp on different devices. Create as many frames as needed for your animation.

3. Arrange the frames in a single row or column to make exporting easier.

![Icons](/preview.png)

4. Draw or import elements on each frame, creating a sequence of frames for the animation. Ensure that there's only one icon per frame.

5. Select all the frames, then go to the "Export" menu in the bottom-right corner of the Figma panel. Here you can choose the file format for exporting (SVG is recommended, but ICO, PNG, and GIF are also available).

6. Click the "Export Selected" button to save all animation frames as separate files. Make sure the filenames match the format specified in plugin code (e.g., favicon-1.svg, favicon-2.svg, etc.).

7. After saving all the favicon files, upload them to your WordPress theme's directory. This is usually located at `/wp-content/themes/your-theme/`. Replace "your-theme" with the name of the active theme on your site.

Now that you've created the animation in Figma and placed the favicon files in the correct folder, your plugin should work and display the animated favicon on your site. If you encounter any issues, please let me know, and I'll help you troubleshoot.
