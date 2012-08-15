<?php 

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
			
			$wpflybox_google_type = $_POST['wpflybox_google_type'];
			update_option('wpflybox_google_type', $wpflybox_google_type);
      $wpflybox_facebook = $_POST['wpflybox_facebook'];
			update_option('wpflybox_facebook', $wpflybox_facebook);		
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
<div id="wpflybox_general" class="postbox">
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
<div class="postbox-container">
<div class="metabox-holder">
<div class="meta-box-sortables ui-sortable">
		
		<div id="wpflybox_general" class="postbox">
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
        </select>
        </td></tr>
		  <?php } ?>
			
	</table>
	</div>
		</div>
	<br />&nbsp;
	<br />&nbsp;
	<div id="wpflybox_config" class="postbox">
		<h3 class="hndle">
			Tab Configuration:
		</h3>
        <table cellpadding="3" style="background-color:#f5f5f5;">
        <tr><td style="text-align:right;"><?php _e("Facebook: " ); ?></td><td>
        <input type="text" name="wpflybox_facebook" value="<?php echo get_option(wpflybox_facebook); ?>" size="20" />
	(page id, example: http://www.facebook.com/<b>wired</b> = wired)(it must be a fan page, not a personal page)
        </td></tr>
             
        <tr><td style="text-align:right;"><?php _e("Twitter: " ); ?></td><td>
        <input type="text" name="wpflybox_twitter" value="<?php echo get_option(wpflybox_twitter); ?>" size="20" />
	(twitter username)
        </td></tr> 
        
        <tr><td style="text-align:right;"><?php _e("Google Plus: " ); ?></td><td>
        <input type="text" name="wpflybox_google" value="<?php echo get_option(wpflybox_google); ?>" size="30" />
	(goolge numeric username code, example: http://plus.google.com/u/0/<b>105734435204105331709</b>/posts = 105734435204105331709)
        </td></tr>
	
        <tr><td style="text-align:right;"><?php _e("Google Plus Type: " ); ?></td><td>
        <select name="wpflybox_google_type">
        <option value="profile" <?php if(get_option(wpflybox_google_type)=="profile"){echo 'selected';} ?>>Profile</option>
        <option value="page" <?php if(get_option(wpflybox_google_type)=="page"){echo 'selected';} ?>>Page</option>
        </select>
	(does the google plus numeric username code belong to a personal profile or a business/fan page?s)
        </td></tr>
        
        <tr><td style="text-align:right;"><?php _e("Youtube: " ); ?></td><td>
        <input type="text" name="wpflybox_youtube" value="<?php echo get_option(wpflybox_youtube); ?>" size="30" />
	(youtube username)
        </td></tr>
        
        <tr><td style="text-align:right;"><?php _e("Feedburner: " ); ?></td><td>
        <input type="text" name="wpflybox_feedburner" value="<?php echo get_option(wpflybox_feedburner); ?>" size="30" />
	(feedburner username)
        </td></tr> 
        
        <tr><td style="text-align:right;"><?php _e("Pinterest: " ); ?></td><td>
        <input type="text" name="wpflybox_pinterest" value="<?php echo get_option(wpflybox_pinterest); ?>" size="30" />
	(pinterest username)
        </td></tr>  
        
        <tr><td style="text-align:right;"><?php _e("Linked In URL (with http://www.): " ); ?></td><td>
        <input type="text" name="wpflybox_linkedin" value="<?php echo get_option(wpflybox_linkedin); ?>" size="70" />
	(linked in public profile URL)<br>To find your linked in public profile URL, sign into Linked In. Click Profile at the top and choose view profile. At the bottom of your info is your public profile URL.
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
