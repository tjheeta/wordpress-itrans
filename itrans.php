<?php
/**
 * @package Itrans
 * @author Tejinder Jheeta
 * @version 0.1
 */
/*
Plugin Name: Itrans
Plugin URI: http://www.jheeta.com
Description: Easily add ITrans and other transliteration schemes to documents
Author: Tejinder Jheeta
Version: 0.1
Author URI: http://www.jheeta.com/
*/

/*  Copyright 2014  Tejinder Jheeta 

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// register the javascript
function do_register_js()
{
    // https://github.com/sanskrit/sanscript.js
    wp_register_script( 'sanscript', plugin_dir_url(__FILE__) . 'sanscript.js');
    wp_enqueue_script( 'sanscript' );
    // ensure page is loaded before doing transliteration
    wp_register_script( 'transliterate-script', plugin_dir_url(__FILE__) . 'transliterate.js', false, false, true);
    wp_enqueue_script( 'transliterate-script' );
}
add_action( 'wp_enqueue_scripts', 'do_register_js' );

?>
