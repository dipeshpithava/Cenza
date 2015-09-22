<?php
/*
Plugin Name: Leads
Description: Leads Plugin to perform Read operation.
Author: Dipesh Pithwa
Version: 1.0
*/
// include necessary files
include_once 'insert_update_delete_function.php';

//When plugin activated then which functin
add_action('admin_menu','add_menu');
?>