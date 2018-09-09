<section id="blog-about-section">
  <section>
    <img src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" class="profile-img"/>
    <article class="blog-article-aboutme">
      <h4>About me</h4>
      <p>oof, I like tacos its very nice stuff.</p>
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
