<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ):
    while( have_posts() ): the_post();
?>

    <section class="container default-container">
      <div class="row">
        <article class="col-10 col-centered">
          <?php
          if( has_post_thumbnail() ):
            the_post_thumbnail('954x560');
          endif;
          ?>
          <h2>
            <?php the_title(); ?>
          </h2>
          <div class="post-meta">
            <span class="post-date">
              <?php the_time('d M y'); ?>
            </span>
            |
            <span class="post-author">
              <?php the_author(); ?>
            </span>

            <?php the_content(); ?>

          </div>
        </article>
      </div>
      <div class="row">
        <div class="col-8 col-centered text-center">
          <a href="#" class="button button--purple" onclick="goBack()">
            Back
          </a>
        </div>
      </div>
    </section>

<?php
    endwhile;
  endif;

  get_footer();
