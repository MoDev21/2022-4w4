<?php get_header() ?>
<main class="principal">
    <h1>-----------  category.php ----------</h1>
    <section class="ordre">
        <a href="?cletri=title&ordre=asc"><svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M4.97 12.97a.75.75 0 101.06 1.06L11 9.06v12.19a.75.75 0 001.5 0V9.06l4.97 4.97a.75.75 0 101.06-1.06l-6.25-6.25a.75.75 0 00-1.06 0l-6.25 6.25zM4.75 3.5a.75.75 0 010-1.5h14.5a.75.75 0 010 1.5H4.75z"></path></svg></a><br>
        <a href="?cletri=title&ordre=desc"><svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M4.97 11.03a.75.75 0 111.06-1.06L11 14.94V2.75a.75.75 0 011.5 0v12.19l4.97-4.97a.75.75 0 111.06 1.06l-6.25 6.25a.75.75 0 01-1.06 0l-6.25-6.25zm-.22 9.47a.75.75 0 000 1.5h14.5a.75.75 0 000-1.5H4.75z"></path></svg></a><br>
    </section>
    
    <?php wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav"
    )); ?>


    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):
            while (have_posts()): the_post(); ?>
                <?php 
                if (is_category(array('cours','web','jeu','utilitaire','design','creation-3d','video'))):
                get_template_part('gabarit/content','cours');    
                else:
                get_template_part('gabarit/content','macrame');    
                endif
                ?>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>