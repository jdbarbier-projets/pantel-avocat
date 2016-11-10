<?php

function plumbelt_lite_customizer( $wp_customize ) {

	class plumbelt_lite_Theme_Support extends WP_Customize_Control
	{
		public function render_content()
		{

		}

	} 


    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';


	/* theme notes */
	
	$wp_customize->add_section( 'codeinwp_theme_notes' , array(
		'title'      => __('ThemeIsle theme notes','plumbelt-lite'),
		'description' =>  __( "Thank you for being part of this! We've spent almost 6 months building ThemeIsle without really knowing if anyone will ever use a theme or not, so we're very grateful that you've decided to work with us. Wanna <a href='http://themeisle.com/contact/' target='_blank'>say hi</a>?<br/><br/><a href='http://themeisle.com/demo/?theme=PlumBelt%20Lite' target='_blank'>View Theme Demo</a> | <a href='http://themeisle.com/forums/forum/plumbelt-lite' target='_blank'>Get theme support</a><br/><br/><a href='http://themeisle.com/documentation-plumbelt-lite' target='_blank'>Documentation</a><br><br><a href='https://themeisle.com/themes/plumbelt-plumbing-wordpress-theme/' target='_blank' style='color:red'>Upgrade to PRO</a> ",'plumbelt-lite'),'priority'   => 30,
	));
	$wp_customize->add_setting( 
        'codeinwp_theme_notes', array('sanitize_callback' => 'plumbelt_lite_sanitize_notes')
	);
	 $wp_customize->add_control( new plumbelt_lite_Theme_Support( $wp_customize, 'codeinwp_theme_notes',
	    array(
	        'section' => 'codeinwp_theme_notes',
	   )
	));	
	
	/*
	**	Custom Colors Section
	*/
    $wp_customize->add_section( 'plumbelt_custom_colors' , array(

    	'title'       => __( 'Custom Colors', 'plumbelt-lite' ),
		'description' => __( "Change colors for the entire theme. This feature is available in the pro version. <a href='https://themeisle.com/themes/plumbelt-plumbing-wordpress-theme' target='_blank'>Get it now!</a>",'plumbelt-lite'),
    	'priority'    => 150,
	) );
	
	$wp_customize->add_setting(
        'plumbelt_custom_colors',array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));
	
	$wp_customize->add_control( new plumbelt_lite_Theme_Support( $wp_customize, 'plumbelt_custom_colors',
	    array(
	        'section' => 'plumbelt_custom_colors',
	   )
	));
	
	/* Header image */
	
	$wp_customize->add_section( 'plumbelt_headerimage_custom' , array(
	
		'title'      => __('Header Image','plumbelt-lite'),
		'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/plumbelt-plumbing-wordpress-theme' target='_blank'>Get it now!</a>",'plumbelt-lite'),
		'priority'   => 190,
	));
	$wp_customize->add_setting(
        'plumbelt_headerimage_custom',array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));
	
	$wp_customize->add_control( new plumbelt_lite_Theme_Support( $wp_customize, 'plumbelt_headerimage_custom',
	    array(
	        'section' => 'plumbelt_headerimage_custom',
	   )
	));

    /*

    ** Header Customizer

    */

    $wp_customize->add_section( 'plumbelt_header' , array(

    	'title'       => __( 'Header', 'plumbelt-lite' ),

    	'priority'    => 200,

	) );



		/* Header - Logo */

		$wp_customize->add_setting( 'ti_header_logo' ,
        array('sanitize_callback' => 'esc_url_raw'));

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_header_logo', array(

		    'label'    => __( 'Logo:', 'plumbelt-lite' ),

		    'section'  => 'plumbelt_header',

		    'settings' => 'ti_header_logo',

		    'priority' => '1',

		) ) );



		/* Header - Contact Title */

		$wp_customize->add_setting( 'ti_header_contact_title',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text', 'default' => __('Call me now:','plumbelt-lite')) );

		$wp_customize->add_control( 'ti_header_contact_title', array(

		    'label'    => __( 'Contact - Title:', 'plumbelt-lite' ),

		    'section'  => 'plumbelt_header',

		    'settings' => 'ti_header_contact_title',

			'priority' => '2',

		) );



		/* Header - Contact Telephone */

		$wp_customize->add_setting( 'ti_header_contact_telephone' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => '(+4) 0749.555.777'));

		$wp_customize->add_control( 'ti_header_contact_telephone', array(

		    'label'    => __( 'Contact - Telephone:', 'plumbelt-lite' ),

		    'section'  => 'plumbelt_header',

		    'settings' => 'ti_header_contact_telephone',

			'priority' => '3',

		) );



		/* Header - Facebook Link */

		$wp_customize->add_setting( 'ti_header_facebook_link',
        array('sanitize_callback' => 'esc_url_raw', 'default' => '#') );

		$wp_customize->add_control( 'ti_header_facebook_link', array(

		    'label'    => __( 'Facebook - Link:', 'plumbelt-lite' ),

		    'section'  => 'plumbelt_header',

		    'settings' => 'ti_header_facebook_link',

			'priority' => '4',

		) );



		/* Header - Twitter Link */

		$wp_customize->add_setting( 'ti_header_twitter_link',
        array('sanitize_callback' => 'esc_url_raw', 'default' => '#') );

		$wp_customize->add_control( 'ti_header_twitter_link', array(

		    'label'    => __( 'Twitter - Link:', 'plumbelt-lite' ),

		    'section'  => 'plumbelt_header',

		    'settings' => 'ti_header_twitter_link',

			'priority' => '5',

		) );



		/* Header - YouTube Link */

		$wp_customize->add_setting( 'ti_header_youtube_link',
        array('sanitize_callback' => 'esc_url_raw', 'default' => '#') );

		$wp_customize->add_control( 'ti_header_youtube_link', array(

		    'label'    => __( 'YouTube - Link:', 'plumbelt-lite' ),

		    'section'  => 'plumbelt_header',

		    'settings' => 'ti_header_youtube_link',

			'priority' => '6',

		) );



	/*

    ** Subheader Customizer

    */

    $wp_customize->add_section( 'plumbelt_subheader' , array(

    	'title'       => __( 'Subheader', 'plumbelt-lite' ),

    	'priority'    => 250,

	) );



		/* Subheader - Title */

		$wp_customize->add_setting( 'ti_subheader_title' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => __('This is a nice headline to get my attention','plumbelt-lite')));

		$wp_customize->add_control( 'ti_subheader_title', array(

		    'label'    => __( 'Title:', 'plumbelt-lite' ),

		    'section'  => 'plumbelt_subheader',

		    'settings' => 'ti_subheader_title',

			'priority' => '1',

		) );



		/* Subheader - Content */

		$wp_customize->add_setting( 'ti_subheader_content',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => __( 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi', 'plumbelt-lite' )) );

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_subheader_content', array(

		            'label' 	=> __( 'Content:', 'plumbelt-lite' ),

		            'section' 	=> 'plumbelt_subheader',

		            'settings' 	=> 'ti_subheader_content',

		            'priority' 	=> '2'

		        )

		    )

		);



		/* Subheader - Contact Form - Shortcode */

		$wp_customize->add_setting( 'ti_subheader_contact_form_shortcode' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_subheader_contact_form_shortcode', array(

		            'label' 	=> __( 'Contact Form 7 - Shortcode:', 'plumbelt-lite' ),

		            'section' 	=> 'plumbelt_subheader',

		            'settings' 	=> 'ti_subheader_contact_form_shortcode',

		            'priority' 	=> '4'

		        )

		    )

		);



	/*

    ** Frontpage Customizer

    */

    $wp_customize->add_section( 'frontpage_customizer' , array(

    	'title'       => __( 'Frontpage', 'plumbelt-lite' ),

    	'priority'    => 300,

	) );


		/* Front Page - Latest posts */

		$wp_customize->add_setting( 'ti_frontpage_latestposts' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_select','default' => 'show'));

		$wp_customize->add_control( 'ti_frontpage_latestposts', array(
		
			'type' => 'select',

		    'label'    => __( 'Show or hide latest posts', 'plumbelt-lite' ),

		    'section'  => 'frontpage_customizer',

		    'settings' => 'ti_frontpage_latestposts',

			'priority' => '1',
			
			'choices' => array(
					'show' => 'Show',
					'hide' => 'Hide'
			),

		) );
	

		/* Frontpage - Box One - Title */

		$wp_customize->add_setting( 'ti_frontpage_boxone_title' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));

		$wp_customize->add_control( 'ti_frontpage_boxone_title', array(

		    'label'    => __( 'Box One - Title:', 'plumbelt-lite' ),

		    'section'  => 'frontpage_customizer',

		    'settings' => 'ti_frontpage_boxone_title',

			'priority' => '2',

		) );



		/* Front Page - Box One - Content */

		$wp_customize->add_setting( 'ti_frontpage_boxone_content' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default'=>__('Go to Appearance - Customize, to add content.','plumbelt-lite')));

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_boxone_content', array(

		            'label' 	=> __( 'Box One - Content:', 'plumbelt-lite' ),

		            'section' 	=> 'frontpage_customizer',

		            'settings' 	=> 'ti_frontpage_boxone_content',

		            'priority' 	=> '3'

		        )

		    )

		);



		/* Frontpage - Box Two - Title */

		$wp_customize->add_setting( 'ti_frontpage_boxtwo_title' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));

		$wp_customize->add_control( 'ti_frontpage_boxtwo_title', array(

		    'label'    => __( 'Box Two - Title:', 'plumbelt-lite' ),

		    'section'  => 'frontpage_customizer',

		    'settings' => 'ti_frontpage_boxtwo_title',

			'priority' => '4',

		) );



		/* Front Page - Box Two - Content */

		$wp_customize->add_setting( 'ti_frontpage_boxtwo_content',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default'=>__('Go to Appearance - Customize, to add content.','plumbelt-lite')) );

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_boxtwo_content', array(

		            'label' 	=> __( 'Box Two - Content:', 'plumbelt-lite' ),

		            'section' 	=> 'frontpage_customizer',

		            'settings' 	=> 'ti_frontpage_boxtwo_content',

		            'priority' 	=> '5'

		        )

		    )

		);



		/* Frontpage - Box Three - Title */

		$wp_customize->add_setting( 'ti_frontpage_boxthree_title',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text') );

		$wp_customize->add_control( 'ti_frontpage_boxthree_title', array(

		    'label'    => __( 'Box Three - Title:', 'plumbelt-lite' ),

		    'section'  => 'frontpage_customizer',

		    'settings' => 'ti_frontpage_boxthree_title',

			'priority' => '6',

		) );



		/* Front Page - Box Three - Content */

		$wp_customize->add_setting( 'ti_frontpage_boxthree_content',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default'=>__('Go to Appearance - Customize, to add content.','plumbelt-lite')) );

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_boxthree_content', array(

		            'label' 	=> __( 'Box Three - Content:', 'plumbelt-lite' ),

		            'section' 	=> 'frontpage_customizer',

		            'settings' 	=> 'ti_frontpage_boxthree_content',

		            'priority' 	=> '7'

		        )

		    )

		);



		/* Front Page - Article - Image */

		$wp_customize->add_setting( 'ti_frontpage_article_image',array('default' => get_template_directory_uri() .'/upload/article-1.jpg', 'sanitize_callback' => 'esc_url_raw') );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_frontpage_article_image', array(

		    'label'    => __( 'About Us - Image:', 'plumbelt-lite' ),

		    'section'  => 'frontpage_customizer',

		    'settings' => 'ti_frontpage_article_image',

		    'priority' => '8',

		) ) );



		/* Front Page - Article - Title */

		$wp_customize->add_setting( 'ti_frontpage_article_title' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => 'About our services'));

		$wp_customize->add_control( 'ti_frontpage_article_title', array(

		    'label'    => __( 'About Us - Title:', 'plumbelt-lite' ),

		    'section'  => 'frontpage_customizer',

		    'settings' => 'ti_frontpage_article_title',

			'priority' => '9',

		) );



		/* Front Page - Article - Content */

		$wp_customize->add_setting( 'ti_frontpage_article_content',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit</p><p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p><p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p><p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>') );

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_frontpage_article_content', array(

		            'label' 	=> __( 'About Us - Content:', 'plumbelt-lite' ),

		            'section' 	=> 'frontpage_customizer',

		            'settings' 	=> 'ti_frontpage_article_content',

		            'priority' 	=> '10'

		        )

		    )

		);
		
		

	/* Testimonials */
	
	$wp_customize->add_section( 'plumbelt_testimonials' , array(
	
		'title'      => __('Testimonials','plumbelt-lite'),
		'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/plumbelt-plumbing-wordpress-theme' target='_blank'>Get it now!</a>",'plumbelt-lite'),
		'priority'   => 310,
	));
	$wp_customize->add_setting(
        'plumbelt_testimonials',array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));
	
	$wp_customize->add_control( new plumbelt_lite_Theme_Support( $wp_customize, 'plumbelt_testimonials',
	    array(
	        'section' => 'plumbelt_testimonials',
	   )
	));
	
	/* Our Team */
	
	$wp_customize->add_section( 'plumbelt_our_team' , array(
	
		'title'      => __('Our Team','plumbelt-lite'),
		'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/plumbelt-plumbing-wordpress-theme' target='_blank'>Get it now!</a>",'plumbelt-lite'),
		'priority'   => 320,
	));
	$wp_customize->add_setting(
        'plumbelt_our_team',array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));
	
	$wp_customize->add_control( new plumbelt_lite_Theme_Support( $wp_customize, 'plumbelt_our_team',
	    array(
	        'section' => 'plumbelt_our_team',
	   )
	));
	
	/* Projects */
	
	$wp_customize->add_section( 'plumbelt_projects' , array(
	
		'title'      => __('Projects','plumbelt-lite'),
		'description' => __( "This feature is available in the pro version. <a href='https://themeisle.com/themes/plumbelt-plumbing-wordpress-theme' target='_blank'>Get it now!</a>",'plumbelt-lite'),
		'priority'   => 330,
	));
	$wp_customize->add_setting(
        'plumbelt_projects',array('sanitize_callback' => 'plumbelt_lite_sanitize_text'));
	
	$wp_customize->add_control( new plumbelt_lite_Theme_Support( $wp_customize, 'plumbelt_projects',
	    array(
	        'section' => 'plumbelt_projects',
	   )
	));

	/*

    ** Footer Customizer

    */

    $wp_customize->add_section( 'footer_customizer' , array(

    	'title'       => __( 'Footer', 'plumbelt-lite' ),

    	'priority'    => 350,

	) );



		/* Footer - About Us - Title */

		$wp_customize->add_setting( 'ti_footer_aboutus_title' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => __( 'About Us', 'plumbelt-lite' )));

		$wp_customize->add_control( 'ti_footer_aboutus_title', array(

		    'label'    => __( 'About Us - Title:', 'plumbelt-lite' ),

		    'section'  => 'footer_customizer',

		    'settings' => 'ti_footer_aboutus_title',

			'priority' => '1',

		) );



		/* Footer - About Us - Content */

		$wp_customize->add_setting( 'ti_footer_aboutus_content',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => __( 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed', 'plumbelt-lite' )) );

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_aboutus_content', array(

		            'label' 	=> __( 'About Us - Content:', 'plumbelt-lite' ),

		            'section' 	=> 'footer_customizer',

		            'settings' 	=> 'ti_footer_aboutus_content',

		            'priority' 	=> '2'

		        )

		    )

		);



		/* Footer - Contact Us - Title */

		$wp_customize->add_setting( 'ti_footer_contactus_title',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' =>  __( 'Contact Us', 'plumbelt-lite' )) );

		$wp_customize->add_control( 'ti_footer_contactus_title', array(

		    'label'    => __( 'Contact Us - Title:', 'plumbelt-lite' ),

		    'section'  => 'footer_customizer',

		    'settings' => 'ti_footer_contactus_title',

			'priority' => '3',

		) );



		/* Footer - Contact Us - Content */

		$wp_customize->add_setting( 'ti_footer_contactus_content' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => '<p>Romania, Bucuresti<br />Str. Loreum ipsum, Nr. 2</p><p>Tel: (+4) 0746123456<br />E-mail: contact@domeniu.com</p>'));

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_contactus_content', array(

		            'label' 	=> __( 'Contact Us - Content:', 'plumbelt-lite' ),

		            'section' 	=> 'footer_customizer',

		            'settings' 	=> 'ti_footer_contactus_content',

		            'priority' 	=> '4'

		        )

		    )

		);



		/* Footer - Map - Title */

		$wp_customize->add_setting( 'ti_footer_map_title' ,
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => __( 'Map', 'plumbelt-lite' )));

		$wp_customize->add_control( 'ti_footer_map_title', array(

		    'label'    => __( 'Map - Title:', 'plumbelt-lite' ),

		    'section'  => 'footer_customizer',

		    'settings' => 'ti_footer_map_title',

			'priority' => '5',

		) );



		/* Footer - Contact Us - Iframe/ Code */

		$wp_customize->add_setting( 'ti_footer_iframecode_content',array('default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193572.0037917104!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York!5e0!3m2!1sro!2sro!4v1404281704059" width="600" height="450" frameborder="0" style="border:0"></iframe>','sanitize_callback' => 'plumbelt_lite_sanitize_iframe') );

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_footer_iframecode_content', array(

		            'label' 	=> __( 'Contact Us - Iframe/ Code:', 'plumbelt-lite' ),

		            'section' 	=> 'footer_customizer',

		            'settings' 	=> 'ti_footer_iframecode_content',

		            'priority' 	=> '6'

		        )

		    )

		);



	/*

    ** Contact Customizer

    */

    $wp_customize->add_section( 'contact_customizer' , array(

    	'title'       => __( 'Contact', 'plumbelt-lite' ),

    	'priority'    => 400,

	) );



		/* Contact - Sidebar - Content */

		$wp_customize->add_setting( 'ti_contact_sidebar_content',
        array('sanitize_callback' => 'plumbelt_lite_sanitize_text','default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'plumbelt-lite' )) );

		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_contact_sidebar_content', array(

		            'label' 	=> __( 'Sidebar - Content:', 'plumbelt-lite' ),

		            'section' 	=> 'contact_customizer',

		            'settings' 	=> 'ti_contact_sidebar_content',

		            'priority' 	=> '1'

		        )

		    )

		);
		
		function plumbelt_lite_sanitize_text( $input ) {
			return wp_kses_post( force_balance_tags( $input ) );
		}
		
		function plumbelt_lite_sanitize_notes( $input ) {
			return $input;
		}	
		
		function plumbelt_lite_sanitize_iframe( $input ) {
			return force_balance_tags( $input );
		}
		
		function plumbelt_lite_sanitize_select( $input ) {
			return $input;
		}

}

add_action( 'customize_register', 'plumbelt_lite_customizer' );



if( class_exists( 'WP_Customize_Control' ) ):

	class Example_Customize_Textarea_Control extends WP_Customize_Control {

	    public $type = 'textarea';



	    public function render_content() { ?>



	        <label>

	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

	        </label>



	        <?php

	    }

	}

endif;

/**

 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.

 */

function plumbelt_lite_customize_preview_js() {

	wp_enqueue_script( 'plumbelt_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );

}

add_action( 'customize_preview_init', 'plumbelt_lite_customize_preview_js' );


function plumbelt_lite_registers() {

	wp_register_script( 'plumbelt_lite_customizer_script', get_template_directory_uri() . '/js/plumbelt_lite_customizer.js', array("jquery"), '20120206', true  );

	wp_enqueue_script( 'plumbelt_lite_customizer_script' );
	wp_localize_script( 'plumbelt_lite_customizer_script', 'plumbelt_lite_pro_text', array(
		'doc'  => __( 'Documentation', 'plumbelt-lite' ),
		'pro' => __( 'View PRO Version', 'plumbelt-lite' ),
		'review' => __('Leave a review ( it will help us )','plumbelt-lite')
	) );

}

add_action( 'customize_controls_enqueue_scripts', 'plumbelt_lite_registers' );

?>
