<div class="shared">
  <div class="shared__title page_CAPTION page_red page_bold">ПОДЕЛИТЬСЯ: </div>
  <div class="social">
    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
						
    <a class="page-link social-icon" href="javascript:void(0);" data-sharer="telegram" data-title="<?php the_title() ?>" data-hashtags="sharer" data-url="<?php echo $actual_link;?>">TG</a>
    <a class="page-link social-icon" href="javascript:void(0);" data-sharer="vk" data-title="<?php the_title() ?>" data-hashtags="sharer" data-url="<?php echo $actual_link;?>">VK</a>
   
    <a class="page-link social-icon" href="javascript:void(0);" data-sharer="link">Ссылка</a>
  </div>
</div>