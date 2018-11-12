<?php
  /*
  ===================
  TEMPLATE NAME: Home
  ===================
  */
  get_header();
  if(have_posts()): while(have_posts()): the_post();
  get_template_part('templates/background');
?>
<section class="page-section">
  <img src="<?php ex_logo('primary', 'light'); ?>" alt="Logo for <?php ex_brand(); ?>" class="logo-home" />
</section>
<?php
  endwhile; endif;
  get_footer();
?>
