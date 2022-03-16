<?php
/**
 * Le modèle résultats de recherche search.php
 *
 * Affiche les résultats de recherche
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cidw-4w4
 */
?>
<?php get_header() ?>
<main class="site__main">
    <section class="site__main__recherche">
        <h1>Résultats de la recherche</h1>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h2></h2>
        <a href="<?php echo get_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        <p><?php echo wp_trim_words(get_the_content(),20) ?></p>
        <hr>
        <?php endwhile ?>
        <?php else :  ?>
            <h2>Aucun résultats pour la recherche</h2>
        <?php endif ?>
    </section>
</main>

<?php get_footer() ?>
