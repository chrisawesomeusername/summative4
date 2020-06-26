<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="page-wrap">
<div class="container mt-2">
  <div class="d-flex justify-content-between mb-3">
    <h1> <?php the_title(); ?></h1>
    <h5><?php get_template_part('includes/section','content'); ?></h5>
  </div>
      
      <div class="">
              
        </div>
      <div class="row">
        <div class="col-lg-12">
          <form>
              <div class="">
                <label class=""> Username </label>
                <input class="form-control" type="text"/>
                <label class=""> Email </label>
                <input class="form-control" type="text"/>
                <label class=""> Message </label>
                <input id="contactMessage" class="form-control" type="text"/>
              </div>
              <button class="btn btn-lg btn-info mt-5"> Submit </button>
          </form>

        </div>

        <div class="col-lg-3 widget mt-5 pl-5">

          <?php if(is_active_sidebar('page-sidebar')) :?>
            <?php dynamic_sidebar('page-sidebar'); ?>

          <?php endif; ?>
        </div>
        </section>

      </div>



</div>
</section>

<?php get_footer(); ?>
