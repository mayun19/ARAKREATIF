<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<?php get_header(); ?>
  <div class="row" id="single">
    <div class="col-sm-10 blog-main">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title">  <?php the_title(); ?></h2>
            <?php the_content(); ?>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> 
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php __('No Post Found') ?></p>
      <?php endif; ?> 
    </div>
  </div>