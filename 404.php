<?php get_header(); ?>

<body>
  <main>
    <h1 class="main-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/404.png">
</h1>


    <div id="contact">
      <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
      <a href="<?php echo home_url("contact"); ?>" class="contact__btn">お問い合わせ</a>
    </div>
  </main>
  <?php get_footer(); ?>