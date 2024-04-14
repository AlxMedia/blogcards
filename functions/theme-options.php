<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'blogcards', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'blogcards' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'blogcards' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'blogcards' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'blogcards' ),
	'button_url'  => 'https://wordpress.org/support/theme/blogcards/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'blogcards' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'blogcards' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'blogcards' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'blogcards' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'blogcards' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'blogcards' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'blogcards' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Recommended Plugins
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'blogcards' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'blogcards' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Featured Posts Include
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts Exclude', 'blogcards' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'blogcards' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'blogcards' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'blogcards' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> '6',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Excerpt Length
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'blogcards' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'blogcards' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'blogcards' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'blogcards' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'blogcards' ),
		'content'	=> esc_html__( 'Below content', 'blogcards' ),
	),
) );
// Blog: Single - Related Posts
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'blogcards' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'blogcards' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'blogcards' ),
		'categories'=> esc_html__( 'Related by categories', 'blogcards' ),
		'tags'		=> esc_html__( 'Related by tags', 'blogcards' ),
	),
) );
// Footer: Widget Columns
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'blogcards' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'blogcards' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'blogcards' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'blogcards' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'blogcards' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'blogcards' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'blogcards' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'blogcards' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'blogcards' ),
	'description'	=> esc_html__( 'Footer credit text', 'blogcards' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Social Links: List
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'blogcards' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'blogcards' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'blogcards' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'blogcards' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'blogcards' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'blogcards' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'blogcards' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'blogcards' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'blogcards' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'blogcards' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'blogcards' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'blogcards' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'blogcards' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'blogcards' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'blogcards' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'blogcards' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'blogcards' ),
	'description'	=> esc_html__( 'Select font for the theme', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'blogcards' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'blogcards' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'blogcards' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'blogcards' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'blogcards' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'blogcards' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'blogcards' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'blogcards' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'blogcards' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'blogcards' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'blogcards' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'blogcards' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'blogcards' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'blogcards' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'blogcards' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'blogcards' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'blogcards' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'blogcards' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'blogcards' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'blogcards' ),
		'arial'					=> esc_html__( 'Arial', 'blogcards' ),
		'georgia'				=> esc_html__( 'Georgia', 'blogcards' ),
		'verdana'				=> esc_html__( 'Verdana', 'blogcards' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'blogcards' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'blogcards' ),
	'description'	=> esc_html__( 'Max-width of the container', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> '1280',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'blogcards' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> '620',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'blogcards' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'blogcards' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'blogcards' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'blogcards' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Thumbnail Border Radius
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'border-radius-design',
	'label'			=> esc_html__( 'Border Radius Design', 'blogcards' ),
	'description'	=> esc_html__( 'Set to 0 for default radiuses', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '20',
		'step'	=> '1',
	),
) );
// Styling: Gradient Left
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-left',
	'label'			=> esc_html__( 'Gradient Left', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> '#be1e1e',
) );
// Styling: Gradient Right
Kirki::add_field( 'blogcards_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-right',
	'label'			=> esc_html__( 'Gradient Right', 'blogcards' ),
	'section'		=> 'styling',
	'default'		=> '#ff0000',
) );