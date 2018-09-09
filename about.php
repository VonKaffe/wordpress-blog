<section id="blog-about-section">
  <section>
    <img src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" class="profile-img"/>
    <article class="blog-article-aboutme">
      <h4>About me</h4>
      <p>Cat ipsum dolor sit amet, wake up human for food at 4am
        instead of drinking water from the cat bowl, make sure to steal water
        from the toilet it's 3am, time to create some chaos yet meow all night
        really likes hummus. I like cats because they are fat and fluffy this
        cat happen now, it was too purr-fect!!!</p>
    </article>
    <article class="blog-article-categories">
      <h4>Categories</h4>
      <ol class="list-unstyled">
				<?php wp_list_categories( 'title_li=' ) ?>
			</ol>
    </article>
    <article class="blog-article-archive">
      <h4>Archives</h4>
      <ol class="list-unstyled">
				<?php wp_get_archives(); ?>
			</ol>
    </article>
  </section>
</section>
