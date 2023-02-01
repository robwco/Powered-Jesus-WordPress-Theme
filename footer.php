<style>
  footer p { color: #777; font-size: 16px; }
  footer a { color: #333; }
  footer svg { width:75px; height: auto; }
</style>

<!-- START FOOTER -->		 
<footer class="my-3">
  <div>
    <p>        
      <a href="https://poweredxjesus.com">
        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/logo.svg' ); ?>
        <br>
        A Free WordPress Theme for Churches
      </a>  
    </p>

    <p style="font-size:13px;">
      &copy;<?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved.
    </p>
  </div>    
</footer>
<!-- END FOOTER -->

<?php wp_footer(); ?>

</body>
</html>
