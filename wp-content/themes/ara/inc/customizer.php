<?php 
	function wpb_customize_register($wp_customize){
		//Showcase Section
		$wp_customize->add_section('showcase', array(
			'title'	=> __('Showcase', 'wpbootstrap'),
			'description' => sprintf(__('Option for showcase', 'wpbootstrap')),
			'priority'		=> 130	
		));

		$wp_customize->add_setting('showcase_heading', array(
			'default' => _x('Welcome...','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('showcase_heading', array(
			'label'		=> __('Heading', 'wpbootstrap'),
			'section'	=> 'showcase',
			'priority'	=> 1
		));

		$wp_customize->add_setting('showcase_title', array(
			'default' => _x("I'M",'wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('showcase_title', array(
			'label'		=> __('Title', 'wpbootstrap'),
			'section'	=> 'showcase',
			'priority'	=> 2
		));

		$wp_customize->add_setting('showcase_desc', array(
			'default' => _x('I can help you to create a great video with meaningful message inside.','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('showcase_desc', array(
			'label'		=> __('About', 'wpbootstrap'),
			'section'	=> 'showcase',
			'priority'	=> 3
		));
	

		$wp_customize->add_setting('btn_text', array(
			'default' => _x('Read more','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('btn_text', array(
			'label' => __('Button Text', 'wpbootstrap'),
			'section' => 'showcase',
			'priority' => 4
		));

		//Services Section
		$wp_customize->add_section('services', array(
			'title'	=> __('Services', 'wpbootstrap'),
			'description' => sprintf(__('Option for services', 'wpbootstrap')),
			'priority'		=> 130	
		));

		$wp_customize->add_setting('services_heading', array(
			'default' => _x('What Do We Offer','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_heading', array(
			'label'		=> __('Services Heading', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 1
		));

		$wp_customize->add_setting('services_ctitle1', array(
			'default' => _x('Video Creator','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_ctitle1', array(
			'label'		=> __('Title 1', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 2
		));
		$wp_customize->add_setting('services_vurl1', array(
			'default' => _x('https://www.youtube.com/embed/lYZ4GdKiN9Q?controls=0','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_vurl1', array(
			'label'		=> __('Video 1', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 3
		));
		$wp_customize->add_setting('services_content1', array(
			'default' => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laboriosam delectus soluta eaque harum hic impedit beatae quo maxime? Sit, quos cupiditate. Iusto accusamus velit libero, optio quam cumque sequi!','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_content1', array(
			'label'		=> __('Content 1', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 4
		));
		$wp_customize->add_setting('services_ctitle2', array(
			'default' => _x('Video Creator','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_ctitle2', array(
			'label'		=> __('Title 2', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 5
		));
		$wp_customize->add_setting('services_vurl2', array(
			'default' => _x('https://www.youtube.com/embed/lYZ4GdKiN9Q?controls=0','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_vurl2', array(
			'label'		=> __('Video 2', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 6
		));
		$wp_customize->add_setting('services_content2', array(
			'default' => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laboriosam delectus soluta eaque harum hic impedit beatae quo maxime? Sit, quos cupiditate. Iusto accusamus velit libero, optio quam cumque sequi!','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_content2', array(
			'label'		=> __('Content 2', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 7
		));
		$wp_customize->add_setting('services_ctitle3', array(
			'default' => _x('Video Creator','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_ctitle3', array(
			'label'		=> __('Title 3', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 8
		));
		$wp_customize->add_setting('services_vurl3', array(
			'default' => _x('https://www.youtube.com/embed/lYZ4GdKiN9Q?controls=0','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_vurl3', array(
			'label'		=> __('Video 3', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 9
		));
		$wp_customize->add_setting('services_content3', array(
			'default' => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laboriosam delectus soluta eaque harum hic impedit beatae quo maxime? Sit, quos cupiditate. Iusto accusamus velit libero, optio quam cumque sequi!','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('services_content3', array(
			'label'		=> __('Content 3', 'wpbootstrap'),
			'section'	=> 'services',
			'priority'	=> 10
		));

		$wp_customize->add_setting('btn_urls', array(
			'default' => _x('http://localhost:440/arakreatif/our-services/','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('btn_urls', array(
			'label' => __('Button URL', 'wpbootstrap'),
			'section' => 'services',
			'priority' => 11
		));		

		$wp_customize->add_setting('btn_texts', array(
			'default' => _x('See More Our Services','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('btn_texts', array(
			'label' => __('Button Text', 'wpbootstrap'),
			'section' => 'services',
			'priority' => 12
		));

		//Porto Section
		$wp_customize->add_section('porto', array(
			'title'	=> __('Portofolio', 'wpbootstrap'),
			'description' => sprintf(__('Option for porto', 'wpbootstrap')),
			'priority'		=> 130	
		));

		$wp_customize->add_setting('porto_image', array(
			'default' => get_bloginfo('template_directory').'/img/ara-porto.png',
			'type'	  => 'theme_mod'

		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'porto_image', array(
			'label' => __('Portofolio Image', 'wp-bootstrap'),
			'section' => 'porto',
			'setting' => 'porto_image',
			'priority' => 1

		)));

		$wp_customize->add_setting('porto_heading', array(
			'default' => _x('Our Portfolio','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('porto_heading', array(
			'label'		=> __('Heading', 'wpbootstrap'),
			'section'	=> 'porto',
			'priority'	=> 2
		));

		$wp_customize->add_setting('porto_desc', array(
			'default' => _x('Some examples of video projects that we are working on.','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('porto_desc', array(
			'label'		=> __('Description', 'wpbootstrap'),
			'section'	=> 'porto',
			'priority'	=> 3
		));

		$wp_customize->add_setting('pbtn_url', array(
			'default' => _x('http://localhost:440/arakreatif/portofolio/','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('pbtn_url', array(
			'label' => __('Button URL', 'wpbootstrap'),
			'section' => 'porto',
			'priority' => 4
		));		

		$wp_customize->add_setting('pbtn_text', array(
			'default' => _x('See More Portofolio','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('pbtn_text', array(
			'label' => __('Button Text', 'wpbootstrap'),
			'section' => 'porto',
			'priority' => 5
		));

		//Contact Section
		$wp_customize->add_section('contact-other', array(
			'title'	=> __('Contact', 'wpbootstrap'),
			'description' => sprintf(__('Option for contact-other', 'wpbootstrap')),
			'priority'		=> 130	
		));

		$wp_customize->add_setting('contact-other_phone', array(
			'default' => _x('+6281393175850','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('contact-other_phone', array(
			'label'		=> __('Phone', 'wpbootstrap'),
			'section'	=> 'contact-other',
			'priority'	=> 1
		));

		$wp_customize->add_setting('contact-other_address', array(
			'default' => _x('Plaza UNY 4th Floor 168 Affandi St, Yogyakarta 55181, Indonesia.','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('contact-other_address', array(
			'label'		=> __('Address', 'wpbootstrap'),
			'section'	=> 'contact-other',
			'priority'	=> 2
		));

		$wp_customize->add_setting('contact-other_email', array(
			'default' => _x('hello.arakreatif@gmail.com','wpbootstrap'),
			'type'	  => 'theme_mod'
		));

		$wp_customize->add_control('contact-other_email', array(
			'label'		=> __('Email', 'wpbootstrap'),
			'section'	=> 'contact-other',
			'priority'	=> 3
		));
	}

	add_action('customize_register', 'wpb_customize_register');