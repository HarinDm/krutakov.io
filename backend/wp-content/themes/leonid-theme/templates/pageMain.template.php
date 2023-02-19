<?php
/*
	Template Name: Tpl. Main
*/
?>
<?php get_header(); 
  $blockACF = get_field('notes');
  if (!empty($blockACF) && $blockACF["isShow"]) :
      $fieldsACF = $blockACF['fields'];
      
      $articles = $fieldsACF['articles'];
      $link = $fieldsACF['link'];
      $any = $fieldsACF['any'];

      // var_dump($link);

      // foreach($articles as $article) {
      //   echo $article->post_title;
      //   // нужно делать проверку на строки потому что есть ставтьи только с видео
      //   // echo mb_substr($article->post_content, 0, 120);/
      //   echo '<br>';
      // }
            
?>
<!-- front-page -->
<main class="page page-main">
  <section class="banner-main">
    <div class="wrapper">
      <h1 class="page__title-h1"> <span class="page_red">Леонид Крутаков — <br></span><span>политолог, публицист,
          аналитик.</span></h1>
      <p class="page__text">Доцент Финансового университета при Правительстве Российской Федерации.</p>
      <div class="banner-main-inner">
        <div class="banner-main__img">
          <picture><img src="assets/images/png/img-banner-main.png" alt=""></picture>
        </div>
        <div class="banner-main__text">
          <blockquote class="page__quote">Никогда не вступай в спор с дураком. Затянет на свой уровень и задавит
            опытом.<p class="page__quote_autor">Марк Твен</p>
          </blockquote><a class="page-btn" href="/about/">Об авторе</a>
        </div>
      </div>
      <div class="actual-note">
        <div class="actual">Актуальное</div>
        <div class="note">Заметки</div>
        <div class="actual">Актуальное</div>
        <div class="note">Заметки</div>
        <div class="actual">Актуальное</div>
        <div class="note">Заметки</div>
      </div>
      <div class="slider-banner">
                <!-- Slider main container -->
        <div id="sliderBannerBookmarks" class="slider-banner-swiper swiper mySwiper">
          <div class="swiper-wrapper">
          <?php foreach($articles as $post): 
                 setup_postdata($post); 
            ?>
          <article class="article-card swiper-slide">
            <div class="article-card__info">
              <div class="date__info">
                <div class="date__info-date"> <?php echo get_the_date('j F Y'); ?></div>
                <div class="date__info-category">
                  <?php
                  $cats = wp_get_post_categories( $post->ID, [ 'fields' => 'all' ] );
                  echo $catName = $cats[0]->name;
                  ?>

                </div>
              </div>
            </div>
            <a class="article-card__text" href="<?php the_permalink() ?>"><?php the_title() ?></a>
          </article>
          <?php endforeach; 
          wp_reset_postdata();
					?>

            <!-- <div class="swiper-slide">Slide</div> -->
          </div>
          <div class="slider-banner__btn">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
         
        </div>
        <a class="page-btn" href="<?php echo $link['url']; ?>"><?php echo $link['title']?></a>
      </div>
      
    </div>
  </section>
</main>
<!-- /front-page -->
<?php get_footer(); ?>
<?php endif; ?>