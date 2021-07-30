<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>

<main>
  <div class="contact">
    <h1 class="contact__form">Contact</h1>
    <form class="form" method="post">
      <?php echo do_shortcode('[contact-form-7 id="81" title="お問い合わせフォーム"]'); ?>
    </form>




  </div>

  



</main>
<?php get_footer(); ?>