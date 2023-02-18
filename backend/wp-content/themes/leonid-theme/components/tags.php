<div class="tags">
  <?php $cur_terms = get_the_terms(0, 'post_tag');
  if (is_array($cur_terms)) {
    foreach ($cur_terms as $cur_term) {
      echo '<a class="page-link tag" href="' . get_term_link($cur_term->term_id, $cur_term->taxonomy) . '">' . $cur_term->name . '</a>';
    }
  }
  ?>
</div>