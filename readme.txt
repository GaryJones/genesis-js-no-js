=== Plugin Name ===
Contributors: GaryJ
Donate link: http://code.garyjones.co.uk/donate/
Tags: genesis, js-no-js
Requires at least: 3.0
Tested up to: 4.8.1
Stable tag: 2.1.0

Make front-end styling easier for child themes on the Genesis Framework based on whether JavaScript is enabled or not.

== Description ==

Make front-end styling easier for child themes on the <a href="http://genesis-theme-framework.com/">Genesis Framework</a> based on whether JavaScript is enabled or not.

Adds a `no-js` body class to the front-end, and a script on `genesis_before` which immediately changes the class to `js` if JavaScript is enabled.
This is how WP does things on the back-end, to allow different styles for the same elements depending if JavaScript is active or not.

This plugin is only useful if you're using a child theme of the Genesis Framework since it uses the `genesis_before` hook.

== Installation ==

1. Unzip and upload `genesis-js-no-js` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

Once installed and activated, then the plugin will work. There are no options, and nothing to set-up.

== Frequently Asked Questions ==

= What does this plugin actually do? =

If you look at the source of a WordPress back-end page, you'll see it has a body class of `no-js`. Immediately after the opening `body` tag is a small script which replaces `no-js` with `js` (you can see the amended class with Firebug / Inspector).

WordPress uses this to apply different styles to the same elements, depending on whether JavaScript is present or not.

This plugin recreates the same effect, but for the front-end of <a href="http://genesis-theme-framework.com/">Genesis Framework</a> child themes.

= Shouldn't the script be at the end of the page? =

Usually, yes, but it's a fairly small script, so does not block rendering of other content for any noticeable length of time.

Doing it immediately also reduces a flash of incorrectly styled content, as the page does not load with `no-js` styles, then switch to `js` once everything has finished loading.

== Changelog ==

= 2.1.0 =
* Load plugin text domain.
* Add `composer.json`.
* Better change log format.
* Tweak documentation.

= 2.0.0 =
* GitHub Updater plugin support
* Refactor class into a new file. Stops using half-implemented Singleton pattern.
* Update documentation.

= 1.0.1 =
* Improved plugin so script is hooked in with priority 1 - avoids a theme placing anything before the script (props [Josh Stauffer](http://twitter.com/joshstauffer))

= 1.0 =
* First public version.

== Upgrade Notice ==

= 2.1.0 =
Load plugin text domain.

= 2.0.0 =
Update to add GitHub Updater plugin support.

= 1.0.1 =
Minor change to avoid potential problems with themes hooking in elements before the script.

= 1.0 =
Update from nothingness. You will feel better for it.
