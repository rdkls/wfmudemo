<?php
/*
 * Plugin Name: WFMU Now Playing
 * Version: 0.0.1
 * License: WTFPL
*/
defined('ABSPATH') or die("No script kiddies please!");

function wfmu_now_playing_shortcode_callback() {
	$url = 'http://wfmu.org/';
	$s = file_get_contents($url);
	preg_match('/&quot;(.*?)&quot;.*?by(.*?)<\/div>/s', $s, $matches);
	$trackname = trim($matches[1]);
	$artist = trim($matches[2]);
	return 'right not on WFMU: <b>' . $trackname . '</b> by <b>' . $artist . '</b>';
}
add_shortcode('wfmu_now_playing', 'wfmu_now_playing_shortcode_callback');
?>
