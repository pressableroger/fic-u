=== Pressable Automated Migration ===
Contributors: pressable, blogvault, akshatc
Tags: pressable, migration
Requires at least: 4.0
Tested up to: 5.0 
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

The Pressable Automated Migration plugin makes migrating sites to the Pressable platform effortless. Whether you are a developer with tons of experience moving sites or have never moved a site before, this plugin does all the hard work so that you don't have to. Move as many sites as you need, quickly and with minimal interaction.


**FEATURES**

* 1 click migration process simply requires your Pressable SFTP information to move any site from you current host.
* Move your live site to a Pressable staging environment to preview how your site works before you make DNS changes.
* Once you're done previewing the site on our servers, run the migration one last time to synchronize any changes that were made since it was first moved.
* Handles all database adjustments automatically so you don't have to.
* Doesn't require you to have any expensive plugins or hire any migration services.

== Frequently Asked Questions ==
=What information is required to migrate my site?=
Required information includes an email address, your Pressable SFTP credentials, your Pressable site name, and a destination URL.

=Where can I find instructions for using the plugin?=
You can find a complete automated migration guide in our knowledge base by **[clicking here](https://kb.pressable.com/article/using-the-pressable-automated-migration-plugin/)**

== Instructions ==

**Before Starting Your Migration**

Before migrating your site to Pressable, you'll need to have a few things already established:

* An active account with Pressable.
* A site **[deployed on our system](https://kb.pressable.com/article/adding-new-site/)** where you will be migrating your site to.
* A site that is ready to be moved to the Pressable platform.

**Obtain Migration Setting Information**

Login to https://my.pressable.com and open up the settings page for the site you would like to migrate. Click on the "Migrate Site" tab and find the settings for the automated migration plugin near the top.

You'll need the settings from here to complete the next steps in the migration process.

**Install the Automated Migration Plugin**

Login to the site that you will be moving to the Pressable platform (the source site) and navigate to Plugins > Add New. In the plugin search box, search for "Pressable Automated Migration". When the plugin listing comes up, click on Install and then Activate.

Navigate to the plugin settings page and insert the details that you obtained from the "Migrate" tab inside of https://my.pressable.com.

**Migrate the Site**

Click on the "Migrate" button and you will see the BlogVault migration page come up. BlogVault will move the site to Pressable servers and provide live updates on the status of the migration. The amount of time a site takes to migrate will vary based on the size of your site.

You will receive an email upon completion of the migration and your migrated site is now visible at the site's staging URL.

**After Migration**

After your migration is complete, please review the site to ensure everything was migrated properly. If necessary, you can remigrate the site one last time using the plugin to synchronize any changes that have been made to your live site since the initial migration.

Once you've reviewed the site for correctness, you are ready to **[send your site live](https://kb.pressable.com/article/taking-site-live/)**

== Screenshots ==

== Changelog ==
= 1.84 =
* Disable form on submit

= 1.78 =
* First release of Pressable Plugin
