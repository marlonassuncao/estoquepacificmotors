<?php get_header(); ?>

  <section class="section" id="sucesso">
    <div class="container">
      <div class="your-clock"></div>
      <div class="texto">
        <img src="<?php bloginfo('template_directory'); ?>/app/images/t.png" alt="<?php wp_title(); ?>">
        <h1><?php echo generateRandomString(); ?></h1>
      </div>
      <div class="topo">
        <img src="<?php bloginfo('template_directory'); ?>/app/images/topo.png" alt="<?php wp_title(); ?>">
      </div>
    </div>
  </section>

  <script>
    fbq('track', 'Contact');
  </script>
  <script>
    gtag('event', 'conversion', {'send_to': 'AW-768414052/n8wLCO3pvpUBEOSitO4C'});
  </script>

<?php get_footer(); ?>