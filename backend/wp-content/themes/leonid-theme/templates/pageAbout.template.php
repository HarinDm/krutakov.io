<?php
/*
	Template Name: Tpl. About
*/
?>
<?php get_header(); ?>
<main class="page page-about">
    <section class="about">
      <div class="wrapper">
        <div class="about-inner">
          <div class="about__text">
            <h1 class="page__title-h1">Обо <span class="page_red">мне</span></h1>
            <div class="page__text page__text_big">Крутаков Леонид <br> Викторович — российский политолог, публицист и
              аналитик. Доцент Финансового университета при Правительстве Российской Федерации.</div>
            <div class="about__description">
                <?php the_content() ?>
              
            </div>
          </div>
          <div class="about__img">
            <picture><img src="assets/images/png/img-banner-main.png" alt=""></picture>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>