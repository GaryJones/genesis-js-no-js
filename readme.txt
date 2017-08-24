=== Genesis JS / No JS ===
Contributors: GaryJ
Donate link: http://code.garyjones.co.uk/donate/
Tags: genesis, js-no-js
Requires at least: 4.6
Tested up to: 4.8.1
Stable tag: 2.1.0

Make front end styling easier for child themes on the Genesis Framework based on whether JavaScript is enabled or not.

== Description ==

Make front end styling easier for child themes on the <a href="http://genesis-theme-framework.com/">Genesis Framework</a> based on whether JavaScript is enabled or not.

Adds a `no-js` body class to the front end, and a script on `genesis_before` which immediately changes the class to `js` if JavaScript is enabled.
This is how WP does things on the back end, to allow different styles for the same elements depending if JavaScript is active or not.

This plugin is only useful if you're using a child theme of the Genesis Framework since it uses the `genesis_before` hook.

== Installation ==

Once this plugin is installed and activated, then it will work automatically. There are no options, and nothing to set-up.

= Upload =

1. Download the latest tagged archive (choose the "zip" option).
2. Go to the __Plugins -> Add New__ screen and click the __Upload__ tab.
3. Upload the zipped archive directly.
4. Go to the Plugins screen and click __Activate__.

= Manual =

1. Download the latest tagged archive (choose the "zip" option).
2. Unzip the archive.
3. Copy the folder to your `/wp-content/plugins/` directory.
4. Go to the Plugins screen and click __Activate__.

Check out the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

= Git =

Using git, browse to your `/wp-content/plugins/` directory and clone this repository:

`git clone git@github.com:GaryJones/genesis-js-no-js.git`

Then go to your Plugins screen and click __Activate__.

= Composer =

`composer require gamajo/genesis-js-no-js`

== Frequently Asked Questions ==

= What does this plugin actually do? =

If you look at the source of a WordPress back end page, you'll see it has a body class of `no-js`. Immediately after the opening `body` tag is a small script which replaces `no-js` with `js` (you can see the amended class with browser developer tools).

WordPress uses this to apply different styles to the same elements, depending on whether JavaScript is present or not.

This plugin recreates the same effect, but for the front end of <a href="http://genesis-theme-framework.com/">Genesis Framework</a> child themes.

= Shouldn't the script be at the end of the page? =

Usually, yes, but it's a fairly small script, so does not block rendering of other content for any noticeable length of time.

Doing it immediately also reduces a flash of incorrectly styled content, as the page does not load with `no-js` styles, then switch to `js` once everything has finished loading.

== Changelog ==

See <a href="https://github.com/GaryJones/genesis-js-no-js/blob/master/CHANGELOG.md">CHANGELOG.md</a> for all of the changes.

== Upgrade Notice ==

= 3.0.0 =
Requires PHP 7.1 and WordPress 4.6.
