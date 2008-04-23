<?php

/*
Plugin Name: Tag Uncomplete
Plugin URI: http://alexking.org/projects/wordpress
Description: Disables tag auto-complete in WordPress 2.5. Make sure to read the README.
Version: 1.0
Author: Alex King
Author URI: http://alexking.org
*/ 

// Copyright (c) 2008 Alex King. All rights reserved.
// http://alexking.org/projects/wordpress
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// This is an add-on for WordPress
// http://wordpress.org/
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

function aktu_admin_head() {
	print('
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#newtag").unbind("keypress");
});
</script>
	');
}
add_action('admin_head', 'aktu_admin_head');

?>