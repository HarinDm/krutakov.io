<section class="read-more">
  <h2 class="page__title-h2">Может быть интересно</h2>
  <div class="read-more__items slider-inner js--swiper_read-more">
    <div class="swiper-wrapper">
    <?php
       $articles = get_field('_article');
       $all_posts = get_posts( array(
        'numberposts' => -1,
        'category'    => 0,
        'orderby'     => 'rand',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ) );
      
      $posts =  $articles['_readMoreItems'] ? $articles['_readMoreItems'] : $all_posts;

     foreach ($posts as $post) :
                setup_postdata($post); ?>
                <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
    <?php endforeach;
    wp_reset_postdata(); ?>
     
    </div>
    <div class="swiper-toggles">
      <div class="swiper-button-prev js--swiper-button-prev"></div>
      <div class="swiper-button-next js--swiper-button-next"></div>
    </div>
  </div>
  <script src="js/read-more/read-more.component.js"></script>
</section>