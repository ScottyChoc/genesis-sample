<?php
/**
 * Genesis Sample.
 *
 * This file adds the front page template to the Genesis Sample Theme.
 *
 * Template Name: Home
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

//* Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

genesis();