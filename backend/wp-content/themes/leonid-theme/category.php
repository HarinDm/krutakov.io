<?php get_header(); ?>
<!-- category -->
<main class="page page-articles">
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
</main>
<!-- /category -->
<?php get_footer(); ?>