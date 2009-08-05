<?php 
/* 
Plugin Name: Facebook Fan Box
Plugin URI: http://www.hnkweb.com/2009/08/03/facebook-fan-box-wordpress-plugin/
Description: Display Facebook Fan Box
Version: 1.1
Author: Marcos Esperon
Author URI: http://www.hnkweb.com/
*/

/*  Copyright 2009  Marcos Esperon

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; 
*/

function facebook_fan_box($api_key, $profile_id, $stream = 1, $connections = 10, $width = 300, $css = '', $iframe = 0) {
	$output = '';
  if ($profile_id != '') {
    if($iframe == 0) {
      $output = '<script src="http://www.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script>'
               .'<script type="text/javascript">FB.init("'.$api_key.'", "");</script>'
               .'<fb:fan profile_id="'.$profile_id.'" stream="'.$stream.'" connections="'.$connections.'" width="'.$width.'" css="'.$css.'"></fb:fan>';
    } else {
      $output = '<iframe scrolling="no" frameborder="0" src="http://www.facebook.com/connect/connect.php?id='.$profile_id.'&stream='.$stream.'&connections='.$connections.'&css='.$css.'" allowtransparency="true" style="border: none; width: '.$width.'px; height: 550px;"></iframe>';
    }
  }
  echo $output;
}
?>