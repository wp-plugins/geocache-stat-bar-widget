=== Geocache Stat Bar Widget ===
Contributors: jeffreyzinn, brandondove
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4041549
Tags: geocache, badge
Requires at least: 2.1
Tested up to: 2.7.1
Stable tag: 0.9

Official Geocache stat bar widget

== Description ==

We’ve built a simple little widget so you can display you Geocache Stat Bar as a widget in your WordPress theme’s sidebar!

So far this is only a 0.9 version release as there are still some features we’d like to add in before we call it final.  But there’s no reason not to use it now.  All you have to do is download the widget, install it in your plug-ins folder, add it to your side bar and edit the preferences.  Enter you username, GUID, select image and enter your message.

To obtain your GUID, log in to you Geocache account, go to “My Account,” then click “View My Stat Bar” (near the bottom on the right side under “Account Options”).  You’ll see some generated code in the text area there that looks something like this

<a href="http://www.geocaching.com/profile/?guid=db5629ca-06d2-4f95-8c72-bdb425934722" target="_blank"><img src="http://img.geocaching.com/stats/img.aspx?txt=Let's+go+geocaching&uid=db5629ca-06d2-4f95-8c72-bdb425934722&bg=1" border="0" title="Profile for lordleiter" alt="Profile for lordleiter"></a>

What you want to copy (and paste) is everything after “guid=” and before the last quote in line 1, like so - guid=db5629ca-06d2-4f95-8c72-bdb425934722” We know this is a bit archaic right now and is one of the things we hope to remedy before version 1.

Also, the Geocache Stat Bar comes 200 pixels wide, so be sure you sidebar area is set up to handle the width.

Original imagery used for the banner in the wordpress.org repository created by <a href="http://www.vectoropenstock.com" target="_blank">Vector Open Stock</a>.

[youtube http://youtu.be/SMtetuq_sg8]

== Installation ==

1. Upload `geocache-stat-bar.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Obtain your GUID: To obtain your GUID, log in to you Geocache account, go to “My Account,” then click “View My Stat Bar” (near the bottom on the right side under “Account Options”).  You’ll see some generated code in the text area there that looks something like this: <a href="http://www.geocaching.com/profile/?guid=db5629ca-06d2-4f95-8c72-bdb425934722" target="_blank"><img src="http://img.geocaching.com/stats/img.aspx?txt=Let's+go+geocaching&uid=db5629ca-06d2-4f95-8c72-bdb425934722&bg=1" border="0" title="Profile for lordleiter" alt="Profile for lordleiter"></a>. What you want to copy (and paste) is everything after “guid=” and before the last quote in line 1, like so - guid=db5629ca-06d2-4f95-8c72-bdb425934722” We know this is a bit archaic right now and is one of the things we hope to remedy before version 1.

== Frequently Asked Questions ==

= What is Geocaching? =

[youtube http://youtu.be/SMtetuq_sg8]

= How do I get my GUID =

To obtain your GUID, log in to you Geocache account, go to “My Account,” then click “View My Stat Bar” (near the bottom on the right side under “Account Options”).  You’ll see some generated code in the text area there that looks something like this

<a href="http://www.geocaching.com/profile/?guid=db5629ca-06d2-4f95-8c72-bdb425934722" target="_blank"><img src="http://img.geocaching.com/stats/img.aspx?txt=Let's+go+geocaching&uid=db5629ca-06d2-4f95-8c72-bdb425934722&bg=1" border="0" title="Profile for lordleiter" alt="Profile for lordleiter"></a>

What you want to copy (and paste) is everything after “guid=” and before the last quote in line 1, like so - guid=db5629ca-06d2-4f95-8c72-bdb425934722” We know this is a bit archaic right now and is one of the things we hope to remedy before version 1.

== Screenshots ==

1. Sample Geocache stat bar badge
2. Widget settings
