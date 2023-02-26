<article class="article-card swiper-slide article-card_short" >
  <div class="article-card__info">
    <div class="date__info">
      <div class="date__info-date"> <?php echo get_the_date('j F Y'); ?></div>
      
        <?php
         $terms = wp_get_post_categories( $post->ID, [ 
          'fields' => 'all', 
          'orderby' => 'term_order', 
          'order' => 'ASC' ] );
        //  echo '<pre>';
        //  var_dump($cats);
        //  echo '</pre>';
        //  echo $catName = $cats[0]->name;
         foreach($terms as $term):  
          $term_link = get_term_link( $term );
         ?>
         <a class="date__info-category" href="<?php echo $term_link;?>">
          <?php echo $term->name;?>
         </a>
         <?php endforeach; ?>

      
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