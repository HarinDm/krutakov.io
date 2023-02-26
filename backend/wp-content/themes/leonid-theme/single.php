<?php get_header(); 
$article = get_field('_article');
?>
<!-- single -->

<main class="page page-article">
    <section class="article">
      <div class="article__banner">
        <div class="article__banner_bg"></div>
      <?php the_post_thumbnail() ?>
        <div class="article__banner-content">
          <div class="wrapper">
            <div class="article__banner-content-inner">
              <div class="article__banner-content-info">
                <div class="date__info">
                  <div class="date__info-date"><?php echo get_the_date('j F Y'); ?></div>
                  <div class="date__info-category"><?php
                    $cats = wp_get_post_categories( $post->ID, [ 'fields' => 'all' ] );
                    echo $catName = $cats[0]->name;
                    ?>
                  </div>
                </div>
                <div class="tags">
                <?php $cur_terms = get_the_terms( 0, 'post_tag' );
                    if( is_array( $cur_terms ) ){
                      foreach( $cur_terms as $cur_term ){
                        echo '<a class="page-link tag" href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">'. $cur_term->name .'</a>';
                      }
                    }
                  ?>
                  </div>
              </div>
              <h2 class="page__title-h2"><?php the_title() ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="article-inner">
          <div class="article__content">
            <div class="article__content-navigation"><a class="page-link page_red page-link_back page_CAPTION"
                href="/articles/">назад</a>
                <?php include(TEMPLATEPATH . '/components/shared.php'); ?>
              <a class="page-link page_red page-link_next page_CAPTION" href="<?php echo $article['_articlesNext']? $article['_articlesNext'][0]->guid : ''; ?>">Далее</a>
            </div>
            <div><?php the_content() ?></div>
            
              <div class="article__content-shared">
              <div class="tags">
              <?php $cur_terms = get_the_terms( 0, 'post_tag' );
                    if( is_array( $cur_terms ) ){
                      foreach( $cur_terms as $cur_term ){
                        echo '<a class="page-link tag" href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">'. $cur_term->name .'</a>';
                      }
                    }
                  ?>
                </div>
                  <?php include(TEMPLATEPATH . '/components/shared.php'); ?>
            </div>
          </div>
          <div class="article__sidebar">
            <div class="sidebar">
              <div class="sidebar__shared">
                <?php include(TEMPLATEPATH . '/components/shared.php'); ?>
              </div>
              <div>
                Актуальное
               <?php 
                  $blockACF = get_field('notes');
                      $fieldsACF = $blockACF['fields'];
                      
                      $notes = $fieldsACF['articles'];
                      $link = $fieldsACF['link'];
                      $any = $fieldsACF['any'];
                
                foreach($notes as $post): 
                    setup_postdata($post); 
                ?>
                  <article class="article-card ">
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
                    <a class="article-card__text" href="<?php the_permalink() ?>"><?php the_title() ?>
                      <div class="read-more">Читать далее</div>
                    </a>
                  </article>
              <?php endforeach; 
              wp_reset_postdata();
              ?>
              </div>
              <div class="sidebar__next">
                <div class="sidebar__title page_CAPTION page_red page_bold">Далее:</div>
                <div class="sidebar__items">
                  <?php 
                  $last_posts = get_posts( array(
                    'numberposts' => 3,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                 //$article['_articlesNext']
                 $posts =  $articles['_articlesNext'] ? $articles['_articlesNext'] : $last_posts;

                 foreach ($posts  as $post) :
                    setup_postdata($post); ?>
                              <?php include(TEMPLATEPATH . '/components/articleItem.php'); ?>
                  <?php endforeach;
                  wp_reset_postdata(); ?>
                  
                </div>
              </div>
              <div class="sidebar__tags">
                <div class="sidebar__title page_CAPTION page_red page_bold">Теги:</div>
                <?php include(TEMPLATEPATH . '/components/tags.php'); ?>
              </div>
            </div>
          </div>
          <div class="article__read-more">
						<?php include(TEMPLATEPATH . '/components/readMore.php'); ?>
          </div>
        </div>
      </div>
    </section>
</main>

<!-- /home -->
<?php get_footer(); ?>
