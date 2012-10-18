<?php
/*
	The uninstall file
	(to make your blog always clean when you need to test plugins :p)
*/

if( !defined( 'ABSPATH') &&  !defined('WP_UNINSTALL_PLUGIN') )
	    exit();
	
	// delete widget option
	delete_option( 'wpflybox_side');
	delete_option( 'wpflybox_start');
	delete_option( 'wpflybox_seperation');
	delete_option( 'wpflybox_count');
	delete_option( 'wpflybox_tab1');
	delete_option( 'wpflybox_tab2');
	delete_option( 'wpflybox_tab3');
	delete_option( 'wpflybox_tab4');
	delete_option( 'wpflybox_tab5');
	delete_option( 'wpflybox_tab6');
	delete_option( 'wpflybox_tab7');
	delete_option( 'wpflybox_tab8');
	delete_option( 'wpflybox_google_type');
	delete_option( 'wpflybox_facebook');
	delete_option( 'wpflybox_facebook_header');
	delete_option( 'wpflybox_facebook_stream');
	delete_option( 'wpflybox_facebook_showfaces');
	delete_option( 'wpflybox_facebook_color');
	delete_option( 'wpflybox_facebook_height');
	delete_option( 'wpflybox_facebook_width');
	delete_option( 'wpflybox_twitter');
	delete_option( 'wpflybox_twitter_showfollowers');
	delete_option( 'wpflybox_twitter_count');
	delete_option( 'wpflybox_twitter_link');
	delete_option( 'wpflybox_twitter_tweetto');
	delete_option( 'wpflybox_google');
	delete_option( 'wpflybox_youtube');
	delete_option( 'wpflybox_feedburner');
	delete_option( 'wpflybox_pinterest');
	delete_option( 'wpflybox_linkedin');
	delete_option( 'wpflybox_linkedin_type');
	delete_option( 'wpflybox_ie');
	delete_option( 'wpflybox_mobile');
	delete_option( 'wpflybox_captcha');
	delete_option( 'wpflybox_contactemail');
	delete_option( 'wpflybox_contactwho');
	delete_option( 'wpflybox_flickr');
	delete_option( 'wpflybox_flickr_tag');
	delete_option( 'wpflybox_deviant_username');
	delete_option( 'wpflybox_deviant_limit');
	delete_option( 'wpflybox_deviant_max_width');
	delete_option( 'wpflybox_deviant_max_height');
	delete_option( 'wpflybox_deviant_columns');
	delete_option( 'wpflybox_deviant_frame_width');
	delete_option( 'wpflybox_deviant_frame_height');
	delete_option( 'wpflybox_instagram_id');
	delete_option( 'wpflybox_instagram_token');
	delete_option( 'wpflybox_instagram_max');
	delete_option( 'wpflybox_instagram_header');
	delete_option( 'wpflybox_jquery');
	delete_option( 'wpflybox_usecurl');
	delete_option( 'wpflybox_usecustombutton');
	delete_option( 'wpflybox_bgtopgradient');
	delete_option( 'wpflybox_bgbottomgradient');
	delete_option( 'wpflybox_bgborder');
    	


