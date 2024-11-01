### Media Library Recovery

Contributors: krasenslavov, developry
Donate Link: https://krasenslavov.com/hire-krasen/
Tags: media, media library, recovery, uploads, restore
Requires at least: 5.0
Tested up to: 6.6
Requires PHP: 7.2
Stable tag: 1.5.9
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A tool that helps you restore and recover images from your `wp-content/uploads` folder after a database failure or reset.

## DESCRIPTION

A tool that helps you restore and recover images from your `wp-content/uploads` folder after a database failure or reset.

https://www.youtube.com/embed/JRsaCsaF-k4

[**Media Library Recovery**](https://bit.ly/3IHRaTb) allows you to restore existing image media files from the uploads folder and re-insert it into the WordPress database the correct way.

You can choose individual image files for recovery, or utilize the available filters and navigation within our custom Media Explorer to speed up the process.

## USAGE

Once you upload and activate the plugin.

Go to `Media > Media Recovery` from the main menu which will open the `Media Explorer`.

From the options you can choose to either show or hide the existing image media files already found on your server and database.

Here are the general steps you need to follow to use [**Media Library Recovery**](https://bit.ly/3IHRaTb):

1. Go to the `Media Explorer`.
2. Select/click the image files you want to recover.
3. Click on `Media Recovery...` button and wait until you images are rebuilt.
4. Go to `Media > Media Recovery` to verify that the images were recovered correctly.

_Note: The plugin **DOES NOT upload or overwrite any images on the server**, and it will only scan  for image files in the default WordPress uploads folder._

## FEATURES & LIMITATIONS

[**Media Library Recovery**](https://bit.ly/3IHRaTb) plugin is/can/does:

* restore and recover images after database failure or reset that are still available on your server.
* quickly rebuild your Media Library with our custom Media Explorer.
* hide all existing image files already found in the Media Library.
* show different icons for existing, recovarable, selected and unavailable image files for recovery.

Known issues and limitations:

* Original image files that have dimensions in the file name (e.g. icon-128x128.png) won't apprea in the plugin Media Explorer.
* Recover maximum 10 images at a time.
* Image file sizes cannot exceed 2MB; to cover the `max_execution_time` on most servers.

## DETAILED DOCUMENTATION

The step-by-step setup, usage, demos, video, and insights can be found on [**Media Library Recovery Pro**](https://mediarecoveryplugin.com/help).

## MEDIA LIBRARY RECOVERY PRO

If you are using the Free version of the plugin from the WordPress.org repository and would like to have the Pro features you can purchase the premium version from the [**Media Library Recovery Pro**](https://bit.ly/3IHRaTb) website.

Some of the features included in the Pro version of the plugin are:

* Support for ALL media types, _not only for images_.
* Change the default `wp-content/uploads` path.
* Unlimited number of files to recover at one time.	
* WordPress multisite support.
* Built-in uploads backup folder feature.
* Improved performance, manage larger file, and quicker recovery process.
* Pro user-friendly media file explorer with advanced search, filter, and sort options.	
* Priority support and regular updates for one year.

## FREQUENTLY ASKED QUESTIONS

Visit the [**Support**](https://wordpress.org/support/plugin/wp-media-recovery/) tab on this page to post your requests and questions.

We typically address all tickets within a few days.

If you have a feature request, we'll add it to the plugin wish list and consider implementing it in the next major version.

### Will I get any duplicate files?

You cannot duplicate or overwirte existing image media files.

### Does it work with WordPress multisite?

The free version does not work on WordPress multisite setup, however you can take a look at the [**Media Library Recovery Pro**](https://bit.ly/3IHRaTb) version which does support multisite.

### Which folders are scanned for lost media?

The free version works only with the default WordPress uploads folder `wp-content/uploads`. You need to have the [**Media Library Recovery Pro**](https://bit.ly/3IHRaTb) version to specify a custom uploads folder.

### Can I recover all media files?

The free version allows you only to restore and rebuild images. You can take a look at the [**Media Library Recovery Pro**](https://bit.ly/3IHRaTb) version which has support to a lot more file type.

### Do you offer additional support/customization?

Yes, you can get in touch with us by sending us your request on the [**Media Library Recovery Pro**](https://bit.ly/3IHRaTb) website.

## SCREENSHOTS

The screenshots below highlight the primary way to use and access the plugin inside WordPress.

1. screenshot-1.(png)
2. screenshot-2.(png)
3. screenshot-3.(png)
4. screenshot-4.(png)
5. screenshot-5.(png)

## INSTALLATION

The installation process for the plugin is standard and user-friendly. Please inform us if you face any challenges throughout the installation.

= Installation from WordPress =

1. Visit **Plugins > Add New**.
2. Search for **Media Library Recovery**.
3. Install and activate the **Media Library Recovery** plugin.
4. Click on **Settings** link or go to **Media > Media Recovery** from the main menu.

= Manual Installation =

1. Upload the contents of the entire `wp-media-recovery` folder to the `/wp-content/plugins/` directory.
2. Visit **Plugins**.
3. Activate the **Media Library Recovery** plugin.
4. Click on **Settings** link or go to **Media > Media Recovery** from the main menu.

= After Activation =

1. Select all the images you want to recover and hit the **Media Recovery...** button.
2. Go to **Media > Media Recovery** and you will see the newly restored image.

## CHANGELOG

= 1.5.9 =

- Fix - Mismatched text domain.
- Fix - Missing `$domain` parameter in function call.
- Fix - Not unslashed before sanitization. Use `wp_unslash()` or similar.
- Fix - Detected usage of a non-sanitized input variable.
- Fix - All output should be run through an escaping function.
- Fix - Detected usage of a possibly undefined superglobal array index. Use `isset()` or `empty()` to check the index exists before using it.
- Update - Replace all php files end of line sequence from `CRLF` to `LF`.
- Update - Don't show up the rating notice when toggle plugin activate/deactivate. 
- Update - Replace `MLR_PLUGIN_DOMAIN` with krasenslavov.com in Settings main page.
- Update - Make `_wpnonce` standard throughout the plugin php and js files.
- Update - `get_posts_supported()` to use `get_posts()` instead of direct db call with `$wpdb->prepare()`.
- Update - Update the correct support ticket link with `MLR_PLUGIN_WPORG_SUPPORT`.
- Update - Regenerate the .pot file.

= 1.5.8 =

- Update - PHP 8.3 compatibility check

= 1.5.7 =

- Update - WordPress 6.6 compatibility check

= 1.5.6 =

- New - Add compact mode with, default top menu menu link for the plugin
- Fix - Settings page layout for mobile devices

= 1.5.5 =

- Fix - Fix upgrade notice to show every 30 days.

= 1.5.4 =

- Update - WordPress 6.5 compatibility check

= 1.5.3 =

- Fix - Replace all `json_encode` with `wp_json_encode`, and be sure the `json_decode` returns an array with 2nd arg `true`
- Fix - Add `wp_nonce` for rating, upgrade notices and nav links
- Fix - Used `esc_html`, `esc_url`, `wp_kses` etc. to escape all missed strings

= 1.5.2 =

- New - Add post attachment option to be able to match the recovered media to parent post id
- Fix - Replace all in string variables from `${var}` to `{$var}`

= 1.5.1 =

- New - Add upgrade notice with transient and dissmis nd success button
- Update - Add UTM for plugin website links

= 1.5.0 =

- Update - Remove `$` from common in JS an use `jQuery` where needed
- Update - Replace 2023 from copyright to 2024

= 1.4.9 = 

- New - Add function `get_total_image_files` separate from `display_media_grid`
- Update - Optimize and refactor the media explorer grid with pagination
- Update - Remove custom `has_attachment` function and use the built-in WP `attachment_url_to_postid`
- Update - Add WP-Cron and large media libaries feature to Pro table

= 1.4.8 = 

- Fix - Add missing files & folder to the SVN repo

= 1.4.7 =

- Update - Remove admin user cap from `settings-menu.php`
- Update - Move `mlr_recover_media` ajax function into `settings-actions.php`
- Update - Restructure and match the Media Explorer HTML to match the Pro
- Update - Break SCSS `_media_explorer` into components
- Update - Update function in the `MLR_Admin` class to match the Pro
- Update - Merge `MLR_Explorer` into `Media_Library_Recovery` classes
- Update - Update development and workflow files to match the Pro

= 1.4.6 =

- New - Display total # image files in the /uploads folder
- Update - Enable hide existing media functionality onload and on recover media actions
- Fix - Add thumbnail height for media grid
- Fix - Change notice tag to `media_` from `upload_`

= 1.4.5 =

- Update - Break the requirements and settings into components
- Update - Break the SASS into componenets and fixed some small CSS issues
- Update - Refactor and optmize JS code, for the admin functions

= 1.4.4 =

- Fix - Change dimiss notice to go plugin page instead of `plugins.php`
- Fix - Update recover file date to be the same as file create on data
- Fix - Admin class `$value_arr` to `$values_arr`

= 1.4.3 =

- New - Add correct Ajax nonce and user capability checks
- Update - Move all admin php function it their own class

= 1.4.2 =

- New - Add PRO version table for promo
- Update - Add results per page and, redo the Media Explorer class
- Update - Rewrite the plugin assets JS and CSS, based on the Pro version
- Fix - Normalize some of the file paths
- Fix - Escape some URLs and HTML text for translation
- Fix - The ends of the Media Explorer pagination
- Fix - relative path and file for the rebuild media function

= 1.4.1 =

- Update - Update new development workflow and structure
- Update - Remove some of classes and convert to function based
- Update - CSS and some general styling

= 1.4.0 =

- New - Add new development workflow and structure
- New - Change namespace to match the developry structure
- New - Add status for large files with new icon
- New - Load thumbnails in file browser 150x150, if available
- New - Move global variables out of the classes
- New - Add some additional JS errors when recovering media
- New - Add `scaled` image file name support
- Update - Overall plugin and readme copy and text
- Update - Improve UI and UX with a larger font size and max-width container
- Update - Add file size limit to avoid 500 erorr of larger media files
- Update - Remove and unnecessary dev code snippets and variables
- Update - Move back all styles using SASS and SCSS files
- Fix - Skip `..` and `.` when looping the iterator

= 1.3.0 =

- Update - Add proper translation stings
- Update - Plugin `.pot` file in `/lang` folder
- Update - Test and check functionality with WordPress 6.1
- Update - Test and check functionality with WordPress 6.0

= 1.2.0 =

- Update - Improved UI and functionality
- Update - Better UX and new plugin framework

= 1.1.0 =

- Update - Total revision of the plugin with improved code and UI
- Fix - Added pagination with showing a maximum of 30 images per page
- Fix - Improved page loading time by using thumbnails (where available)
- Fix - Set a limit to be able to recover a maximum of 10 images at a time
- Fix - Removed the confirmation code functionality
- Fix - Loader image path

## UPGRADE NOTICE

_None_
