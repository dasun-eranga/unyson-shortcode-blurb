<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tab_basic' => array(
        'type' => 'tab',
        'title' => __('Basic', '{domain}'),

			'options' => array(
				'icon'    => array(
					'type'  => 'upload',
					'label' => __('Choose an Icon', 'fw'),
					'desc'  => __('Choose an icon for blurb', '{domain}'),	
					'images_only' => true,
				),
				'text_align' => array(
					'type'  => 'select',
					'value' => 'left',
					'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					'label' => __('Text alignment', '{domain}'),
					'desc'  => __('Blurd box text alignment', '{domain}'),
					'help'  => __('This setting will apply to all content in blurb box', '{domain}'),
					'choices' => array(
						'' => '---',
						'left' => __('Left', '{domain}'),
						'center' => __('Center', '{domain}'),
						'right' => __('Right', '{domain}'),						
					),
					
					'no-validate' => false,
				),
				'title'   => array(
					'label' => __( 'Title', 'fw' ),
					'desc'  => __( 'Blurb main title', 'fw' ),
					'type'  => 'text',
					'value' => ''
				),
				'description_title'   => array(
					'label' => __( 'Description title', 'fw' ),
					'desc'  => __( 'Blurb description title', 'fw' ),
					'type'  => 'text',
					'value' => ''
				),
				'description'   => array(
					'label' => __( 'Description', 'fw' ),
					'desc'  => __( 'Blurb description', 'fw' ),
					'type'  => 'textarea',
					'attr'  => array( 'class' => 'blurb-desc' ),
					'value' => ''
				),
				'link'   => array(
					'label' => __( 'Blurb Link', 'fw' ),
					'desc'  => __( 'Where should your Blurb link to', 'fw' ),
					'type'  => 'text',
					'value' => '#'
				),	
				'target' => array(
					'type'  => 'switch',
					'label'   => __( 'Open blurb in New Window', 'fw' ),
					'desc'    => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
					'right-choice' => array(
						'value' => '_blank',
						'label' => __('Yes', 'fw'),
					),
					'left-choice' => array(
						'value' => '_self',
						'label' => __('No', 'fw'),
					),
				),
				
	
			)
		),

		'tab_appearance' => array(
			'type' => 'tab',
			'title' => __('Appearance', '{domain}'),
	
			'options' => array(
				
				'bg_color'  => array(
					'label'   => __( 'Blurb background color', 'fw' ),
					'desc'    => __( 'Choose a background color for your blurb', 'fw' ),
					'type'    => 'color-picker',
					'palettes' => array( '#ffffff', '#0ce9ed', '#000000' ),
					
				),
				'hover_color'  => array(
					'label'   => __( 'Blurb hover color', 'fw' ),
					'desc'    => __( 'Choose a hover color for your blurb', 'fw' ),
					'type'    => 'color-picker',
					'palettes' => array( '#ffffff', '#0ce9ed', '#000000' ),
				),
				'border_color'  => array(
					'label'   => __( 'Blurb border color', 'fw' ),
					'desc'    => __( 'Choose a border color for your blurb', 'fw' ),
					'type'    => 'color-picker',
					'palettes' => array( '#ffffff', '#0ce9ed', '#000000' ),
				),
				'title_color'  => array(
					'label'   => __( 'Blurb title color', 'fw' ),
					'desc'    => __( 'Choose a title color for your blurb', 'fw' ),
					'type'    => 'color-picker',
					'palettes' => array( '#ffffff', '#0ce9ed', '#000000' ),
				),
				'description_title_color'  => array(
					'label'   => __( 'Blurb description title color', 'fw' ),
					'desc'    => __( 'Choose a description title color for your blurb', 'fw' ),
					'type'    => 'color-picker',
					'palettes' => array( '#ffffff', '#0ce9ed', '#000000' ),
				),
				'description_color'  => array(
					'label'   => __( 'Blurb description color', 'fw' ),
					'desc'    => __( 'Choose a description color for your blurb', 'fw' ),
					'type'    => 'color-picker',
					'palettes' => array( '#ffffff', '#0ce9ed', '#000000' ),
				),
			)
		)
	

);