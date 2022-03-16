<footer class="site__footer">
    <h2 class="footer__titre">Le beau footer</h2>
    <p class="footer__presentation">Un site web fait par une élève du TIM à l'aide de Wordpress.</p>
    <h3 class="footer__author">Modifier par Moïse Kaseka</h3>
<?php 

$icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#38c4ce"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>';
wp_nav_menu(array(      
                    "menu" => "simple",
                    "container"=>"nav",
                    "container-web" => "site__footer",
                    "menu_class" => "site__footer__menu__ul",
                    "link_before"=>$icone)); ?>
</footer>
</body>

</html>