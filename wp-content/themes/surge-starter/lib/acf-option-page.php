<?php
//Theme Settings Page
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Site Details',
    'menu_title'  => 'Site Details',
    'menu_slug'   => 'site-details',
	'icon_url'   => 'dashicons-editor-kitchensink',
    'capability'  => 'edit_posts',
  ));
  
}

function remove_menus(){
  //remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page('edit.php?post_type=acf-field-group');
 // remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
 // remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
}
//add_action( 'admin_menu', 'remove_menus' );


