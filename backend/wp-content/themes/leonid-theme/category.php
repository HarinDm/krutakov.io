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


$blockACF = get_field('add_logos');
//  echo '<pre>';
//  var_dump($blockACF);
//  echo '</pre>';

      // $fieldsACF = $blockACF['field'];
      // $addLogos = $fieldsACF['logo'];


?>
<!-- category -->
<!-- <main class="page page-articles">
    <section class="articles">
        <div class="wrapper">
            <h1 class="page__title-h1">
                Темы <span class="page_red">по рубрикам</span> 
            </h1>
            <div class="articles-inner">
                <div class="articles__content">

                    <div class="articles__items">

                        <?php while (have_posts()) :
                            the_post();
                        ?>
                            <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
                        <?php endwhile; ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
</main> -->
<!-- /category -->

<!---->
<main class="page page-articles">
  <section class="articles">
    <div class="wrapper">
      <h1 class="page__title-h1">
        Темы <span class="page_red">по рубрикам</span> 
      </h1>
      <div class="articles-inner">
        <div class="articles__sidebar">
          <div class="articles__slider">
            <div class="slider">
            <div class="swiper js--swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper" id="swiper-wrapper-387106f815a3b810b" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                <div class="swiper-slide swiper-slide-active" style="width: 587px;" role="group" aria-label="1 / 4">
                  <a href="http://localhost:8080/?p=7">
                    <img src="http://localhost:8080/wp-content/uploads/2022/06/2020_07_17__old_room_1920x944_7666-1.jpg" alt="">
                  </a>
                  <div class="slider__info">
                    <div class="slider__info-date">
                      <div class="date__info">
                        <div class="date__info-date">18 июля 2020</div>
                        <div class="date__info-category">Заметки</div>
                      </div>
                    </div>
                    <div class="slider__info-title">Клиповый мир рухнул, будущее не придумано</div>
                    <div class="slider__info-tags">
                      <div class="tags">
                        <a class="page-link tag" href="http://localhost:8080/tag/istoriya/">История</a>
                        <a class="page-link tag" href="http://localhost:8080/tag/politika/">Политика</a>
                      </div>                          
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-next" style="width: 587px;" role="group" aria-label="2 / 4">
                  <a href="http://localhost:8080/?p=120">
                  <img src="http://localhost:8080/wp-content/uploads/2022/06/2022_04_07_01_cover_octagon_005_orig_1910.jpg" alt="">
                  </a>
                  <div class="slider__info">
                    <div class="slider__info-date">
                      <div class="date__info">
                        <div class="date__info-date">8 апреля 2022</div>
                        <div class="date__info-category">Заметки</div>
                      </div>
                    </div>
                    <div class="slider__info-title">Вашингтонский консенсус умер. Да здравствует консенсус!</div>
                    <div class="slider__info-tags">
                      <div class="tags">
                        <a class="page-link tag" href="http://localhost:8080/tag/mirovaya-politika/">мировая политика</a><a class="page-link tag" href="http://localhost:8080/tag/neft/">нефть</a><a class="page-link tag" href="http://localhost:8080/tag/ekonomika/">Экономика</a></div>                          </div>
                                              </div>
                                            </div>
                                                              <div class="swiper-slide" style="width: 587px;" role="group" aria-label="3 / 4">
                                              <a href="http://localhost:8080/?p=124">
                                              <img src="http://localhost:8080/wp-content/uploads/2022/06/2022_04_07_01_cover_octagon_005_orig_1910.jpg" alt="">
                                              </a>
                                              <div class="slider__info">
                                                <div class="slider__info-date">
                                                  <div class="date__info">
                                                    <div class="date__info-date">13 апреля 2022</div>
                                                    <div class="date__info-category">Заметки</div>
                                                  </div>
                                                </div>
                                                <div class="slider__info-title">Вашингтонский консенсус умер. Да здравствует консенсус! Часть 2</div>
                                                <div class="slider__info-tags">
                                                  <div class="tags">
                        <a class="page-link tag" href="http://localhost:8080/tag/mirovaya-politika/">мировая политика</a><a class="page-link tag" href="http://localhost:8080/tag/neft/">нефть</a><a class="page-link tag" href="http://localhost:8080/tag/ssha/">сша</a><a class="page-link tag" href="http://localhost:8080/tag/ekonomika/">Экономика</a>
                      </div>                          
                    </div>
                  </div>
                </div>
                <div class="swiper-slide" style="width: 587px;" role="group" aria-label="4 / 4">
                  <a href="http://localhost:8080/?p=127">
                    <img src="http://localhost:8080/wp-content/uploads/2022/06/2022_04_07_01_cover_octagon_005_orig_1910.jpg" alt="">
                  </a>
                  <div class="slider__info">
                    <div class="slider__info-date">
                      <div class="date__info">
                        <div class="date__info-date">15 апреля 2022</div>
                        <div class="date__info-category">Заметки</div>
                      </div>
                    </div>
                    <div class="slider__info-title">Вашингтонский консенсус умер. Да здравствует консенсус! Часть 3</div>
                    <div class="slider__info-tags">
                      <div class="tags">
                        <a class="page-link tag" href="http://localhost:8080/tag/mirovaya-politika/">мировая политика</a>
                        <a class="page-link tag" href="http://localhost:8080/tag/ekonomika/">Экономика</a>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination js--swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                <div class="swiper-toggles">
                  <div class="swiper-button-prev js--swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-387106f815a3b810b" aria-disabled="true"></div>
                  <div class="swiper-button-next js--swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-387106f815a3b810b" aria-disabled="false"></div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
          <div class="articles-select">
            <select name="sources" id="sources" class="custom-select sources" placeholder="Source Type">
            <?php foreach($categories as $cat ):
              $term_link = get_term_link( $cat );
              ?>
            <option value="<?php echo $cat->name;?>" data-href="<?php echo $term_link;?>"><?php echo $cat->name;?></option>
            <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="articles__content" id="tabs">
          <div class="tabs-nav">
            <div class="tab-link page-link is-active">я в СМИ</div>
            <div class="tab-link page-link">Видео</div>
            <a href="/articles/" >
              <div class="page-link isBookmarks" >Заметки</div>
            </a>
            <div class="plate-articles plate-articles-toggles plate-articles_none">
              <button class="plate__left isActive" onclick="onCardShortWidth()">
              <button class="plate__right" onclick="onCardFullWidth()">
            </div>
            <?php
              $categories = get_categories( [
                'taxonomy'     => 'category',
                'type'         => 'post',
                // ID родительской категории по которой делаю поиск
                'parent'       => 44,
                'orderby'      => 'name',
                'order'        => 'ASC',
                'hide_empty'   => 1,
                'hierarchical' => 1,
                'exclude'      => '',
                'include'      => '',
                'number'       => 0,
                'pad_counts'   => false,
                // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
              ] );
              // var_dump($categories );
              // if( $categories ){
              //   foreach( $categories as $cat ){
                  // Данные в объекте $cat
              
                  // $cat->term_id
                  // echo $cat->name;
                  // $cat->slug (rubrika-1)
                  // $cat->term_group (0)
                  // $cat->term_taxonomy_id (4)
                  // $cat->taxonomy (category)
                  // $cat->description (Текст описания)
                  // $cat->parent (0)
                  // $cat->count (14)
                  // $cat->object_id (2743)
                  // $cat->cat_ID (4)
                  // $cat->category_count (14)
                  // $cat->category_description (Текст описания)
                  // $cat->cat_name (Рубрика 1)
                  // $cat->category_nicename (rubrika-1)
                  // $cat->category_parent (0)
              
              //   }
              // }
            ?>
            <div class="articles-select">
              <select name="sources" id="sources" class="custom-select sources" placeholder="Source Type">
              <?php foreach($categories as $cat ):
                $term_link = get_term_link( $cat );
              ?>
              <option value="<?php echo $cat->name;?>" data-href="<?php echo $term_link;?>"><?php echo $cat->name;?></option>
              <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="tab-content is-active">
            <div class="articles__items">
              <?php while (have_posts()) :
                  the_post();
              ?>
                <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
              <?php endwhile; ?>
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
        <div class="logos-block">
          <div class="logos">
            <?php
            if(!empty($blockACF)) :
            foreach($blockACF as $item) : 
            ?>
              <img class="logo" src="<?php echo $item['logo']; ?>">
            <?php endforeach; 
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!---->


<?php get_footer(); ?>