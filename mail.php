<?php
$page = "infolettre";
$resultat="";
$message="";
$title =   "Abonnez-vous à notre infolettre";
$description =  "Pour vous tenir informé de notre actualité, abonnez-vous à notre infolettre.";


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
 
# On récupère l'identifiant (clé) de la question posée dans la session
$id_question_posee = $_SESSION['captcha']['id_question_posee'];
 
# On récupère la réponse de l'utlisateur
$reponse_utilisateur = $_POST['captcha_reponse'];
 
# Vérification de la réponse : si la réponse de l'utilisateur n'est pas dans la liste des réponses exactes, on affiche un message d'erreur
if( !in_array($reponse_utilisateur, $liste_questions[$id_question_posee]['reponses']) ){
    echo "Vous avez répondu $reponse_utilisateur à la question captcha, ce n'est pas une bonne réponse. Traitement annulé";
    die();
}



		if(!empty($_POST['user_email']))
		{
			$mail = 'rova.raobadia@gmail.com'; // Déclaration de l'adresse de destination.
			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
			{
				$passage_ligne = "\r\n";
			}
			else
			{
				$passage_ligne = "\n";
			}
			//=====Déclaration des messages au format texte et au format HTML.

			$message_html = "<html><head></head><body><b>Bonjour</b>,<br />  Une nouvelle demande d'inscription à la newsletter de la part de ".$_POST['prenom']." ".$_POST['nom']."<br />email :".$_POST['user_email'].".</body></html>";
			//==========
			 
			//=====Création de la boundary
			$boundary = "-----=".md5(rand());
			//==========
			 
			//=====Définition du sujet.
			$sujet = "Inscription à la newsletter Opéra Côté Choeur";
			//=========
			 
			//=====Création du header de l'e-mail.
			$header = "From: ".$_POST['user_email'].$passage_ligne;
			$header.= "Reply-to: rova.raobadia@gmail.com".$passage_ligne;
			//$header.= "Reply-to: contact@opera-cote-choeur.fr".$passage_ligne;
			$header.= "MIME-Version: 1.0".$passage_ligne;
			$header.= "Content-Type: text/html; charset= utf8\n".$passage_ligne;
			//==========
			 
			//=====Création du message.
			//=====Ajout du message au format HTML
			$message.= $passage_ligne.$message_html.$passage_ligne;
			//==========
			 
			//=====Envoi de l'e-mail.
			mail($mail,$sujet,$message,$header);
			//==========
			$resultat="Vous êtes désormais inscrit.";
			
		} else if(!empty($_POST['mail_desinscription']))
		{
			$mail = 'contact@opera-cote-choeur.fr'; // Déclaration de l'adresse de destination.
			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
			{
				$passage_ligne = "\r\n";
			}
			else
			{
				$passage_ligne = "\n";
			}
			//=====Déclaration des messages au format texte et au format HTML.

			$message_html = "<html><head></head><body><b>Bonjour</b>,<br />  Une demande d'annulation d'inscription à la newsletter de la part de <br />email :".$_POST['mail_desinscription'].".</body></html>";
			//==========
			 
			//=====Création de la boundary
			$boundary = "-----=".md5(rand());
			//==========
			 
			//=====Définition du sujet.
			$sujet = "Annulation d'abonnement à la newsletter Opéra Côté Choeur";
			//=========
			 
			//=====Création du header de l'e-mail.
			$header = "From: ".$_POST['mail_desinscription'].$passage_ligne;
			$header.= "Reply-to: contact@opera-cote-choeur.fr".$passage_ligne;
			$header.= "MIME-Version: 1.0".$passage_ligne;
			$header.= "Content-Type: text/html;".$passage_ligne;
			//==========
			 
			//=====Création du message.
			//=====Ajout du message au format HTML
			$message.= $passage_ligne.$message_html.$passage_ligne;
			//==========
			 
			//=====Envoi de l'e-mail.
			mail($mail,$sujet,$message,$header);
			//==========
			$resultat="Vous êtes désabonné(e).";
		}

include("./header.php");
?>
<div class="wrapper row3" id="infolettre">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle center">
      <h2 class="heading">Historique de nos infolettres</h2>
    </div>
    <ul class="nospace group services lettre">
      <li class="one_third first">
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
<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/02.png');">
  <section id="callback" class="hoc container clear"> 
    <!-- ################################################################################################ -->
	<p id="abonnement">
	<?php if ($captchkaok==false) {
			echo "Vous êtes un robot";
		} else if ($captchkaok==true) {
      echo "Votre demande a été prise en compte"; 
    }
  ?>
	</p>
    <div class="one_half first" >
      <div class="inspace-30 row3">
        <h6 class="heading">Abonnez-vous à la newsletter d'OCC</h6>
        <p class="btmspace-30">Inscrivez-vous à notre infolettre et tenez-vous au courant chaque trimestre de l'actualité d'Opéra Côté Choeur.</p>
        <form method="post" action="mail.php#abonnement">
          <fieldset>
            <input type="text" value="" placeholder="Nom" name="nom">
            <input type="text" value="" placeholder="Prénom" name="prenom">			
            <input type="text" value="" placeholder="Email" name="user_email">
            <button type="submit" value="submit">S'abonner</button>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="one_half">
      <div class="inspace-30 row3">
        <h6 class="heading">Vous ne souhaitez plus recevoir notre infolettre ?</h6>
        <p class="btmspace-30">Saisissez l'adresse de courrier électronique avec laquelle vous vous êtes abonné(e).</p>
        <form method="post" action="mail.php#abonnement">
          <fieldset>				  
            <input type="text" value="" placeholder="Email" name="mail_desinscription">
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