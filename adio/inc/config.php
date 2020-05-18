<?php

///------------- Metaboxes -----------------///

function adio_metaboxes($meta_boxes) {

    $meta_boxes = array();

    $prefix = "adio_";

    $meta_boxes[] = array(
        'id'         => 'homepage_metabox',
        'title'      => esc_html__('Homepage Options','adio'),
        'pages'      => array( 'page'),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-homepage.php'), ),
        'fields' => array(
            array(
                'name' => esc_html__('Enable Offer section','adio'),
                'desc' => esc_html__('Enable or disable the Offer section','adio'),
                'id'   => $prefix . 'offer_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ), array(
                'name' => esc_html__('Enable Features section','adio'),
                'desc' => esc_html__('Enable or disable the Features section','adio'),
                'id'   => $prefix . 'features_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ), array(
                'name' => esc_html__('Enable Price section','adio'),
                'desc' => esc_html__('Enable or disable the Price section','adio'),
                'id'   => $prefix . 'price_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ), array(
                'name' => esc_html__('Enable Classes section','adio'),
                'desc' => esc_html__('Enable or disable the Classes section','adio'),
                'id'   => $prefix . 'classes_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ), array(
                'name' => esc_html__('Enable Trainers section','adio'),
                'desc' => esc_html__('Enable or disable the Trainers section','adio'),
                'id'   => $prefix . 'trainers_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ), array(
                'name' => esc_html__('Enable Clients section','adio'),
                'desc' => esc_html__('Enable or disable the Clients section','adio'),
                'id'   => $prefix . 'clients_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ), array(
                'name' => esc_html__('Enable News section','adio'),
                'desc' => esc_html__('Enable or disable the News section','adio'),
                'id'   => $prefix . 'news_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ), array(
                'name' => esc_html__('Enable Map section','adio'),
                'desc' => esc_html__('Enable or disable the Map section','adio'),
                'id'   => $prefix . 'map_section',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','adio'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','adio'), 'value' => 'disable', ),
                ),
            ),array(
                'name' => esc_html__('Philosophy title','adio'),
                'desc' => esc_html__('Type here the Philosophy title','adio'),
                'id'   => $prefix . 'philosophy_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' => esc_html__('Philosophy subtitle','adio'),
                'desc' => esc_html__('Type here the Philosophy subtitle','adio'),
                'id'   => $prefix . 'philosophy_subtitle',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' => esc_html__('Philosophy description','adio'),
                'desc' => esc_html__('Type here the Philosophy description','adio'),
                'id'   => $prefix . 'philosophy_description',
                'std'  => '',
                'type' => 'textarea_small',
            ),array(
                'name' => esc_html__('Philosophy small title-1','adio'),
                'desc' => esc_html__('Type here the Philosophy small title-1','adio'),
                'id'   => $prefix . 'philosophy_small_title_1',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' => esc_html__('Philosophy small description-1','adio'),
                'desc' => esc_html__('Type here the Philosophy small description-1','adio'),
                'id'   => $prefix . 'philosophy_small_description_1',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' => esc_html__('Philosophy small title-2','adio'),
                'desc' => esc_html__('Type here the Philosophy small title-2','adio'),
                'id'   => $prefix . 'philosophy_small_title_2',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Philosophy small description-2','adio'),
                'desc' =>esc_html__('Type here the Philosophy small description-2','adio'),
                'id'   => $prefix . 'philosophy_small_description_2',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Philosophy small title-3','adio'),
                'desc' =>esc_html__('Type here the Philosophy small title-3','adio'),
                'id'   => $prefix . 'philosophy_small_title_3',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Philosophy small description-3','adio'),
                'desc' =>esc_html__('Type here the Philosophy small description-3','adio'),
                'id'   => $prefix . 'philosophy_small_description_3',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Philosophy image','adio'),
                'desc' =>esc_html__('Upload here the Philosophy image. Recommended size: 507-467px','adio'),
                'id'   => $prefix . 'philosophy_image',
                'std'  => '',
                'type' => 'file',
            ),array(
                'name' =>esc_html__('Offer image','adio'),
                'desc' =>esc_html__('Upload here the Offer image. Recommended size: 535-480px','adio'),
                'id'   => $prefix . 'offer_image',
                'std'  => '',
                'type' => 'file',
            ),array(
                'name' =>esc_html__('Offer overtitle','adio'),
                'desc' =>esc_html__('Type here the Offer overtitle','adio'),
                'id'   => $prefix . 'offer_overtitle',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Offer title','adio'),
                'desc' =>esc_html__('Type here the Offer title','adio'),
                'id'   => $prefix . 'offer_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Offer subtitle','adio'),
                'desc' =>esc_html__('Type here the Offer subrtitle','adio'),
                'id'   => $prefix . 'offer_subtitle',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Offer description','adio'),
                'desc' =>esc_html__('Type here the Offer description','adio'),
                'id'   => $prefix . 'offer_description',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Offer button title','adio'),
                'desc' =>esc_html__('Type here the Offer button title','adio'),
                'id'   => $prefix . 'offer_button_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Features title','adio'),
                'desc' =>esc_html__('Type here the Features title','adio'),
                'id'   => $prefix . 'features_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Features background','adio'),
                'desc' =>esc_html__('Upload here the Features background image. Recommended size: 380-614px','adio'),
                'id'   => $prefix . 'features_background',
                'std'  => '',
                'type' => 'file',
            ),array(
                'name' =>esc_html__('Classes title','adio'),
                'desc' =>esc_html__('Type here the Classes title','adio'),
                'id'   => $prefix . 'classes_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Trainers title','adio'),
                'desc' =>esc_html__('Type here the Trainers title','adio'),
                'id'   => $prefix . 'trainers_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Client title','adio'),
                'desc' =>esc_html__('Type here the Client title','adio'),
                'id'   => $prefix . 'client_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Testimonial background image','adio'),
                'desc' =>esc_html__('Upload here the Testimonial background image. Recommended size: 1880-955px','adio'),
                'id'   => $prefix . 'client_image',
                'std'  => '',
                'type' => 'file',
            ),array(
                'name' =>esc_html__('News title','adio'),
                'desc' =>esc_html__('Type here the News title','adio'),
                'id'   => $prefix . 'news_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' =>esc_html__('Iframe Map','adio'),
                'desc' =>esc_html__('Type here the Map Iframe.Width="100%", height="800"','adio'),
                'id'   => $prefix . 'map_frame',
                'std'  => '',
                'type' => 'textarea_code',
            ),
        )
    );
    $meta_boxes[] = array(
        'id'         => 'features_metabox',
        'title'      => esc_html__('Features Options','adio'),
        'pages'      => array( 'features-left'),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' =>esc_html__('Features icon','adio'),
                'desc' =>esc_html__('Type here the fontawesome icon name','adio'),
                'id'   => $prefix . 'features_icon',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Features subtitle','adio'),
                'desc' =>esc_html__('Type here the Features subtitle','adio'),
                'id'   => $prefix . 'features_subtitle',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Features description','adio'),
                'desc' =>esc_html__('Type here the Features description','adio'),
                'id'   => $prefix . 'features_description',
                'std'  => '',
                'type' => 'textarea_small',
            )
        )
    );
    $meta_boxes[] = array(
        'id'         => 'features_metabox',
        'title'      => esc_html__('Features Options','adio'),
        'pages'      => array( 'features-right'),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' =>esc_html__('Features icon','adio'),
                'desc' =>esc_html__('Type here the fontawesome icon name','adio'),
                'id'   => $prefix . 'features_icon_right',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Features subtitle','adio'),
                'desc' =>esc_html__('Type here the Features subtitle','adio'),
                'id'   => $prefix . 'features_subtitle_right',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Features description','adio'),
                'desc' =>esc_html__('Type here the Features description','adio'),
                'id'   => $prefix . 'features_description_right',
                'std'  => '',
                'type' => 'textarea_small',
            )
        )
    );
    $meta_boxes[] = array(
        'id'         => 'price_metabox',
        'title'      => esc_html__('Price Options','adio'),
        'pages'      => array( 'price'),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' =>esc_html__('Price title','adio'),
                'desc' =>esc_html__('Type here the Price titile','adio'),
                'id'   => $prefix . 'price_title',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Price value','adio'),
                'desc' =>esc_html__('Type here the Price value','adio'),
                'id'   => $prefix . 'price_value',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Price description','adio'),
                'desc' =>esc_html__('Type here the Price description','adio'),
                'id'   => $prefix . 'price_description',
                'std'  => '',
                'type' => 'textarea_small',
            ),array(
                'name' =>esc_html__('Price button title','adio'),
                'desc' =>esc_html__('Type here the Price button title','adio'),
                'id'   => $prefix . 'price_button_title',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id'         => 'classes_metabox',
        'title'      => esc_html__('Classes Options','adio'),
        'pages'      => array( 'classes'),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' =>esc_html__('Classes image','adio'),
                'desc' =>esc_html__('Upload here the Classes image. Recommended size: 355-487px','adio'),
                'id'   => $prefix . 'classes_image',
                'std'  => '',
                'type' => 'file',
            ),array(
                'name' =>esc_html__('Classes subtitle','adio'),
                'desc' =>esc_html__('Type here the Classes subtitle','adio'),
                'id'   => $prefix . 'classes_subtitle',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Classes description','adio'),
                'desc' =>esc_html__('Type here the Classes description','adio'),
                'id'   => $prefix . 'classes_description',
                'std'  => '',
                'type' => 'textarea_small',
            ),
        )
    );
    $meta_boxes[] = array(
        'id'         => 'trainers_metabox',
        'title'      => esc_html__('Trainers Options','adio'),
        'pages'      => array( 'trainers'),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' =>esc_html__('Trainers image','adio'),
                'desc' =>esc_html__('Upload here the Trainers image. Recommended size: 277-472px','adio'),
                'id'   => $prefix . 'trainers_image',
                'std'  => '',
                'type' => 'file',
            ),array(
                'name' =>esc_html__('Trainer header','adio'),
                'desc' =>esc_html__('Type here the Trainer header','adio'),
                'id'   => $prefix . 'trainers_header',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Trainer subtitle','adio'),
                'desc' =>esc_html__('Type here the Trainer subtitle','adio'),
                'id'   => $prefix . 'trainers_subtitle',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Trainer description','adio'),
                'desc' =>esc_html__('Type here the Trainer description','adio'),
                'id'   => $prefix . 'trainers_description',
                'std'  => '',
                'type' => 'textarea_small',
            ),array(
                'name' => esc_html__('Facebook link Profile','adio'),
                'desc' => esc_html__('Type here the Trainer profile link','adio'),
                'id'   => $prefix . 'trainer_fb',
                'std'  => '',
                'type'    => 'text',
            ),array(
                'name' => esc_html__('Twitter link Profile','adio'),
                'desc' => esc_html__('Type here the Trainer profile link','adio'),
                'id'   => $prefix . 'trainer_tw',
                'std'  => '',
                'type'    => 'text',
            ),array(
                'name' => esc_html__('Pinterest link Profile','adio'),
                'desc' => esc_html__('Type here the Trainer profile link','adio'),
                'id'   => $prefix . 'trainer_pt',
                'std'  => '',
                'type'    => 'text',
            ),
        )
    );
    $meta_boxes[] = array(
        'id'         => 'testimonials_metabox',
        'title'      => esc_html__('Testimonials Options','adio'),
        'pages'      => array( 'testimonials'),
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' =>esc_html__('Client image','adio'),
                'desc' =>esc_html__('Upload here the Client image. Recommended size: 157-157px','adio'),
                'id'   => $prefix . 'testimonials_image',
                'std'  => '',
                'type' => 'file',
            ),array(
                'name' =>esc_html__('Client name','adio'),
                'desc' =>esc_html__('Type here the Client name','adio'),
                'id'   => $prefix . 'testimonials_name',
                'std'  => '',
                'type' => 'text',
            ),array(
                'name' =>esc_html__('Testimonials description','adio'),
                'desc' =>esc_html__('Type here the Testimonials description','adio'),
                'id'   => $prefix . 'testimonials_description',
                'std'  => '',
                'type' => 'textarea_small',
            ),
        )
    );


    return $meta_boxes;
}


///------------- Custom Post Type -----------------///

function create_post_type(){
    register_post_type('features-left',array(
            'labels' => array(
                'name' => esc_html__('Features Left','adio'),
                'singular name' => esc_html__('Feature Left','adio'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'features'),
            'menu_position' => 6,
            'menu_icon' => 'dashicons-universal-access',
            'supports' => array(
                'title',
            ),
        )
    );
    register_post_type('features-right',array(
            'labels' => array(
                'name' => esc_html__('Features Right','adio'),
                'singular name' => esc_html__('Feature Right','adio'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'features'),
            'menu_position' => 5,
            'menu_icon' => 'dashicons-universal-access',
            'supports' => array(
                'title',
            ),
        )
    );
    register_post_type('price',array(
            'labels' => array(
                'name' => esc_html__('Prices','adio'),
                'singular name' => esc_html__('Price','adio'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'price'),
            'menu_position' => 4,
            'menu_icon' => 'dashicons-universal-access',
            'supports' => array(
                'title',
            ),
        )
    );
    register_post_type('classes',array(
            'labels' => array(
                'name' => esc_html__('Classes','adio'),
                'singular name' => esc_html__('Class','adio'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'classes'),
            'menu_position' => 8,
            'menu_icon' => 'dashicons-universal-access',
            'supports' => array(
                'title',
                'editor'
            ),
        )
    );
    register_post_type('trainers',array(
            'labels' => array(
                'name' => esc_html__('Trainers','adio'),
                'singular name' => esc_html__('Trainer','adio'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'trainers'),
            'menu_position' => 7,
            'menu_icon' => 'dashicons-universal-access',
            'supports' => array(
                'title',
                'editor'
            ),
        )
    );
    register_post_type('testimonials',array(
            'labels' => array(
                'name' => esc_html__('Testimonials','adio'),
                'singular name' => esc_html__('Testimonial','adio'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'trainers'),
            'menu_position' => 9,
            'menu_icon' => 'dashicons-universal-access',
            'supports' => array(
                'title',
                'editor'
            ),
        )
    );
}
add_action( 'init', 'create_post_type' );