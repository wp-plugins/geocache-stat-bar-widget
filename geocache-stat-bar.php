<?php
/*
Plugin Name: Geocache Stat Bar
Plugin URI: http://www.pixeljar.net/widgets/widget-geocache-stat-bar
Description: Display your Geocache Stat Bar
Author: Brandon Dove, Jeffrey Zinn
Version: 0.9
Author URI: http://www.pixeljar.net/
*/

function widget_geocache_stat_bar_init() {

	if ( !function_exists('register_sidebar_widget') )
		return;

	function widget_geocache_stat_bar($args) {
		
		extract($args);

		$options = get_option('widget_geocache_stat_bar');
		$username = $options['username'];
		$guid = $options['guid'];
		$image = $options['image'];
		$message = $options['message'];
		$m = str_replace(' ', '+', $message);
		$m = str_replace("'", "\'", $m);

		$statBar = '<a href="http://www.geocaching.com/profile/?guid='.$guid.'" target="_blank"><img src="http://img.geocaching.com/stats/img.aspx?txt='.$m.'&uid='.$guid.'&bg='.$image.'" border="0" title="Profile for '.$username.'" alt="Profile for '.$username.'"></a>';
		
		echo $before_widget . $before_title . 'Geocaching' . $after_title . $statBar . $after_widget;
	}

	function widget_geocache_stat_bar_control() {

		$options = get_option('widget_geocache_stat_bar');
		if ( !is_array($options) )
			$options = array('username'=>'Signal the Frog', 'guid'=>'0', 'image'=>'1', 'message'=>'Let\'s go geocaching!');
		if ( $_POST['gsb-submit'] ) {

			$options['username'] = strip_tags(stripslashes($_POST['gsb-username']));
			$options['guid'] = strip_tags(stripslashes($_POST['gsb-guid']));
			$options['image'] = strip_tags(stripslashes($_POST['gsb-image']));
			$options['message'] = strip_tags(stripslashes($_POST['gsb-message']));
			update_option('widget_geocache_stat_bar', $options);
		}

		?>
		<p style="text-align:right;"><label for="gsb-username">Username: <input style="width: 200px;" id="gsb-username" name="gsb-username" type="text" value="<?php echo $options['username']; ?>" /></label></p>
		
		<p style="text-align:right;"><label for="gsb-guid">GUID: <input style="width: 200px;" id="gsb-guid" name="gsb-guid" type="text" value="<?php echo $options['guid']; ?>" /></label></p>
		
		<p style="text-align:right;"><label for="gsb-image">Image: <select style="width: 200px;" id="gsb-image" name="gsb-image"><option value="1" <?php if ($options['image'] == 1) echo 'selected="selected"'; ?>>Geocaching Logo</option><option value="2" <?php if ($options['image'] == 2) echo 'selected="selected"'; ?>>Signal the Frog</option></label></p>
		
		<p style="text-align:right;"><label for="gsb-message">Message: <input style="width: 200px;" id="gsb-message" name="gsb-message" type="text" value="<?php echo $options['message']; ?>" /></label></p>
		
		<input type="hidden" id="gsb-submit" name="gsb-submit" value="1" />
		<?php
	}
	
	register_sidebar_widget('Geocache Stat Bar', 'widget_geocache_stat_bar');

	register_widget_control('Geocache Stat Bar', 'widget_geocache_stat_bar_control', 300, 200);
}

add_action('plugins_loaded', 'widget_geocache_stat_bar_init');

?>
