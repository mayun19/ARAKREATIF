<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?> | 
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?> </title>
    <link rel="icon" href="img/ara_icon.ico">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300&amp;subset=cyrillic-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <?php wp_head();?>  
    <style> 
      #porto{
          background:url( <?php echo get_theme_mod('porto_image', get_bloginfo('template_url').'/img/ara-porto.png'); ?>) center center;

      }
    </style>	
</head>

<body>
  <!--Main layout-->
  <header id="header" data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar justify-content-end navbar-expand-md navbar-dark primary-color fixed-top scrolling-navbar" style="">
      <div class="container">
        <!-- Navbar brand -->
        <div class="navbar-brand">
          <span id="header" class="navbar-brand mb-0 h1">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/ara2.PNG">
          </span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#div" aria-controls="div" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <container class="collapse navbar-collapse" id="div">
          <nav class ="navbar-item ml-auto">
            <?php
            wp_nav_menu( array(
              'theme_location'  => 'primary',
                      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                      'container'       => 'div',
                      'container_class' => 'collapse navbar-collapse',
                      'container_id'    => 'div',
                      'menu_class'      => 'navbar-nav ml-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          =>  new WP_Bootstrap_Navwalker(),
                    ) );
            ?>       
          </nav>  
        </container>
      </div>
    </nav>

    <div id="intro" class="showcase">
      <div class="video">
        <iframe src="https://www.youtube.com/embed/x0BDd7urBaM?start=22&amp;autoplay=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;iv_load_policy=3&amp;controls=0&amp;mute=1&amp;playlist=x0BDd7urBaM" width="1349px" height="800px" frameborder="0">
        </iframe>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-center h-100">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-md-10 text-center">
            <!-- Heading -->
            <h5 style=""><?php echo get_theme_mod('showcase_heading', 'Welcome..'); ?></h5>
            <h2 class="display-4 font-weight-bold"><?php echo get_theme_mod('showcase_title', "I'm"); ?>
            <span id="typed"></span>
            </h2>

            <script type="text/javascript">
              var typed = new Typed("#typed", {
                strings: ["ARA KREATIF", "Motion Graphic", "Video Creator"],
                typeSpeed : 100,
                startDelay: 30,
                loop:true
              });
            </script>
                            
            <!-- Description -->
            <h4 class="white-text my-4 ont-weight-light" style=""><?php echo get_theme_mod('showcase_desc', 'I can help you to create a great video with meaningful message inside.'); ?></h4>
            <a href="#services" class="btn btn-info btn-md"><?php echo get_theme_mod('btn_text','Read More'); ?><i class="fa fa-book ml-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </header>
<br>

  <main id="services" class="container-fluid">
      <section class="services">
				<h3 class="services"><?php echo get_theme_mod('services_heading', 'What Do We Offer'); ?></h3>
				<hr>
        <div class="content-services">
          <div class="row">
            <div class="col-md-4">
              <div class="card"> 
                <div class="card-body">
                  <div class="row">
                    <h4 class="card-title"><?php echo get_theme_mod('services_ctitle1', 'Video Creator'); ?></h4>
                  </div>
                  <div class="row">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="300" height="170" src="<?php echo get_theme_mod('services_vurl1' , 'https://www.youtube.com/embed/lYZ4GdKiN9Q?controls=0') ?>" allowfullscreen="" frameborder="0"></iframe>
                    </div>
                  </div>
                  <span>
                    <p><?php echo get_theme_mod('services_content1', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laboriosam delectus soluta eaque harum hic impedit beatae quo maxime? Sit, quos cupiditate. Iusto accusamus velit libero, optio quam cumque sequi!'); ?></p>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card"> 
                <div class="card-body">
                  <div class="row">
                    <h4 class="card-title"><?php echo get_theme_mod('services_ctitle2', 'Video Creator'); ?></h4>
                  </div>
                  <div class="row">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="300" height="170" src="<?php echo get_theme_mod('services_vurl2' , 'https://www.youtube.com/embed/lYZ4GdKiN9Q?controls=0') ?>" allowfullscreen="" frameborder="0"></iframe>
                    </div>
                  </div>
                  <span>
                    <p><?php echo get_theme_mod('services_content2', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laboriosam delectus soluta eaque harum hic impedit beatae quo maxime? Sit, quos cupiditate. Iusto accusamus velit libero, optio quam cumque sequi!'); ?></p>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="card"> 
                <div class="card-body">
                  <div class="row">
                    <h4 class="card-title"><?php echo get_theme_mod('services_ctitle3', 'Video Creator'); ?></h4>
                  </div>
                  <div class="row">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="300" height="170" src="<?php echo get_theme_mod('services_vurl3' , 'https://www.youtube.com/embed/lYZ4GdKiN9Q?controls=0') ?>" allowfullscreen="" frameborder="0"></iframe>
                    </div>
                  </div>
                  <span>
                    <p><?php echo get_theme_mod('services_content3', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae laboriosam delectus soluta eaque harum hic impedit beatae quo maxime? Sit, quos cupiditate. Iusto accusamus velit libero, optio quam cumque sequi!'); ?></p>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
				<br>
				<div class="row d-flex justify-content-center text-center">
						<a href="<?php echo get_theme_mod('btn_urls' , 'http://localhost:440/arakreatif/our-services/') ?>" class='btn btn-outline-warning btn-md'><?php echo get_theme_mod('btn_texts','See More Our Services'); ?></a>
				</div>
			</section>
  </main>

  <main id="porto"  class="container-fluid">
      <?php
          $args = array(
          'post_type' => 'post' ,
          'orderby' => 'date' ,
          'order' => 'DESC' ,
          'posts_per_page' => 4,
          'category_name'         => 'porto',
          'paged' => get_query_var('paged'),
          'post_parent' => $parent
        ); 
        $q = new WP_Query($args);
      ?>
        <div class="porto">
            <div class="row" id="porto">
            <h3>
                <span><?php echo get_theme_mod('porto_heading', 'Our Portfolio'); ?></span>
            </h3>
            <div id="content-porto">
                <h5><span><?php echo get_theme_mod('porto_desc', 'Some examples of video projects that we are working on.'); ?></span>
                </h5>
            </div>
            <div class="row">
              <?php if ( $q->have_posts() ) { 
                  while ( $q->have_posts() ) {
                          $q->the_post(); 
              ?>
              <div class="responsive">
                <div class="col">
                  <div class="card">
                    <div class="gallery">
                      <a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
                      <div class="card-title">
                        <?php the_title(); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } 
                    }?>
            </div>
            <br>
            <div class="row d-flex justify-content-center text-center">
            <a href="<?php echo get_theme_mod('pbtn_url' , 'http://localhost:440/arakreatif/portofolio/') ?>" class='btn btn-outline-warning btn-md'><?php echo get_theme_mod('pbtn_text','See More Portofolio'); ?></a>
            </div>
            <br>

        </div>
  </main>

  <main id="contact"  class="container-fluid">
      <div class="contact-other">
        <div class="row">
            <div class="col-md-4">
              <i class="lnr lnr-phone"></i><br>
              <span class="con-list-head">Phone</span><br>
              <span clas="content">
                <?php echo get_theme_mod('contact-other_phone','+6281393175850'); ?>
              </span>
            </div>
            <div class="col-md-4">
              <i class="lnr lnr-map"></i><br>
              <span class="con-list-head">Address</span><br>
              <span clas="content">
                <?php echo get_theme_mod('contact-other_address','Plaza UNY 4th Floor 168 Affandi St, Yogyakarta 55181, Indonesia.'); ?>
              </span>
            </div>
            <div class="col-md-4">
              <i class="lnr lnr-envelope"></i><br>
              <span class="con-list-head">Email</span><br>
              <span clas="content">
                <?php echo get_theme_mod('contact-other_email','hello.arakreatif@gmail.com'); ?>
              </span>
            </div>
        </div>
      </div>
  </main>

  <footer id="footer" class="footer-copyright text-center py-3">
    <div class="footer">
      Created By Mutiara | &copy; <?php echo Date('Y'); ?> - <a class="brand" href=""><?php bloginfo('name'); ?></a>
      <br>
      <a href="#">Back to top</a>
    </div>
  </footer>
  <?php wp_footer(); ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>

  <script src=" <?php bloginfo('template_url');?>/bootstrap/js/bootstrap.js">
  </script>
    <!-- <script src="../../assets/js/vendor/holder.min.js"></script> -->  
</body>
</html>
