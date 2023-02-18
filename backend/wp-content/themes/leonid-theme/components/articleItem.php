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
  <div class="article-card__tags">
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
</article>