<?php 
if (get_option(wpflybox_facebook_header)==""){$wpflybox_facebook_header="false";update_option('wpflybox_facebook_header', $wpflybox_facebook_header);}
if (get_option(wpflybox_facebook_stream)==""){$wpflybox_facebook_stream="false";update_option('wpflybox_facebook_tream', $wpflybox_facebook_stream);}
if (get_option(wpflybox_facebook_showfaces)==""){$wpflybox_facebook_showfaces="true";update_option('wpflybox_facebook_showfaces', $wpflybox_facebook_showfaces);}
if (get_option(wpflybox_facebook_color)==""){$wpflybox_facebook_color="light";update_option('wpflybox_facebook_color', $wpflybox_facebook_color);}
if (get_option(wpflybox_facebook_height)==""){$wpflybox_facebook_height="200";update_option('wpflybox_facebook_height', $wpflybox_facebook_height);}
if (get_option(wpflybox_facebook_width)==""){$wpflybox_facebook_width="292";update_option('wpflybox_facebook_width', $wpflybox_facebook_width);}
if (!strstr(get_option(wpflybox_facebook), 'facebook.com')){$wpflybox_facebook="http://facebook.com/".get_option(wpflybox_facebook);update_option('wpflybox_facebook', $wpflybox_facebook);}
if (get_option(wpflybox_ie)==""){$wpflybox_ie="true";update_option('wpflybox_ie', $wpflybox_ie);}
if (get_option(wpflybox_mobile)==""){$wpflybox_mobile="false";update_option('wpflybox_mobile', $wpflybox_mobile);}
if (get_option(wpflybox_captcha)==""){$wpflybox_captcha="true";update_option('wpflybox_captcha', $wpflybox_captcha);}
if (get_option(wpflybox_linkedin_type)==""){$wpflybox_linkedin_type="member";update_option('wpflybox_linkedin_type', $wpflybox_linkedin_type);}
if (get_option(wpflybox_contactemail)==""){$wpflybox_contactemail="email@domain.com";update_option('wpflybox_contactemail', $wpflybox_contactemail);}
if (get_option(wpflybox_deviant_limit)==""){$wpflybox_deviant_limit="12";update_option('wpflybox_deviant_limit', $wpflybox_deviant_limit);}
if (get_option(wpflybox_deviant_max_width)==""){$wpflybox_deviant_max_width="50";update_option('wpflybox_deviant_max_width', $wpflybox_deviant_max_width);}
if (get_option(wpflybox_deviant_max_height)==""){$wpflybox_deviant_max_height="50";update_option('wpflybox_deviant_max_height', $wpflybox_deviant_max_height);}
if (get_option(wpflybox_deviant_columns)==""){$wpflybox_deviant_columns="3";update_option('wpflybox_deviant_columns', $wpflybox_deviant_columns);}
if (get_option(wpflybox_deviant_frame_width)==""){$wpflybox_deviant_frame_width="160";update_option('wpflybox_deviant_frame_width', $wpflybox_deviant_frame_width);}
if (get_option(wpflybox_deviant_frame_height)==""){$wpflybox_deviant_frame_height="300";update_option('wpflybox_deviant_frame_height', $wpflybox_deviant_frame_height);}
if (get_option(wpflybox_instagram_max)==""){$wpflybox_instagram_max="9";update_option('wpflybox_instagram_max', $wpflybox_instagram_max);}
if (get_option(wpflybox_instagram_header)==""){$wpflybox_instagram_header="true";update_option('wpflybox_instagram_header', $wpflybox_instagram_header);}

		if($_POST['wpflybox_hidden'] == 'Y') {
			//Form data sent
			$wpflybox_side = $_POST['wpflybox_side'];
			update_option('wpflybox_side', $wpflybox_side);
			$wpflybox_start = $_POST['wpflybox_start'];
			update_option('wpflybox_start', $wpflybox_start);
			$wpflybox_seperation = $_POST['wpflybox_seperation'];
			update_option('wpflybox_seperation', $wpflybox_seperation);			
			$wpflybox_count = $_POST['wpflybox_count'];
			update_option('wpflybox_count', $wpflybox_count);
			$wpflybox_tab1 = $_POST['wpflybox_tab1'];
			update_option('wpflybox_tab1', $wpflybox_tab1);
			$wpflybox_tab2 = $_POST['wpflybox_tab2'];
			update_option('wpflybox_tab2', $wpflybox_tab2);	      			
			$wpflybox_tab3 = $_POST['wpflybox_tab3'];
			update_option('wpflybox_tab3', $wpflybox_tab3);
			$wpflybox_tab4 = $_POST['wpflybox_tab4'];
			update_option('wpflybox_tab4', $wpflybox_tab4);	      
		  $wpflybox_tab5 = $_POST['wpflybox_tab5'];
			update_option('wpflybox_tab5', $wpflybox_tab5);	
			$wpflybox_tab6 = $_POST['wpflybox_tab6'];
			update_option('wpflybox_tab6', $wpflybox_tab6);
			$wpflybox_tab7 = $_POST['wpflybox_tab7'];
			update_option('wpflybox_tab7', $wpflybox_tab7);	
			$wpflybox_tab8 = $_POST['wpflybox_tab8'];
			update_option('wpflybox_tab8', $wpflybox_tab8);				
			
			$wpflybox_google_type = $_POST['wpflybox_google_type'];
			update_option('wpflybox_google_type', $wpflybox_google_type);
      $wpflybox_facebook = $_POST['wpflybox_facebook'];
			update_option('wpflybox_facebook', $wpflybox_facebook);	
      $wpflybox_facebook_header = $_POST['wpflybox_facebook_header']; 
			update_option('wpflybox_facebook_header', $wpflybox_facebook_header);
      $wpflybox_facebook_stream = $_POST['wpflybox_facebook_stream']; 
			update_option('wpflybox_facebook_stream', $wpflybox_facebook_stream);	          			
      $wpflybox_facebook_showfaces = $_POST['wpflybox_facebook_showfaces']; 
			update_option('wpflybox_facebook_showfaces', $wpflybox_facebook_showfaces);    	
      $wpflybox_facebook_color = $_POST['wpflybox_facebook_color']; 
			update_option('wpflybox_facebook_color', $wpflybox_facebook_color);     	
      $wpflybox_facebook_height = $_POST['wpflybox_facebook_height']; 
			update_option('wpflybox_facebook_height', $wpflybox_facebook_height);     	            			
      $wpflybox_facebook_width = $_POST['wpflybox_facebook_width']; 
			update_option('wpflybox_facebook_width', $wpflybox_facebook_width);	      	
      $wpflybox_twitter = $_POST['wpflybox_twitter'];
			update_option('wpflybox_twitter', $wpflybox_twitter);	      
      $wpflybox_google = $_POST['wpflybox_google'];
			update_option('wpflybox_google', $wpflybox_google);
      $wpflybox_youtube = $_POST['wpflybox_youtube'];
			update_option('wpflybox_youtube', $wpflybox_youtube);      	      
      $wpflybox_feedburner = $_POST['wpflybox_feedburner'];
			update_option('wpflybox_feedburner', $wpflybox_feedburner);
      $wpflybox_pinterest = $_POST['wpflybox_pinterest'];
			update_option('wpflybox_pinterest', $wpflybox_pinterest); 
      $wpflybox_linkedin = $_POST['wpflybox_linkedin'];
			update_option('wpflybox_linkedin', $wpflybox_linkedin);
      $wpflybox_linkedin_type = $_POST['wpflybox_linkedin_type'];
			update_option('wpflybox_linkedin_type', $wpflybox_linkedin_type);			
      $wpflybox_ie = $_POST['wpflybox_ie'];
			update_option('wpflybox_ie', $wpflybox_ie); 
      $wpflybox_mobile = $_POST['wpflybox_mobile'];
			update_option('wpflybox_mobile', $wpflybox_mobile);
      $wpflybox_captcha = $_POST['wpflybox_captcha'];
			update_option('wpflybox_captcha', $wpflybox_captcha); 
      $wpflybox_contactemail = $_POST['wpflybox_contactemail'];
			update_option('wpflybox_contactemail', $wpflybox_contactemail);
      $wpflybox_flickr = $_POST['wpflybox_flickr'];
			update_option('wpflybox_flickr', $wpflybox_flickr);
      $wpflybox_flickr_tag = $_POST['wpflybox_flickr_tag'];
			update_option('wpflybox_flickr_tag', $wpflybox_flickr_tag);
      $wpflybox_deviant_username = $_POST['wpflybox_deviant_username'];
			update_option('wpflybox_deviant_username', $wpflybox_deviant_username); 
      $wpflybox_deviant_limit = $_POST['wpflybox_deviant_limit'];
			update_option('wpflybox_deviant_limit', $wpflybox_deviant_limit); 
      $wpflybox_deviant_max_width = $_POST['wpflybox_deviant_max_width'];
			update_option('wpflybox_deviant_max_width', $wpflybox_deviant_max_width); 
      $wpflybox_deviant_max_height = $_POST['wpflybox_deviant_max_height'];
			update_option('wpflybox_deviant_max_height', $wpflybox_deviant_max_height); 
      $wpflybox_deviant_columns = $_POST['wpflybox_deviant_columns'];
			update_option('wpflybox_deviant_columns', $wpflybox_deviant_columns);                                                                        
      $wpflybox_deviant_frame_width = $_POST['wpflybox_deviant_frame_width'];
			update_option('wpflybox_deviant_frame_width', $wpflybox_deviant_frame_width); 
      $wpflybox_deviant_frame_height = $_POST['wpflybox_deviant_frame_height'];
			update_option('wpflybox_deviant_frame_height', $wpflybox_deviant_frame_height); 			
      $wpflybox_instagram_id = $_POST['wpflybox_instagram_id'];
			update_option('wpflybox_instagram_id', $wpflybox_instagram_id); 
      $wpflybox_instagram_token = $_POST['wpflybox_instagram_token'];
			update_option('wpflybox_instagram_token', $wpflybox_instagram_token);
      $wpflybox_instagram_max = $_POST['wpflybox_instagram_max'];
			update_option('wpflybox_instagram_max', $wpflybox_instagram_max);            
      $wpflybox_instagram_header = $_POST['wpflybox_instagram_header'];
			update_option('wpflybox_instagram_header', $wpflybox_instagram_header);
		
      			                                                                                                  
			?>
			<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
			<?php
		} else {
			//Normal page display
		}
		
		
	?>
	
	<div class="wrap">
			<div class="icon32" id="icon-options-general"><br></div><?php    echo "<h2>WP-FlyBox</h2>"; ?>
			
			

<div class="postbox-container" style="width: 300px; float:right">
<div class="metabox-holder">
<div class="meta-box-sortables ui-sortable">
<div id="wpflybox_general" class="postbox" >
		<h3 class="hndle">
		<span>More Info:</span>
		</h3>
	<div class="inside">		
<b>Help:</b>
<br /><a href="http://njarb.com/2012/08/wp-flybox/" target="blank">Blog Post</a>
<br /><a href="http://wordpress.org/extend/plugins/wp-flybox/" target="blank">Wordpress Plugin Page</a>
<br /><a href="http://njarb.com/2012/08/wp-flybox/" target="blank">Help</a>
<br /><br />
<b>Find me on:</b>
<br /><a href="http://facebook.com/cylec" target="_blank">Facebook</a>
<br /><a href="http://twitter.com/cyleconoly" target="_blank">Twitter</a>
<br /><a href="http://plus.google.com/u/0/105734435204105331709" target="_blank">Google Plus</a>
<br /><br />
<b>Donate:</b>
<br /><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DAP6N4DSPBDMY">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

	</div>
</div>
</div>
</div>
</div>
<form name="oscimp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
				<input type="hidden" name="wpflybox_hidden" value="Y">
<div class="postbox-container" style="width:75%">
<div class="metabox-holder">
<div class="meta-box-sortables ui-sortable">
		
		<div id="wpflybox_general" class="postbox" style="width:75%;">
		<h3 class="hndle">
		<span>Display Options:</span>
		</h3>
	<div class="inside">	
	<table cellpadding="3"><tr>			
		<td style="text-align:right;"><?php _e("Which side?: " ); ?></td>
        <td><select name="wpflybox_side">
	<option value="none" <?php if(get_option(wpflybox_side)=="none"){echo 'selected';} ?>>None</option>
	<option value="left" <?php if(get_option(wpflybox_side)=="left"){echo 'selected';} ?>>Left</option>
        <option value="right" <?php if(get_option(wpflybox_side)=="right"){echo 'selected';} ?>>Right</option>
        </select>
        </td>
        </tr>
        <td><?php _e("How high to start first tab: " ); ?></td><td>
        <input type="text" name="wpflybox_start" value="<?php echo get_option(wpflybox_start); ?>" size="4" />
	(ex: 20px or 10%, must contain either 'px' or '%')
        </td></tr>
        
        <tr><td style="text-align:right;"><?php _e("Amount of seperation: " ); ?></td><td>
        <input type="text" name="wpflybox_seperation" value="<?php echo get_option(wpflybox_seperation); ?>" size="4" />
	(ex: 103px or 12%, can be in either 'px or '%', but must be same as starting position)
	<br>If you use % the tabs may overlap on smaller screens. If you use px tabs may run off the bottom of screen on smaller screens.
        </td></tr>
        
        <tr><td style="text-align:right;"><?php _e("How many tabs?: " ); ?></td><td>
        <select name="wpflybox_count">
        <option value="0" <?php if(get_option(wpflybox_count)=="0"){echo 'selected';} ?>>0</option>
        <option value="1" <?php if(get_option(wpflybox_count)=="1"){echo 'selected';} ?>>1</option>
        <option value="2" <?php if(get_option(wpflybox_count)=="2"){echo 'selected';} ?>>2</option>
        <option value="3" <?php if(get_option(wpflybox_count)=="3"){echo 'selected';} ?>>3</option>
        <option value="4" <?php if(get_option(wpflybox_count)=="4"){echo 'selected';} ?>>4</option>
        <option value="5" <?php if(get_option(wpflybox_count)=="5"){echo 'selected';} ?>>5</option>
	<option value="6" <?php if(get_option(wpflybox_count)=="6"){echo 'selected';} ?>>6</option>
	<option value="7" <?php if(get_option(wpflybox_count)=="7"){echo 'selected';} ?>>7</option>
		<option value="8" <?php if(get_option(wpflybox_count)=="8"){echo 'selected';} ?>>8</option>
        </select> <input type="submit" name="Submit" value="Apply" />
        </td></tr>
        
        <?php if(get_option(wpflybox_count)>=1){ ?>
        <tr><td style="text-align:right;"><?php _e("First tab: " ); ?></td><td>
        <select name="wpflybox_tab1">
        <option value="facebook" <?php if(get_option(wpflybox_tab1)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab1)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab1)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab1)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab1)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab1)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab1)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab1)=="flickr"){echo 'selected';} ?>>Flickr</option>        
        <option value="contact" <?php if(get_option(wpflybox_tab1)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab1)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab1)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>
        
        <?php } if(get_option(wpflybox_count)>=2){ ?>
        
        <tr><td style="text-align:right;"><?php _e("Second tab: " ); ?></td><td>
        <select name="wpflybox_tab2">
        <option value="facebook" <?php if(get_option(wpflybox_tab2)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab2)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab2)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab2)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab2)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab2)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab2)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab2)=="flickr"){echo 'selected';} ?>>Flickr</option> 
        <option value="contact" <?php if(get_option(wpflybox_tab2)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab2)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab2)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>
        
        <?php } if(get_option(wpflybox_count)>=3){ ?>
        
        <tr><td style="text-align:right;"><?php _e("Third tab: " ); ?></td><td>
        <select name="wpflybox_tab3">
        <option value="facebook" <?php if(get_option(wpflybox_tab3)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab3)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab3)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab3)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab3)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab3)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab3)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab3)=="flickr"){echo 'selected';} ?>>Flickr</option> 
        <option value="contact" <?php if(get_option(wpflybox_tab3)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab3)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab3)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>
        
        <?php } if(get_option(wpflybox_count)>=4){ ?>
        
        <tr><td style="text-align:right;"><?php _e("Fourth tab: " ); ?></td><td>
        <select name="wpflybox_tab4">
        <option value="facebook" <?php if(get_option(wpflybox_tab4)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab4)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab4)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab4)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab4)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab4)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab4)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab4)=="flickr"){echo 'selected';} ?>>Flickr</option> 
        <option value="contact" <?php if(get_option(wpflybox_tab4)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab4)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab4)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>
        
        <?php } if(get_option(wpflybox_count)>=5){ ?>
        
        <tr><td style="text-align:right;"><?php _e("Fifth tab: " ); ?></td><td>
        <select name="wpflybox_tab5">
        <option value="facebook" <?php if(get_option(wpflybox_tab5)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab5)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab5)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab5)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab5)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab5)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab5)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab5)=="flickr"){echo 'selected';} ?>>Flickr</option> 
        <option value="contact" <?php if(get_option(wpflybox_tab5)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab5)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab5)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>
	
	<?php } if(get_option(wpflybox_count)>=6){ ?>
        
        <tr><td style="text-align:right;"><?php _e("Sixth tab: " ); ?></td><td>
        <select name="wpflybox_tab6">
        <option value="facebook" <?php if(get_option(wpflybox_tab6)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab6)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab6)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab6)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab6)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab6)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab6)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab6)=="flickr"){echo 'selected';} ?>>Flickr</option> 
        <option value="contact" <?php if(get_option(wpflybox_tab6)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab6)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab6)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>
	
	<?php } if(get_option(wpflybox_count)>=7){ ?>
        
        <tr><td style="text-align:right;"><?php _e("Seventh tab: " ); ?></td><td>
        <select name="wpflybox_tab7">
        <option value="facebook" <?php if(get_option(wpflybox_tab7)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab7)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab7)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab7)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab7)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab7)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab7)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab7)=="flickr"){echo 'selected';} ?>>Flickr</option> 
        <option value="contact" <?php if(get_option(wpflybox_tab7)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab7)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab7)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>
        
	<?php } if(get_option(wpflybox_count)>=8){ ?>
        
        <tr><td style="text-align:right;"><?php _e("Eighth tab: " ); ?></td><td>
        <select name="wpflybox_tab8">
        <option value="facebook" <?php if(get_option(wpflybox_tab8)=="facebook"){echo 'selected';} ?>>Facebook</option>
        <option value="twitter" <?php if(get_option(wpflybox_tab8)=="twitter"){echo 'selected';} ?>>Twitter</option>
        <option value="googleplus" <?php if(get_option(wpflybox_tab8)=="googleplus"){echo 'selected';} ?>>Google Plus</option>
        <option value="youtube" <?php if(get_option(wpflybox_tab8)=="youtube"){echo 'selected';} ?>>Youtube</option>
        <option value="subscription" <?php if(get_option(wpflybox_tab8)=="subscription"){echo 'selected';} ?>>Feedburner Subscription</option>
        <option value="pinterest" <?php if(get_option(wpflybox_tab8)=="pinterest"){echo 'selected';} ?>>Pinterest</option>
        <option value="linkedin" <?php if(get_option(wpflybox_tab8)=="linkedin"){echo 'selected';} ?>>Linked In</option>
        <option value="flickr" <?php if(get_option(wpflybox_tab8)=="flickr"){echo 'selected';} ?>>Flickr</option> 
        <option value="contact" <?php if(get_option(wpflybox_tab8)=="contact"){echo 'selected';} ?>>Contact Me</option>
        <option value="deviant" <?php if(get_option(wpflybox_tab8)=="deviant"){echo 'selected';} ?>>Deviant Art</option>
        <option value="instagram" <?php if(get_option(wpflybox_tab8)=="instagram"){echo 'selected';} ?>>Instagram</option>
        </select>
        </td></tr>        
		  <?php } ?>
		  
        
		    <tr><td style="text-align:right;"><?php _e("Enable for Mobile Devices: " ); ?></td><td>
        <select name="wpflybox_mobile">
        <option value="true" <?php if(get_option(wpflybox_mobile)=="true"){echo 'selected';} ?>>Yes</option>
        <option value="false" <?php if(get_option(wpflybox_mobile)=="false"){echo 'selected';} ?>>No</option>
        </select>
        </td></tr>        
			
	</table>
	</div>
		</div>
	<br />&nbsp;
	<br />&nbsp;
	<div id="wpflybox_config" class="postbox" style="width:75%">
		<h3 class="hndle">
			Tab Configuration:
		</h3>

        <table cellpadding="3" style="background-color:#f5f5f5;">
        <tr><td colspan="2"><h4>Facebook:</h4></td></tr>
        <tr><td style="text-align:right;">Full Page URL:</td><td>
        <input type="text" name="wpflybox_facebook" value="<?php echo get_option(wpflybox_facebook); ?>" size="70" />
        (it must be a fan page, not a personal page)
        </td></tr>
        
        <tr><td style="text-align:right;">Color Scheme:</td><td>
        <select name="wpflybox_facebook_color">
        <option value="light" <?php if(get_option(wpflybox_facebook_color)=="light"){echo 'selected';} ?>>Light</option>
        <option value="dark" <?php if(get_option(wpflybox_facebook_color)=="dark"){echo 'selected';} ?>>Dark</option>
        </select>
        </td></tr>
        
        <tr><td style="text-align:right;">Height:</td><td>
        <input type="text" name="wpflybox_facebook_height" value="<?php echo get_option(wpflybox_facebook_height); ?>" size="6" />px
        </td></tr>
        
        <tr><td style="text-align:right;">Show Header:</td><td>
        <select name="wpflybox_facebook_header">
        <option value="true" <?php if(get_option(wpflybox_facebook_header)=="true"){echo 'selected';} ?>>Yes</option>
        <option value="false" <?php if(get_option(wpflybox_facebook_header)=="false"){echo 'selected';} ?>>No</option>
        </select>("Find Us On Facebook" is the header)
        </td></tr> 
        
        <tr><td style="text-align:right;">Show Stream:</td><td>
        <select name="wpflybox_facebook_stream">
        <option value="true" <?php if(get_option(wpflybox_facebook_stream)=="true"){echo 'selected';} ?>>Yes</option>
        <option value="false" <?php if(get_option(wpflybox_facebook_stream)=="false"){echo 'selected';} ?>>No</option>
        </select>
        </td></tr> 
        
        <tr><td style="text-align:right;">Show Faces:</td><td>
        <select name="wpflybox_facebook_showfaces">
        <option value="true" <?php if(get_option(wpflybox_facebook_showfaces)=="true"){echo 'selected';} ?>>Yes</option>
        <option value="false" <?php if(get_option(wpflybox_facebook_showfaces)=="false"){echo 'selected';} ?>>No</option>
        </select>
        </td></tr>                                  


        <tr><td colspan="2"><h4>Twitter:</h4></td></tr>            
        <tr><td style="text-align:right;">Twitter Username:</td><td>
        <input type="text" name="wpflybox_twitter" value="<?php echo get_option(wpflybox_twitter); ?>" size="20" />
        </td></tr> 

        
        <tr><td colspan="2"><h4>Google Plus:</h4></td></tr>
        <tr><td style="text-align:right;">Google Numeric Username:</td><td>
        <input type="text" name="wpflybox_google" value="<?php echo get_option(wpflybox_google); ?>" size="30" />
        (example: if your page is "http://plus.google.com/u/0/<b>105734435204105331709</b>/posts" use 105734435204105331709 as your code.)
        </td></tr>
	
        <tr><td style="text-align:right;">Page Type:</td><td>
        <select name="wpflybox_google_type">
        <option value="profile" <?php if(get_option(wpflybox_google_type)=="profile"){echo 'selected';} ?>>Profile</option>
        <option value="page" <?php if(get_option(wpflybox_google_type)=="page"){echo 'selected';} ?>>Page</option>
        </select>
	(does the google plus numeric username code belong to a personal profile or a business/fan page?s)
        </td></tr>
        
        <tr><td colspan="2"><h4>Youtube:</h4></td></tr>        
        <tr><td style="text-align:right;">Youtube Username:</td><td>
        <input type="text" name="wpflybox_youtube" value="<?php echo get_option(wpflybox_youtube); ?>" size="30" />
        </td></tr>
        
        <tr><td colspan="2"><h4>Feedburner Subscription:</h4></td></tr> 
        <tr><td style="text-align:right;">Feedburner Username:</td><td>
        <input type="text" name="wpflybox_feedburner" value="<?php echo get_option(wpflybox_feedburner); ?>" size="30" />
        </td></tr> 
        
        <tr><td colspan="2"><h4>Pinterest:</h4></td></tr> 
        <tr><td style="text-align:right;">Pinterest Username:</td><td>
        <input type="text" name="wpflybox_pinterest" value="<?php echo get_option(wpflybox_pinterest); ?>" size="30" />
        (can be found under pinterest settings)
        </td></tr>  
        
        <tr><td colspan="2"><h4>LinkedIn:</h4></td></tr>
        <tr><td style="text-align:right;">LinkedIn Member URL or Company ID:</td><td>
        <input type="text" name="wpflybox_linkedin" value="<?php echo get_option(wpflybox_linkedin); ?>" size="70" />
        <br>To find your linked in public profile URL, sign into Linked In. Click Profile at the top and choose view profile. At the bottom of your info is your public profile URL.
        <br>To find your company ID look in the address bar after "http://www.linkedin.com/company/"will be your Company ID.
        </td></tr>
        <tr><td style="text-align:right;">Member or Company Profile:</td><td>
        <select name="wpflybox_linkedin_type">
        <option value="member" <?php if(get_option(wpflybox_linkedin_type)=="member"){echo 'selected';} ?>>Member</option>        
        <option value="company" <?php if(get_option(wpflybox_linkedin_type)=="company"){echo 'selected';} ?>>Company</option>
        </select>
        </td></tr>
        
        <tr><td colspan="2"><h4>Flickr:</h4></td></tr>
        <tr><td style="text-align:right;">Flickr ID:</td><td>
        <input type="text" name="wpflybox_flickr" value="<?php echo get_option(wpflybox_flickr); ?>" size="20" />
        Use this URL to help you find your ID: <a href="http://idgettr.com/" target="_blank">http://idgettr.com/</a>.
        </td></tr> 
        
        <tr><td style="text-align:right;">Photo Tag:</td><td>
        <input type="text" name="wpflybox_flickr_tag" value="<?php echo get_option(wpflybox_flickr_tag); ?>" size="20" />
        Show only photos with this tag, or leave blank for all.
        </td></tr>         
        
        <tr><td colspan="2"><h4>Contact Me:</h4></td></tr>
        <tr><td style="text-align:right;">Email to Send Completed Form:</td><td>
        <input type="text" name="wpflybox_contactemail" value="<?php echo get_option(wpflybox_contactemail); ?>" size="70" />
        </td></tr>        
        
        
        <tr><td style="text-align:right;">Use Captcha:</td><td>
        <select name="wpflybox_captcha">
        <option value="true" <?php if(get_option(wpflybox_captcha)=="true"){echo 'selected';} ?>>Yes</option>        
        <option value="false" <?php if(get_option(wpflybox_captcha)=="false"){echo 'selected';} ?>>No</option>
        </select>
        </td></tr>
        
        <tr><td colspan="2"><h4>Deviant Art:</h4></td></tr> 
        <tr><td style="text-align:right;">Username:</td><td>
        <input type="text" name="wpflybox_deviant_username" value="<?php echo get_option(wpflybox_deviant_username); ?>" size="30" />
        </td></tr> 
        
        <tr><td style="text-align:right;">Frame Width:</td><td>
        <input type="text" name="wpflybox_deviant_frame_width" value="<?php echo get_option(wpflybox_deviant_frame_width); ?>" size="3" />px 
        </td></tr>
        
        <tr><td style="text-align:right;">Frame Height:</td><td>
        <input type="text" name="wpflybox_deviant_frame_height" value="<?php echo get_option(wpflybox_deviant_frame_height); ?>" size="3" />px
        </td></tr>                
        
        <tr><td style="text-align:right;">Max Number To Show:</td><td>
        <input type="text" name="wpflybox_deviant_limit" value="<?php echo get_option(wpflybox_deviant_limit); ?>" size="3" /> (Maximum number of images to show in frame)
        </td></tr>
        
        <tr><td style="text-align:right;">Max Width Of Each Image:</td><td>
        <input type="text" name="wpflybox_deviant_max_width" value="<?php echo get_option(wpflybox_deviant_max_width); ?>" size="3" />px (Maximum width you want of each image)(0-150)
        </td></tr>
        
        <tr><td style="text-align:right;">Max Height Of Each Image:</td><td>
        <input type="text" name="wpflybox_deviant_max_height" value="<?php echo get_option(wpflybox_deviant_max_height); ?>" size="3" />px (Maximum width you want of each image)(0-150)
        </td></tr>
        
        <tr><td style="text-align:right;">Number Of Columns:</td><td>
        <input type="text" name="wpflybox_deviant_columns" value="<?php echo get_option(wpflybox_deviant_columns); ?>" size="3" />
        </td></tr>
                  
                  
        <tr><td colspan="2"><h4>Instagram:</h4></td></tr>
        <tr><td colspan="2">WP-Flybox needs to be authorized first so that it has permission to show your photos.<br />To do that go <a href="http://njarb.com/wp-flybox/instagram" target="_blank">here</a>.
        <tr><td style="text-align:right;">User ID:</td><td>
        <input type="text" name="wpflybox_instagram_id" value="<?php echo get_option(wpflybox_instagram_id); ?>" size="30" /><a href="http://njarb.com/wp-flybox/instagram" target="_blank">Get your ID here.</a>
        </td></tr>
        <tr><td style="text-align:right;">Auth Token for WP-Flybox:</td><td>
        <input type="text" name="wpflybox_instagram_token" value="<?php echo get_option(wpflybox_instagram_token); ?>" size="70" /><a href="http://njarb.com/wp-flybox/instagram" target="_blank">Get your Auth Token here.</a>
        </td></tr>
        <tr><td style="text-align:right;">Max Recent Pics:</td><td>
        <input type="text" name="wpflybox_instagram_max" value="<?php echo get_option(wpflybox_instagram_max); ?>" size="2" />How many pictures do you want to show?
        </td></tr> 
        <tr><td style="text-align:right;">Show Header:</td><td>
        <select name="wpflybox_instagram_header">
        <option value="true" <?php if(get_option(wpflybox_instagram_header)=="true"){echo 'selected';} ?>>Yes</option>        
        <option value="false" <?php if(get_option(wpflybox_instagram_header)=="false"){echo 'selected';} ?>>No</option>
        </select>
        </td></tr>                                                          
        
	</table></div>
             
	
        		                              
				<p class="submit">
				<input class="button-primary" type="submit" name="Submit" value="Update Options" />
				</p>
			</form>
		</div>
</div>
</div>
</div>
