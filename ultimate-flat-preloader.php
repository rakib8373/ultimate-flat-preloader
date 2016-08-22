<?php 
/*
Plugin Name: Ultimate flat preloader
Description: By this plugn you can ser flat preloader in your site.  
Author: Rakib
Author URI: http://mrakib.me
Verson:1.0
*/


if ( ! defined( 'WPINC' ) ) {
	die();
}

define('ULTIMATE_FLAT_PRELOADER', WP_PLUGIN_URL .'/'.plugin_basename( dirname(__FILE__)).'/');

wp_enqueue_script('ultimate_flat_preloader_js',ULTIMATE_FLAT_PRELOADER.'assets/js/ultimate-flat-preloader.js',array('jquery'));

// calling css
wp_enqueue_style('ultimate_flat_preloader',ULTIMATE_FLAT_PRELOADER.'assets/css/ultimate-flat-preloader.css');



function ufp_ultimate_flat_preloader_activate() {
 update_option( 'ufp_option', 'preloader-one' );
}
register_activation_hook( __FILE__, 'ufp_ultimate_flat_preloader_activate' );


// Plugin setting menu page 
function ufp_ultimate_flat_preloader_menu()
{
	add_options_page('Ultimate Flat Preloader Settings','Ultimate Flat Preloader', 'manage_options', 'ultimate_flat_preloader_plugin', 'ufp_preloader_option_page');
}
add_action('admin_menu', 'ufp_ultimate_flat_preloader_menu');



// Settings page link 
function ufp_preloader_plugin_settings_link($links) { 
  $settings_link = '<a href="admin.php?page=ultimate_flat_preloader_plugin">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'ufp_preloader_plugin_settings_link' );



// page view 
function ufp_preloader_option_page()
{
	if(isset($_POST['tut_submit'])){
		update_option( 'ufp_option',$_POST['uf_preloader'] );
	}
  $ufp_option=get_option( 'ufp_option' );
	?>
	<div class="wrap">
	<?php screen_icon(); ?>
	<h2>Ultimate Flat Preloader Option Page</h2>
	
	<form action="" method="post" id="">
	
	<table class="form-table">
		<tbody>
			<tr>
				<th scope="row">
					<label for="preloader-style">Please Choose Preloader</label>
				</th>
				<td>
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-one" <?php if($ufp_option=="preloader-one"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_1.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-two" <?php if($ufp_option=="preloader-two"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_2.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-three" <?php if($ufp_option=="preloader-three"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_3.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-four" <?php if($ufp_option=="preloader-four"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_4.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-five" <?php if($ufp_option=="preloader-five"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_5.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-six" <?php if($ufp_option=="preloader-six"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_6.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-seven" <?php if($ufp_option=="preloader-seven"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_7.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-eight" <?php if($ufp_option=="preloader-eight"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_8.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-nine" <?php if($ufp_option=="preloader-nine"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_9.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-ten" <?php if($ufp_option=="preloader-ten"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_10.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-eleven" <?php if($ufp_option=="preloader-eleven"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_11.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twelve" <?php if($ufp_option=="preloader-twelve"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_12.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-thirteen" <?php if($ufp_option=="preloader-thirteen"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_13.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-fourteen" <?php if($ufp_option=="preloader-fourteen"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_14.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-fifteen" <?php if($ufp_option=="preloader-fifteen"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_15.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-sixteen" <?php if($ufp_option=="preloader-sixteen"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_16.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-seventeen" <?php if($ufp_option=="preloader-seventeen"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_17.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-eighteen" <?php if($ufp_option=="preloader-eighteen"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_18.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-neneteen" <?php if($ufp_option=="preloader-neneteen"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_19.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twenty" <?php if($ufp_option=="preloader-twenty"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_20.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentyone" <?php if($ufp_option=="preloader-twentyone"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_21.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentytwo" <?php if($ufp_option=="preloader-twentytwo"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_22.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentythree" <?php if($ufp_option=="preloader-twentythree"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_23.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentyfour" <?php if($ufp_option=="preloader-twentyfour"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_24.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentyfive" <?php if($ufp_option=="preloader-twentyfive"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_25.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentysix" <?php if($ufp_option=="preloader-twentysix"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_26.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentyseven" <?php if($ufp_option=="preloader-twentyseven"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_27.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentyeight" <?php if($ufp_option=="preloader-twentyeight"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_28.gif',__FILE__ ); ?>">
			        </label>
				
					<label class="uf_preloader_ln">
			          <input type="radio" name="uf_preloader" value="preloader-twentynine" <?php if($ufp_option=="preloader-twentynine"){ echo 'checked="checked"';};?>/>
			          <img title="Center Atom" src="<?php echo plugins_url( 'assets/img/preloader_29.gif',__FILE__ ); ?>">
			        </label>
				</td>
			</tr>
		</tbody>
	</table>

		<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="tut_submit"></p>
	</form>

	
	</div>
	<?php


}

require_once ( plugin_dir_path( __FILE__ ) . 'assets/ultimate-flat-preloader-style.php' );



















?>