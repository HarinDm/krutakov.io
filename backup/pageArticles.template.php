<?php
/*
	Template Name: Tpl. Articles
*/
?>
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

  if (!empty($blockACF) ) :
      // $fieldsACF = $blockACF['field'];
      // $addLogos = $fieldsACF['logo'];


?>

<main class="page page-articles">
  <section class="articles">
    <div class="wrapper">
      <h1 class="page__title-h1">
        <span class="page_red">Статьи </span>и видео
      </h1>
            
      <div class="articles-inner">
        <div class="articles__sidebar">
          <div class="articles__slider">
            <div class="slider">
              <div class="swiper js--swiper">
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
                      $catLink = $post->guid;

                      ?>
                      <div class="swiper-slide">
                        <a href="<?php echo $catLink; ?>">
                        <img src="<?php echo $article['slideImg']?>" alt="">
                        </a>
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
                      </div>
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
          <div class="articles-select__date">
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
            <div class="tab-link page-link ">Видео</div>
            <div class="tab-link page-link">Заметки</div>
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
              <?php foreach ($all as $post) :
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
          <div class="tab-content">
            <div class="articles__items">

              <?php foreach ($articlesCat as $post) :
                setup_postdata($post); ?>
                <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
              <?php endforeach;
              wp_reset_postdata(); ?>
            </div>
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
  </section>
</main>
<?php endif; ?>
<?php get_footer(); ?>
