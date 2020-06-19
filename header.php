
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en" dir="ltr"><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Beula">
    <meta name="description" content="Plant Wellington is a community garden blog website. It offers varieties of plants such herbs, shrubs and medicinal plants.">
    <meta name="keywords" content="mint, roses, shrubs, plants, herbs, cactus">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon"> -->
    <!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css"> -->
    <script type="text/javascript">
     var _gaq = _gaq || [];
     _gaq.push(['_setAccount', 'UA-XXXXXXXX-Y']);
     _gaq.push(['_trackPageview']);
     (function()
     {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();
    </script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>



  <body>
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">

        </div>

    <!-- bootstrap nav-walker -->
    <div class="">
      <nav class="w-100 navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url(''); ?>">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <?php wp_nav_menu( array(
              'theme_location'  => 'primary',
              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
              'container'       => 'ul',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'bs-example-navbar-collapse-1',
              'menu_class'      => 'navbar-nav',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
        </div>
      </nav>
    </div>
  </div>
