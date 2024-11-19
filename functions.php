<?php
/**
 * homeDirectory function returns the URL of the current domain name.
 * (single database call per load)
 * 
 * @return string
 */
function homeDirectory(){
	global $homeUrlGlobal;
	if(!$homeUrlGlobal){
		$homeUrlGlobal = get_home_url().'/';
	}
	return $homeUrlGlobal;
}

/**
 * themeDirectory function returns the URL of the current theme directory. 
 * (single database call per load)
 * 
 * @return string
 */
function themeDirectory(){
	global $themeUrlGlobal;
	if(!$themeUrlGlobal){
		$themeUrlGlobal = get_stylesheet_directory_uri().'/';
	}
	return $themeUrlGlobal;
}
/**
 * Get theme version
 * (single database call per load)
 * 
 * @return string
 */
function paper_get_theme_ver(){
	global $themeVersionUrlGlobal;
	if(!$themeVersionUrlGlobal){
		$themeVersionUrlGlobal = wp_get_theme()->Version;
	}
	return $themeVersionUrlGlobal;
	// return "1";
}

/**
 * themeDirectoryPath function returns the URL of the current theme directory path. 
 * (single database call per load)
 * 
 * @return string
 */
function themeDirectoryPath(){
	global $themePathGlobal;
	if(!$themePathGlobal){
		$themePathGlobal = get_stylesheet_directory().'/';
	}
	return $themePathGlobal;
}



function wpdocs_theme_name_scripts(){
	wp_enqueue_style( 'style-main', themeDirectory().'css/style.css', array(), filemtime( themeDirectoryPath().'css/style.css') );

	wp_enqueue_script( 'script-main', themeDirectory().'js/script.js', array('jquery'), filemtime( themeDirectoryPath().'js/script.js'), true);
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_filter( "show_admin_bar", "__return_false" );


/*
function settingsID(){
	return 76;
}
function homeID(){
	return 5;
}
function sendMailID(){
	return 98;
}
*/

/*
//cambia las paginas de color en la lista del cms////////////////////////////////////////
add_action('admin_head','change_cms_pages_color');
function change_cms_pages_color(){
	$pagesArray = array(settingsID(),homeID(),reqService(),sendMailID());
	$color = 'ececec';//color...............	
	$str = '';
	$str .= '<style>';	
	for($i = 0; $i < sizeof($pagesArray);$i++){
		if($i == 2){
			$color = '99A3A4';
		}
		$str .= '#post-'.$pagesArray[$i].'{ background-color:#'.$color.';}';
		$str .= '#post-'.$pagesArray[$i].' .trash{ display:none;}';		
		if($_GET['post'] == $pagesArray[$i]){
			$str .= '.submitdelete.deletion{ display:none;}';
		}
	}	
	$str .= '#post-1295{ display:none;}';	
	$str .= '</style>';	
	echo $str;	
}

//quita items del panel izquierdo del cms////////////////////////////////////////////
add_action('admin_menu', 'remove_menus');	
function remove_menus () {
	global $menu;
	if ( current_user_can("manage_options") ) {
		$restricted = array();
	}else{
		$restricted = array(__('Dashboard'), __('Comments'), __('Tools'), __('Links'), __('Media'), __('Settings')); 
		//$restricted = array( __('Dashboard'),__('Posts'), __('Media'), __('Tools'), __('Settings'), __('Links'), __('Comments')); 
	}
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:'' , $restricted)){
			unset($menu[key($menu)]);
		}
	}
}

//agrega items en el panel izquierdo del cms////////////////////////////////////////////
add_action('admin_menu', 'register_custom_menu_page');
function register_custom_menu_page() {
	$settingsID = settingsID();
	add_menu_page('Ajustes', 'Ajustes', 'edit_posts', 'post.php?post=' . $settingsID . '&action=edit', '', '', 0);		
}

//quita el wisiwig que viene por defecto en los post o paginas del cms////////////////////
add_action('init', 'remove_content_editor');
function remove_content_editor() {
   //remove_post_type_support( 'post', 'editor' );
   remove_post_type_support( 'page', 'editor' );
}

//agrega nuevos tamaños a las imagenes subidas por el cms/////////////////////////////////
add_image_size( 'super-large', 2048, 2048, false);
add_image_size( 'super-small', 128, 128, true);

//detecta el dispositivo actual/////////////////////////////////////////////////////////
function deviceType(){
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;	
	$deviceType = 'computer';
	if ($detect->isMobile() && !$detect->isTablet()) {
		$deviceType = 'phone';
	}else if ($detect->isTablet()) {
		$deviceType = 'tablet';
	}
	return $deviceType;
}

//crear entradas 
add_action( 'init', 'create_post_types' );
function create_post_types() {	
	$args = array(
		'labels' => array(
			'name' => __( 'Registros' ),
			'singular_name' => __( 'Registro' )
		),
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'capability_type' => 'post',
		'supports' => array('title')
	);	
	register_post_type( 'registro', $args);	
}

// f = full || sl = super large || l = large || m = medium || s = thumbnail(small) || t = super small(thumbnail) ||
function getImage($postID, $field='image', $size='l', $subField=false){
	$imgObj=($subField)?get_sub_field($field, $postID):get_field($field, $postID);
	$deviceType=deviceType();
	$isComputer=($deviceType=='computer')?true:false;
	switch(strtolower($size)){
		case 'f':
			$img=($isComputer)?$imgObj['sizes']['full']:$imgObj['sizes']['super-large'];
			break;
		case 'sl':
			$img=($isComputer)?$imgObj['sizes']['super-large']:$imgObj['sizes']['large'];
			break;	
		case 'l':
			$img=($isComputer)?$imgObj['sizes']['large']:$imgObj['sizes']['medium'];
			break;	
		case 'm':
			$img=($isComputer)?$imgObj['sizes']['medium']:$imgObj['sizes']['thumbnail'];
			break;		
		case 's':
			$img=($isComputer)?$imgObj['sizes']['thumbnail']:$imgObj['sizes']['super-small'];
			break;		
		case 't':
			$img=$imgObj['sizes']['super-small'];
			break;		
		default:{
			$img=($isComputer)?$imgObj['sizes']['large']:$imgObj['sizes']['medium'];
		}
	}
	$filetype = wp_check_filetype($img);
	$img=($filetype['ext']=='gif')?$imgObj['url']:$img;
	return $img;
}
	*/

