=== Plugin Name ===
Contributors: Parser
Tags: education, education, video, learning, teaching, social, links, iframe, shortcodes, shortcode, plugin
Requires at least: 3.0.1
Tested up to: 4.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Insert a zaption video lesson iframe or modal embed into your site using a shortcode.

== Description ==

Insert a zaption video lesson into your site using a shortcode. An lesson id attribute is required. Adding a type attribute and setting it to modal will give you the popup version. Using the modal version will add a javascript file to your site hosted from https://www.zaption.com.

iFrame Embed - This code will display the lesson in a traditional iFrame. One thing to note is that the sidebar of the Zaption player requires a width of at least 980px.

JavaScript Modal - This will display a thumbnail of the lesson and the lesson will open in a modal over the page. This is a great option if you have a narrow page that does not allow for the full width of the iFrame.

Examples:

* iframe embed: `[zap id=56788f32338960ab1a1e83ac]`

* modal embed: `[zap id=56788f32338960ab1a1e83ac type=modal]`

Don't just watch, LEARN!

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. You can now use the shortcode in your posts.

== Changelog ==

= 1.0.2 =
* Added ID to inserted script tag

= 1.0.1 =
* Fixed trailing whitespace

= 1.0 =
* Added zaption iframe and modal shortcodes
