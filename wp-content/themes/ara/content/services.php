<main id="services" class="container-fluid">
    <?php
        $args = array(
        'post_type' => 'post' ,
        'orderby' => 'date' ,
        'order' => 'DESC' ,
        'posts_per_page' => 3,
        'category_name'         => 'our-services',
        'paged' => get_query_var('paged'),
        'post_parent' => $parent
      ); 
      $q = new WP_Query($args);
    ?>
        <h3 class="services">What Do We Offer</h3>
        <hr>
        <div class="row">
          <?php if ( $q->have_posts() ) { 
              while ( $q->have_posts() ) {
                      $q->the_post(); 
          ?>
            <div class="col">
              <div class="card">
                  <h4 class="card-title">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?> 
                  </h4>
                  <?php the_content(); ?>
                  
                 <p><?php __('No Post Found'); ?></p>
              </div>
            </div>   
            <?php } 
                    }?>         
        </div>

        <br>
        <div class="row d-flex justify-content-center text-center">
          <button type="button" class="btn btn-outline-warning"><a href="">See More Our Services</a></button>
        </div>
        <br>
</main>

