<?php get_header() ?>
<main class="site__main">
   <?php if (have_posts()): the_post(); ?>
      <h1><?php the_title() ?></h1>
      <?php the_content() ?>
      <h1 class="atelier__local">L'atelier: <?php the_title() ?></h1>
      <h3>Description de l'atelier</h3>
      <p class="atelier__dep">L'animateur du cours: <?= get_field( "animateur" ); ?></p>   
      <p class="atelier__local">L'atelier sera donné au local: <?= get_field( "local" ); ?></p>
      <p class="atelier__desc"><?= get_field( "desc" ); ?></p> 
      <h3>Horaire et dates de l'atelier</h3>
      <p class="atelier__duree">Durée de chacune des séance est de: <?= get_field( "duree" ); ?> heures</p>
      <p class="atelier__debut">Date de début: <?= get_field( "debut" ); ?></p> 
      <p class="atelier__fin">Date de fin: <?= get_field( "fin" ); ?></p>
      <p class="atelier__jour">La formation se donnera: <?= get_field( "jour" ); ?></p>
      <p class="atelier__horaire">L'horaire: <?= get_field( "hdebut" ); ?> à <?= get_field( "hfin" ); ?></p>         
   <?php endif ?>
</main>
<?php get_footer() ?>