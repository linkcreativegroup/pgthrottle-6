<?php 

// 1. customize ACF path
add_filter('/acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('/acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
add_filter('/acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/acf/acf.php' );




if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_591da0541b389',
	'title' => 'Theme Options',
	'fields' => array (
		array (
			'key' => 'field_591da0c64b738',
			'label' => 'Logo',
			'name' => 'logo',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => 1,
			'mime_types' => '',
		),
		array (
			'key' => 'field_591da1b34b739',
			'label' => 'Phone Number',
			'name' => 'phone_number',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_594d2fdb0e2ca',
			'label' => 'Phone Event Tracking',
			'name' => 'phone-event',
			'type' => 'textarea',
			'instructions' => 'Use Google Analytics to track who clicks on the phone number. Use the sample below and edit the fields in [brackets] to match your values created in the Google Analytics > Admins > Goals > Event Tracking Dashboard.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'onClick="ga(\'send\', \'event\', [eventCategory], [eventAction], [eventLabel], [eventValue], [fieldsObject]);"',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array (
			'key' => 'field_591da1eb4b73a',
			'label' => 'Facebook',
			'name' => 'facebook_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_591da20e4b73b',
			'label' => 'YouTube',
			'name' => 'youtube_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_591da2254b73c',
			'label' => 'Twitter',
			'name' => 'twitter_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_591da22f4b73d',
			'label' => 'Linkedin',
			'name' => 'linkedin_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_591da25a4b73e',
			'label' => 'Google+',
			'name' => 'google_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_591da2a74b73f',
			'label' => 'Pinterest',
			'name' => 'pinterest_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_591da2b94b740',
			'label' => 'Instagram',
			'name' => 'instagram_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_5925944eb0aae',
			'label' => 'Bandcamp',
			'name' => 'bandcamp_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_591da33a4b742',
			'label' => 'Header Code',
			'name' => 'google_search_console',
			'type' => 'textarea',
			'instructions' => 'Paste any code or script that needs to load in the header of the website here (Google Search Console, Google Fonts, Facebook Timeline, Tracking codes, Call Rail, etc.)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array (
			'key' => 'field_591da2de4b741',
			'label' => 'Footer Code',
			'name' => 'google_analytics',
			'type' => 'textarea',
			'instructions' => 'Place Google Analytics Tracking code or any other script that needs to load in the footer of the website. This content is not visible on the website.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '<script>script goes here </script>',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array (
			'key' => 'field_591db0dd4b65d',
			'label' => 'Street Address',
			'name' => 'address_street',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_591db1074b65e',
			'label' => 'City',
			'name' => 'address_city',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_591db1164b65f',
			'label' => 'State',
			'name' => 'address_state',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_591db11e4b660',
			'label' => 'Zip',
			'name' => 'address_zip',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_594d31c97c096',
			'label' => 'Hours',
			'name' => 'business_hours',
			'type' => 'textarea',
			'instructions' => 'Business Hours/Schedule',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
		),
		array (
			'key' => 'field_59233d373937d',
			'label' => 'Header Style',
			'name' => 'header_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Desktop' => 'Desktop',
				'Mobile' => 'Mobile',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_592ecf261b1a2',
			'label' => 'Enable Homepage Slideshow',
			'name' => 'slideshow_home',
			'type' => 'radio',
			'instructions' => 'Show or hide the homepage slideshow.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Show' => 'Show',
				'Hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_596d1484800b1',
			'label' => 'Slideshow Shortcode',
			'name' => 'slideshow_shortcode',
			'type' => 'text',
			'instructions' => 'Paste the slideshow [short-code] in the text field above.',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_592ecf261b1a2',
						'operator' => '==',
						'value' => 'Show',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59245a00a711e',
			'label' => 'Enable First Parallax Section',
			'name' => 'parallax_first',
			'type' => 'radio',
			'instructions' => 'Show or hide the homepage content and sidebar section.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Show' => 'Show',
				'Hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_592457966c44e',
			'label' => 'First Parallax Background',
			'name' => 'parallax_bg_1',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59245a00a711e',
						'operator' => '==',
						'value' => 'Show',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => 5,
			'mime_types' => '',
		),
		array (
			'key' => 'field_59245559f3ffc',
			'label' => 'Home Content',
			'name' => 'home_content',
			'type' => 'radio',
			'instructions' => 'Show or hide the homepage content and sidebar section.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Show' => 'Show',
				'Hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_592dda6aeecf5',
			'label' => 'Home Content Sidebar',
			'name' => 'home_content_sidebar',
			'type' => 'radio',
			'instructions' => 'Show or hide the homepage content sidebar.',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59245559f3ffc',
						'operator' => '==',
						'value' => 'Show',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Show' => 'Show',
				'Hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_59245a72a711f',
			'label' => 'Enable Second Parallax Section',
			'name' => 'parallax_second',
			'type' => 'radio',
			'instructions' => 'Show or hide the homepage content and sidebar section.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Show' => 'Show',
				'Hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_592457c46c44f',
			'label' => 'Second Parallax Background',
			'name' => 'parallax_bg_2',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59245a72a711f',
						'operator' => '==',
						'value' => 'Show',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => '',
			'max_size' => 5,
			'mime_types' => '',
		),
		array (
			'key' => 'field_592459c2a711d',
			'label' => 'Home Widgets',
			'name' => 'home_widgets',
			'type' => 'radio',
			'instructions' => 'Show or hide three footer widgets on home page only. Appearance>Widgets>Home Widgets (Left, Middle, Right)',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Show' => 'Show',
				'Hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array (
			'key' => 'field_5924535fe522e',
			'label' => 'Footer Widgets',
			'name' => 'footer_widget',
			'type' => 'radio',
			'instructions' => 'Show or hide three footer widgets on every page of the site. Appearance>Widgets>Footer Widgets (Left, Middle, Right)',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Show' => 'Show',
				'Hide' => 'Hide',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif; ?>