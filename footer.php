<footer class="site__footer">
    <section class="site__footer-lignes">
        <h2 class="footer__titre">Raspberry
        </h2>
        <p class="footer__presentation">3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131</p>
        <p class="footer__presentation">Copyright © 2014 - Collège de Maisonneuve. Tous droits réservés.</p>
        <h3 class="footer__author">Modifier par Moïse Kaseka</h3>
    </section>
    <section class="site__footer-colonnes">
        <?php 
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#38c4ce"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>';
        wp_nav_menu(array(      
                            "menu" => "simple",
                            "container"=>"nav",
                            "container-web" => "site__footer",
                            "menu_class" => "site__footer__menu__ul",
                            "link_before"=>$icone)); 
        ?>

         <?php 
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#38c4ce"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>';
        wp_nav_menu(array(      
                            "menu" => "simple",
                            "container"=>"nav",
                            "container-web" => "site__footer",
                            "menu_class" => "site__footer__menu__ul",
                            "link_before"=>$icone)); 
        ?>

    </section>
    <div class="footer__recherche">
        <?php get_search_form(); ?>
    </div>   
</footer>
</body>
<?php wp_footer(); ?>
</html>