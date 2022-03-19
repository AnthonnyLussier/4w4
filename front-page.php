<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">W</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">T</div>
    <div class="animation__bloc">I</div>
    <div class="animation__bloc">M</div>
</section>

    
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>