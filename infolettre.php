<?php 
# Liste des questions avec leurs différentes réponses possibles
$liste_questions = array(
    'question1' => array(
        'question' => "Quelle est la couleur du cheval blanc ?",
        'reponses' => array('blanc', 'blanche', 'neige', 'clair')
    ),
    'question2' => array(
        'question' => "Combien font deux + quatre ?",
        'reponses' => array('6', 'six')
    )
);
 
# Activation des sessions (pour que PHP charge la session de l'utilisateur, via le cookie PHPSESSID)
# à placer impérativement avant tout affichage, car cette fonction a besoin d'envoyer des headers HTTP
session_start();
 
# Sélection d'une question à poser au hasard
$id_question_posee = array_rand($liste_questions);
 
# Mémorisation de la question posée à l'utilisateur dans la session
$_SESSION['captcha']['id_question_posee'] = $id_question_posee;
$page = "infolettre";
$title =   "Abonnez-vous à notre infolettre";
$description =  "Pour vous tenir informé de notre actualité, abonnez-vous à notre infolettre.";
$bandeau = "photos/bandeau/barbier.jpg";
include("./header.php");
?>	
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" id="infolettre">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle center">
      <h2 class="heading">Historique de nos infolettres</h2>
    </div>
    <ul class="nospace group services lettre">
      <li class="one_third first">
        <article><a href="pros/infolettre2018-3.pdf" target="_blank"><i class="fa fa-info"></i></a>
          <h6 class="heading">Trimestre 3 2018</h6>
          <p>Nous avons établi un partenariat avec la ville de Mennecy pour que les enfants des écoles de la commune profitent d’un programme de découverte de l’opéra [&hellip;]</p>
          <footer><a href="pros/infolettre2018-3.pdf" target="_blank">En savoir plus &raquo;</a></footer>
        </article>
      </li>
	  <li class="one_third">
        <article><a href="pros/infolettre2018-2.pdf" target="_blank"><i class="fa fa-info"></i></a>
          <h6 class="heading"> Trimestre 2 2018</h6>
          <p>J’ai plaisir à vous annoncer que la création Orfeo ed Euridice de Gluck par notre compagnie lyrique a reçu un très bel accueil.[&hellip;]</p>
          <footer><a href="pros/infolettre2018-2.pdf" target="_blank">En savoir plus &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="pros/infolettre2018-1.pdf" target="_blank"><i class="fa fa-info"></i></a>
          <h6 class="heading">Trimestre 1 2018</h6>
          <p>Nous avons donné cinq nouvelles représentations de La Traviata de Verdi entre décembre 2017 et février 2018 au Beffroi à Montrouge, à Mérignac [&hellip;]</p>
          <footer><a href="pros/infolettre2018-1.pdf" target="_blank">En savoir plus &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
        </article>
      </li>
      <li class="one_third first">
        <article><a href="pros/infolettre2017-3.pdf" target="_blank"><i class="fa fa-info"></i></a>
          <h6 class="heading">Trimestre 3 2017</h6>
          <p>Au cours des six dernières années, la compagnie a travaillé en milieu scolaire
avec plusieurs villes de la région parisienne [&hellip;]</p>
          <footer><a href="pros/infolettre2017-3.pdf" target="_blank">En savoir plus &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="pros/infolettre2017-2.pdf" target="_blank"><i class="fa fa-info"></i></a>
          <h6 class="heading">Trimestre 2 2017</h6>
          <p>Cette année, sous la houlette de Sandra Monlouis, une classe de seconde du Perreux-sur-Marne travaille à une création [&hellip;]</p>
          <footer><a href="pros/infolettre2017-2.pdf" target="_blank">En savoir plus &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><a href="pros/infolettre2017-1.pdf" target="_blank"><i class="fa fa-info"></i></a>
          <h6 class="heading">Trimestre 1 2017</h6>
          <p>Opéra Côté Choeur choisit
le principe d’un concert mis en espace pour décortiquer la richesse du répertoire lyrique [&hellip;]</p>
          <footer><a href="pros/infolettre2017-1.pdf" target="_blank">En savoir plus &raquo;</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/02.png');">
  <section id="callback" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <div class="inspace-30 row3">
        <h6 class="heading">Abonnez-vous à la newsletter d'OCC</h6>
        <p class="btmspace-30">Inscrivez-vous à notre infolettre et tenez-vous au courant chaque trimestre de l'actualité d'Opéra Côté Choeur.</p>
        <form method="post" action="mail.php">
          <fieldset>
            <input type="text" value="" placeholder="Nom" name="nom">
            <input type="text" value="" placeholder="Prénom" name="prenom">			
            <input type="text" value="" placeholder="Email" name="user_email">
			Question : <?php echo $liste_questions[$id_question_posee]['question']; ?>
			Réponse  : <input type="text" name="captcha_reponse" value="" />
            <button type="submit" value="submit">S'abonner</button>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="one_half">
      <div class="inspace-30 row3">
        <h6 class="heading">Vous ne souhaitez plus recevoir notre infolettre ?</h6>
        <p class="btmspace-30">Saisissez l'adresse de courrier électronique avec laquelle vous vous êtes abonné(e).</p>
        <form method="post" action="mail.php">
          <fieldset>			
            <input type="text" value="" placeholder="Email" name="mail_desinscription">
			Question : <?php echo $liste_questions[$id_question_posee]['question']; ?>
			Réponse  : <input type="text" name="captcha_reponse" value="" />
            <button type="submit" value="submit">Se désabonner</button>
          </fieldset>
        </form>
      </div>
    </div>	
  </section>
</div>
<?php 
include("./footer.php");
?>