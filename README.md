# Genesis js / no-js

Make front-end styling easier for child themes on the Genesis Framework based on whether JavaScript is enabled or not.

## Description 

If you look at the source of a WordPress back-end page, you'll see it has a body class of `no-js`. Immediately after the opening `body` tag is a small script which replaces `no-js` with `js` (you can see the amended class with Firebug / Inspector).

WordPress uses this to apply different styles to the same elements, depending on whether JavaScript is present or not.

This plugin recreates the same effect, but for the front-end of <a href="http://genesis-theme-framework.com/">Genesis Framework</a> child themes. It uses the `genesis_before` hook supplied by Genesis, so it won't work for other themes.

The script is fairly small so does not block rendering of other content for any noticeable length of time.

Putting the script at the top also reduces a flash of incorrectly styled content, as the page does not load with `no-js` styles, then switch to `js` once everything has finished loading.

## Installation

Once this plugin is installed and activated, then it will work automatically. There are no options, and nothing to set-up.

### Upload

1. Download the latest tagged archive (choose the "zip" option).
2. Go to the __Plugins -> Add New__ screen and click the __Upload__ tab.
3. Upload the zipped archive directly.
4. Go to the Plugins screen and click __Activate__.

### Manual

1. Download the latest tagged archive (choose the "zip" option).
2. Unzip the archive.
3. Copy the folder to your `/wp-content/plugins/` directory.
4. Go to the Plugins screen and click __Activate__.

Check out the Codex for more information about [installing plugins manually](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

### Git

Using git, browse to your `/wp-content/plugins/` directory and clone this repository:

`git clone git@github.com:GaryJones/genesis-js-no-js.git`

Then go to your Plugins screen and click __Activate__.

## Updates

This plugin supports the [GitHub Updater](https://github.com/afragen/github-updater) plugin, so if you install that, this plugin becomes automatically updateable direct from GitHub.

## Credits

Built by [Gary Jones](https://twitter.com/GaryJ)  
Copyright 2011 [Gamajo Tech](http://gamajo.com/)