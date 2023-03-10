<?php get_header(); ?>
<!-- archive -->
<?php get_header();

$articlesCat = get_posts(array(
  'showposts' => -1,
  'category_name' => 'articles-cat'
));
$videoCat = get_posts(array(
  'showposts' => -1,
  'category_name' => 'video-cat'
));
$all = get_posts(array(
  'showposts' => -1,
  'category_name' => 'articles-cat, video-cat'
));

?>

<main class="page page-articles">
  <section class="articles">
    <div class="wrapper">
      <h1 class="page__title-h1 cl1">
        <span class="page_red">Статьи </span>и видео
      </h1>
      <div class="articles-inner">
        <div class="articles__sidebar">
          <div class="articles__slider">
            <div class="slider">
              <div class="swiper js--swiper sd">
                <div class="swiper-wrapper">

                  <?php $articles = get_field('_articles');
                  if ($articles) :
                    foreach ($articles["slider-articles"] as $slide) :
                      $post = get_post($slide->ID);
                      setup_postdata($slide); 
                      // echo '<pre>';
                      // echo var_dump($post );
                      // echo '</pre>';
                      $article = get_field('_article');
                      $cats = wp_get_post_categories( $post->ID, [ 'fields' => 'all' ] );
                      $catName = $cats[0]->name;

                      ?>
                      <a class="swiper-slide" href="">
                        <img src="<?php echo $article['slideImg']?>" alt="">
                        <div class="slider__info">
                          <div class="slider__info-date">
                            <div class="date__info">
                              <div class="date__info-date"><?php echo get_the_date('j F Y'); ?></div>
                              <div class="date__info-category"><?php echo $catName;?></div>
                            </div>
                          </div>
                          <div class="slider__info-title"><?php the_title(); ?></div>
                          <div class="slider__info-tags">
                            <?php include(TEMPLATEPATH . '/components/tags.php'); ?>
                          </div>
                        </div>
                      </a>
                  <?php endforeach;
                  endif;
                  wp_reset_postdata();
                  ?>

                </div>
                <div class="swiper-pagination js--swiper-pagination"></div>
                <div class="swiper-toggles">
                  <div class="swiper-button-prev js--swiper-button-prev"></div>
                  <div class="swiper-button-next js--swiper-button-next"></div>
                </div>
              </div>
              <script src="js/slider/slider.component.js"></script>
            </div>
          </div>
          <div class="articles__tags">
            <h3 class="page__title-h3 page_red">Теги</h3>
            <?php
            $tags = get_tags([
              'number'       => 0,
              'offset'       => 0,
              'orderby'      => 'id',
              'order'        => 'ASC',
              'hide_empty'   => true,
              'fields'       => 'all',
              'slug'         => '',
              'hierarchical' => true,
              'name__like'   => '',
              'pad_counts'   => false,
              'get'          => '',
              'child_of'     => 0,
              'parent'       => '',
            ]);

            ?>
            <div class="tags">
              <?php foreach ($tags as $tag) :
                $tag_link = get_tag_link($tag->term_id); ?>
                <a class="page-link tag <?php echo $tag->slug; ?> " href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a>
              <?php endforeach;  ?>

            </div>
          </div>
        </div>
        <div class="articles__content" id="tabs">
          <div class="tabs-nav">
            <div class="tab-link page-link is-active">все</div>
            <div class="tab-link page-link">Статьи</div>
            <div class="tab-link page-link">Видео</div>
          </div>
          <div class="tab-content is-active">
            <div class="articles__items">
              <?php foreach ($all as $post) :
                setup_postdata($post); ?>
                <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
              <?php endforeach;
              wp_reset_postdata(); ?>


            </div>
          </div>
          <div class="tab-content">
            <div class="articles__items">

              <?php foreach ($articlesCat as $post) :
                setup_postdata($post); ?>
                <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
              <?php endforeach;
              wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="tab-content">
            <div class="articles__items">
              <?php foreach ($videoCat as $post) :
                setup_postdata($post); ?>
                <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
              <?php endforeach;
              wp_reset_postdata(); ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<!-- /archive -->
<?php get_footer(); ?>