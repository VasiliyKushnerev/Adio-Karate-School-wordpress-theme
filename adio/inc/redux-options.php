<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "adio_options";



    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => false,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'ADIO Options', 'adio' ),
        'page_title'           => __( 'Theme Options for ADIO', 'adio' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'redux_demo',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS

    );




    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.

    /*$args['share_icons'][] = array(
        'url'   => '#',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => '#',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );*/




    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */




    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header Options', 'adio' ),
        'id'               => 'basic_header',
        'desc'             => __( 'Data to be display in Header', 'adio' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Logo Data', 'adio' ),
        'desc'             => __( 'Upload the logo and specify the slogan', 'adio' ),
        'id'               => 'site_logos',
        'subsection'       => true,
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'adiologo',
                'type'     => 'media',
                'title'    => __( 'Logo', 'adio' ),
                'subtitle' => __( 'Upload here your logo', 'adio' ),
                'desc'     => __( 'Recomended size: 73px * 108px', 'adio' ),
            ),
            array(
                'id'       => 'adioslogan',
                'type'     => 'text',
                'title'    => __( 'Slogan', 'adio' ),
                'subtitle' => __( 'Type here your slogan', 'adio' ),
                'desc'     => __( 'Your slogan', 'adio' ),
                'default'  => 'ADIO',
            ),


        )
    ) );
    Redux::setSection( $opt_name, array(
    'title'            => __( 'Phone & E-mail info', 'adio' ),
    'desc'             => __( 'Type here Phone and E-mail info', 'adio' ),
    'id'               => 'private_info',
    'subsection'       => true,
    'customizer_width' => '700px',
    'fields'           => array(

        array(
            'id'       => 'phone',
            'type'     => 'text',
            'title'    => __( 'Phone info', 'adio' ),
            'subtitle' => __( 'Type here your phone company', 'adio' ),
            'desc'     => __( 'Your phone company', 'adio' ),
            'default'  => '8 800 146-23-65',
        ),
        array(
            'id'       => 'email',
            'type'     => 'text',
            'title'    => __( 'Email info', 'adio' ),
            'subtitle' => __( 'Type here your email company', 'adio' ),
            'desc'     => __( 'Your email company', 'adio' ),
            'default'  => 'mail@website.com',
        ),
    )
) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social Links (Header & Footer)', 'adio' ),
        'desc'             => __( 'Type here social links', 'adio' ),
        'id'               => 'social_links',
        'subsection'       => true,
        'customizer_width' => '700px',
        'fields'           => array(

            array(
                'id'       => 'fb',
                'type'     => 'text',
                'title'    => __( 'Facebook Link', 'adio' ),
                'subtitle' => __( 'Type here your link', 'adio' ),
                'desc'     => __( 'Your Profile Link', 'adio' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'twit',
                'type'     => 'text',
                'title'    => __( 'Twitter Link', 'adio' ),
                'subtitle' => __( 'Type here your link', 'adio' ),
                'desc'     => __( 'Your Profile Link', 'adio' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'insta',
                'type'     => 'text',
                'title'    => __( 'Intagram Link', 'adio' ),
                'subtitle' => __( 'Type here your link', 'adio' ),
                'desc'     => __( 'Your Profile Link', 'adio' ),
                'default'  => '#',
            ),
            array(
                'id'       => 'pin',
                'type'     => 'text',
                'title'    => __( 'Pinterest Link', 'adio' ),
                'subtitle' => __( 'Type here your link', 'adio' ),
                'desc'     => __( 'Your Profile Link', 'adio' ),
                'default'  => '#',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Headers', 'adio' ),
        'desc'             => __( 'Enter the headers here', 'adio' ),
        'id'               => 'titles',
        'subsection'       => true,
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'background',
                'type'     => 'media',
                'title'    => __( 'Background image', 'adio' ),
                'subtitle' => __( 'Upload here your background image', 'adio' ),
                'desc'     => __( 'Recomended size: 1880px * 955px', 'adio' ),
            ),
            array(
                'id'       => 'header',
                'type'     => 'text',
                'title'    => __( 'Header', 'adio' ),
                'subtitle' => __( 'Type here your header', 'adio' ),
                'desc'     => __( 'Your header', 'adio' ),
                'default'  => 'WELCOME TO THE ADIO KARATE SCHOOL',
            ),
            array(
                'id'       => 'sub_title_open',
                'type'     => 'text',
                'title'    => __( 'Opening words', 'adio' ),
                'subtitle' => __( 'Type here your opening words', 'adio' ),
                'desc'     => __( 'Your opening words', 'adio' ),
                'default'  => 'KNOW',
            ),
            array(
                'id'       => 'sub_title_first',
                'type'     => 'text',
                'title'    => __( 'First Subtitle', 'adio' ),
                'subtitle' => __( 'Type here your first subtitle', 'adio' ),
                'desc'     => __( 'Your first subtitle', 'adio' ),
                'default'  => 'YOUR STRENGTH,',
            ),
            array(
                'id'       => 'sub_title_second',
                'type'     => 'text',
                'title'    => __( 'Second Subtitle', 'adio' ),
                'subtitle' => __( 'Type here your second subtitle', 'adio' ),
                'desc'     => __( 'Your second subtitle', 'adio' ),
                'default'  => 'Know your wisdom...',
            ),
            array(
                'id'       => 'title_button',
                'type'     => 'text',
                'title'    => __( 'Button title', 'adio' ),
                'subtitle' => __( 'Type here your button title', 'adio' ),
                'desc'     => __( 'Your button title', 'adio' ),
                'default'  => 'GET A FREE LESSON',
            ),
            array(
                'id'       => 'switch_button',
                'type'     => 'switch',
                'title'    => __( 'Switch On the Button', 'adio' ),
                'subtitle' => __( 'Enable or disable the button', 'adio' ),
                'default'  => true,
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
    'title'            => __( 'Footer Options', 'adio' ),
    'id'               => 'basic_footer',
    'desc'             => __( 'Data to be display in Footer', 'adio' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-list'
) );
    Redux::setSection( $opt_name, array(
    'title'            => __( 'First section', 'adio' ),
    'desc'             => __( 'Upload data for the first section', 'adio' ),
    'id'               => 'first_section',
    'subsection'       => true,
    'customizer_width' => '700px',
    'fields'           => array(
        array(
            'id'       => 'footer_logo',
            'type'     => 'media',
            'title'    => __( 'Footer logo', 'adio' ),
            'subtitle' => __( 'Upload here your logo for footer', 'adio' ),
            'desc'     => __( 'Recomended size: 103px * 104px', 'adio' ),
        ),
        array(
            'id'       => 'footer_first_title',
            'type'     => 'text',
            'title'    => __( 'Title', 'adio' ),
            'subtitle' => __( 'Type here your title', 'adio' ),
            'desc'     => __( 'Your title', 'adio' ),
            'default'  => 'ADIO KARATE SCHOOl',
        ),
        array(
            'id'       => 'footer_first_description',
            'type'     => 'textarea',
            'title'    => __( 'Description', 'adio' ),
            'subtitle' => __( 'Type here your description', 'adio' ),
            'desc'     => __( 'Your description', 'adio' ),
            'default'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ipsum voluptates id ducimus cupiditate modi consequatur.Ull am aliquam, pariatur quos.',
        ),


    )
) );
    Redux::setSection( $opt_name, array(
    'title'            => __( 'Second section', 'adio' ),
    'desc'             => __( 'Upload data for the second section', 'adio' ),
    'id'               => 'second_section',
    'subsection'       => true,
    'customizer_width' => '700px',
    'fields'           => array(
        array(
        'id'       => 'footer_second_title',
        'type'     => 'text',
        'title'    => __( 'Title', 'adio' ),
        'subtitle' => __( 'Type here your title', 'adio' ),
        'desc'     => __( 'Your title', 'adio' ),
        'default'  => 'QUICK LINKS',
    ),
        )
    ));
    Redux::setSection( $opt_name, array(
    'title'            => __( 'Third section', 'adio' ),
    'desc'             => __( 'Upload data for the third section', 'adio' ),
    'id'               => 'third_section',
    'subsection'       => true,
    'customizer_width' => '700px',
    'fields'           => array(
        array(
        'id'       => 'footer_third_title',
        'type'     => 'text',
        'title'    => __( 'Title', 'adio' ),
        'subtitle' => __( 'Type here your title', 'adio' ),
        'desc'     => __( 'Your title', 'adio' ),
        'default'  => 'RECENTS POST',
    ),
        )
    ));
    Redux::setSection( $opt_name, array(
    'title'            => __( 'Fourth section', 'adio' ),
    'desc'             => __( 'Upload data for the fourth section', 'adio' ),
    'id'               => 'fourth_section',
    'subsection'       => true,
    'customizer_width' => '700px',
    'fields'           => array(
        array(
        'id'       => 'footer_fourth_title',
        'type'     => 'text',
        'title'    => __( 'Title', 'adio' ),
        'subtitle' => __( 'Type here your title', 'adio' ),
        'desc'     => __( 'Your title', 'adio' ),
        'default'  => 'CONTACT US',
    ),array(
        'id'       => 'footer_fourth_phone_1',
        'type'     => 'text',
        'title'    => __( 'Phone-1', 'adio' ),
        'subtitle' => __( 'Type here your phone-1', 'adio' ),
        'desc'     => __( 'Your phone', 'adio' ),
        'default'  => '(1) 310-474-0000',
    ),array(
        'id'       => 'footer_fourth_phone_2',
        'type'     => 'text',
        'title'    => __( 'Phone-2', 'adio' ),
        'subtitle' => __( 'Type here your phone-2', 'adio' ),
        'desc'     => __( 'Your phone', 'adio' ),
        'default'  => '(2)310-474-0000',
    ),array(
            'id'       => 'footer_fourth_address',
            'type'     => 'text',
            'title'    => __( 'Address', 'adio' ),
            'subtitle' => __( 'Type here your address', 'adio' ),
            'desc'     => __( 'Your addess', 'adio' ),
            'default'  => '1011 Santa Monica Boulevard Los Angeles',
    ),array(
            'id'       => 'footer_fourth_copy',
            'type'     => 'text',
            'title'    => __( 'Copyright info', 'adio' ),
            'subtitle' => __( 'Type here your copyright info', 'adio' ),
            'desc'     => __( 'Your copyright info', 'adio' ),
            'default'  => 'Copyright © ADIO All Right Reserved',
            ),
        )
    ));
    Redux::setSection( $opt_name, array(
        'title' => esc_html__( 'Color Selection', 'adio' ),
        'id'    => 'color',
        'desc'  => __( 'Data to be display of Color', 'adio' ),
        'icon'  => 'el el-brush'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Color', 'adio' ),
        'id'         => 'color-Color',
        'desc'       => __( 'Here you can choose the site\'s color scheme.','adio'),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-backgroundcolor-site',
                'type'     => 'color',
                'output'   => array(
                    'background' => '.navigation,.main_head-hp1 .main_head__buttons .main_head__buttons__btn-main,.offer .offer__right .offer__right-substrate,.offer .offer__right .offer__right-substrate::before,.features .features__left figure:nth-child(2) span,.features .features__right figure:nth-child(2) span,.price .row div:nth-child(2) figure,.classes .classes__img span,.trainers i,.news .news__main .news__main__top span,footer .footer__one li',
                    'color' =>'.offer .offer__right .offer__right-substrate__content p:nth-child(3),.features i,.price span'
                ),
                'title'    => __( 'Site Background Color', 'adio' ),
                'subtitle' => __( 'Select the background color of the site.', 'adio' ),
                'transparent' => false,
                'default'  => '#ff4150',
            ),
            array(
                'id'       => 'opt-textcolor-site',
                'type'     => 'color',
                'output'   => array(

                    'color'  => '.header h1, .glav h2,.contact .contact__phone li:first-child,.contact .contact__mail li:first-child,.header p span,.philosophy .phylosophy__left figure h3,.features h3,.classes .classes__figure .classes__figure__content h3,.trainers h3,.says h4 span,.news .news__main .news__comments__left i,.news .news__main .news__comments__right i,.news .news__main .news__fab,footer h3,footer .footer__two .navigations__menu li i,.price a:hover,footer .footer__four i,.trainers .trainers__left-photo .trainers__left-photo__hidden .trainers__left-photo__hidden__content a i',
                    'background' =>'.price span::after,.says .says__main__nav .slick-dots .slick-active',
                    'border-color' => '.price a,.trainers .trainers__left-photo .trainers__left-photo__hidden .trainers__left-photo__hidden__content:after'
                ),
                'title'    => __( 'Site Text Color', 'adio' ),
                'subtitle' => __( 'Select the text color of the site.', 'adio' ),
                'transparent' => false,
                'default'  => '#ff4150',
            ),
            array(
                'id'       => 'opt-color-sidemenu',
                'type'     => 'color',
                'title'    => __( 'Color of the side menu buttons.', 'adio' ),
                'subtitle' => __( 'Select the color of the side menu buttons.', 'adio' ),
                'output'   => array( '.navigation .social .social__btn-icon, .sidebar .sidebar__click' ),
                'transparent' => false,
                'default'  => '#e26161',
                'mode'      => 'background',
            ),
        ),
    ) );







