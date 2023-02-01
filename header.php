<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<style>
  header nav { display: grid; grid-template-columns: 1fr 1fr; border-bottom: 2px solid #EFEFEF; }
  header nav a { text-decoration: none; color: var(--black); }
  header nav ul { list-style:none; margin:0; padding:0; }
  header nav .nav-menu { text-align: right; }
  header nav .nav-menu ul { display: inline; }
  header nav .nav-menu li { display: inline; padding: 0 .5em; }
  header nav .nav-logo img { width:100px; }
</style>

<!-- HEADER -->
<header>
  <nav>
    <section class="nav-logo">
      <a href="/">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="<?php echo get_bloginfo('name'); ?>">
      </a>
    </section>

    <section class="nav-menu">
      <?php 
        wp_nav_menu( array(
          'menu'        => 'Top',
          'container'   => false
        ) );
      ?>
      <ul>
        <li><a class="sermons" href="/sermons/">Sermons</a></li>
        <li><a class="events" href="/events/">Events</a></li>
        <li><a class="ministries" href="/ministries/">Ministries</a></li>
        <li><a class="articles" href="/blog/">Blog</a></li>
      </ul>
    </section>
  </nav>
</header>

<script>
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>