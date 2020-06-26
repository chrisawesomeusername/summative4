<div class="row">
<?php
if (have_posts()) : ?>
  <div class="card-columns">
    <?php
  while (have_posts()):
    the_post();
  ?>


  <div class="card" style="width: 18rem;">
      <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
      </div>
    </div>





<?php endwhile;?>
</div>
<?php
 else:
endif;

?>

<div class="col-lg-3">

  <?php if(is_active_sidebar('blog-sidebar')) :?>
    <?php dynamic_sidebar('blog-sidebar'); ?>

  <?php endif; ?>
</div>
</div>
