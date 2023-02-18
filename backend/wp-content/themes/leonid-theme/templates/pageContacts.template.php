<?php
/*
	Template Name: Tpl. Contacts
*/
?>
<?php get_header(); ?>
<main class="page page-contacts">
    <section class="contacts">
      <div class="wrapper">
        <h1 class="page__title-h1">Контакты</h1>
        <div class="contacts-inner">
          <div class="contacts__form">
            <?php the_content() ?>
            
          </div>
          <div class="contacts__social">
            <p class="page__text page__text_big">Вы также можете связаться со мной в социальных сетях или написать на
              емейл:</p>
              <?php socialWpNav('socialNav'); ?>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>