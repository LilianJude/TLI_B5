<?php
 
//home.php
 
/**
 * Start the session.
 */
session_start();
 
 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Informations</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/kickstart.js"></script>
	<link rel="stylesheet" href="css/kickstart.css" media="all" />
</head>
<body>
	<img src="https://www.logolynx.com/images/logolynx/33/33803c198c2362596a9124631e199134.jpeg" height="50" width="500" alt="Bannière"/><br/><br/>
	
	<?php 
	if (isset($_SESSION['username'])) { ?>
		<span>Utilisateur : <span>
		<?php echo ($_SESSION['username']); ?>
		</br><button class="small"><a href="logout.php">Deconnexion</a></button>
		<?php }
	?>
		<!-- Menu Horizontal -->
	<div class="grid flex">
		<ul class="menu">
			<li><a href="accueil.php">Accueil</a></li>
			<?php 
			if(!(isset($_SESSION['user_id']) || isset($_SESSION['logged_in']))) { ?>
				<li><a href="inscription.php">Inscription</a></li>
			<?php 
			}
			?>	
			<li><a href="patho.php">Rech. patho</a></li>			
			<li><a href="sympt.php">Rech. sympt</a></li>
			<li><a href="infos.php">Plus d'infos</a></li>
		</ul>
	</div>
	<div class="grid flex">
		<h3 id="tidaltli_b5">TIDAL TLI_B5</h3>
			<!-- Markdown to HTML -->
			<p>Descriptif de notre site web</p>

			<h6 id="pourcommencer">Pour commencer</h6>

			<p>Le site a été developpé sur une architecture WAMP 3.1.9. Le framework utilisé est Kickstart, le site est responsive.  </p>

			<p>Notre site comporte 2 versions : Une version dite "template" avec smarty mais qui ne comporte pas toutes les fonctionnalités et une seconde sans template qui est bien plus complète.</p>

			<h6 id="prrequis">Pré-requis</h6>

			<p>WAMP 3.1.9 comporte les logiciels et leurs versions suivantes : </p>

			<ul>
			<li>Apache 2.4.39</li>

			<li>PHP 7.2.18</li>

			<li>PHP 5.6.40 for CLI</li>

			<li>MySQL 5.7.26</li>

			<li>MariaDB 10.3.14</li>

			<li>PhpMyAdmin 4.8.5</li>
			</ul>

			<h6 id="installation">Installation</h6>

			<p>-Posséder une infrastructure logicielle semblable à la nôtre</p>

			<p>-Importez la base <code>acu.sql</code> </p>

			<p>-Ajoutez un compte acuRO avec le mot de passe <code>McLWkiZfkyGqGu7x</code>.
			Cet utilisateur ne doit avoir qu'un droit SELECT sur la base acu</p>

			<p>-Ajoutez un compte acuRW avec le mot de passe <code>FS2nZXF57vshkiyS</code>.
			Cet utilisateur doit avoir les droits SELECT, INSERT, UPDATE, DELETE sur la base acu</p>

			<p>-Ajoutez le site au VHOST Apache</p>

			<h6 id="dmarrage">Démarrage</h6>

			<p>Rendez-vous sur <a href="http://localhost/acupuncture/accueil.php" >http://localhost/acupuncture/accueil.php</a></p>
			<p>Inscrivez-vous ou connectez-vous avec l'utilisateur test/test</p>

			<h6 id="fonctionnalitsimplantes">Fonctionnalités implantées</h6>

			<ul>
			<li>[x] Vous réaliserez une page permettant d’aﬃcher la liste des pathologies. Ces pathologies pourront faire l’objet de ﬁltrage comme indiqué en introduction. </li>

			<li>[x] Vous implémenterez une fonctionnalité de recherche de pathologie par mot–clef. Cette fonctionnalité ne sera accessible qu’aux utilisateurs authentiﬁés.</li>

			<li>[x] Vous proposerez un système de gestion des utilisateurs (inscription, login, session, etc.). Un utilisateur connecté aura la possibilité d’accéder à la fonctionnalité de recherche de pathologies par mot–clef</li>
			</ul>

			<h6 id="divers">Divers</h6>

			<ul>
			<li>Nos requêtes SQL sont préparées avec PDO pour éviter les injections. </li>

			<li>Nous utilisons un compte par responsabilité en SQL, un en read-only, un second read-write.</li>

			<li>Les mots de passes sont hashés lorsqu'ils sont insérés dans la BDD</li>
			</ul>

			<h6 id="fabriquavec">Fabriqué avec</h6>

			<ul>
			<li><a href="http://getkickstart.com/">kickstart.css</a> - Framework CSS (front-end)</li>

			<li><a href="https://notepad-plus-plus.org/">Notepad++</a> - Editeur de textes</li>

			<li><a href="http://www.wampserver.com/">WAMP</a> - Stack serveur web</li>
			</ul>
			
			<h6>Sitographie :</h6></strong><br/>
			<ul>
				<li><a href="https://openclassrooms.com/fr/courses/1916641-dynamisez-vos-sites-web-avec-javascript">Apprendre le Javascript</a></li>
				<li><a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql">Apprendre le PHP et SQL</a></li>
				<li><a href="https://openclassrooms.com/fr/courses/1631636-simplifiez-vos-developpements-javascript-avec-jquery/1636305-premiers-pas-avec-ajax">Apprendre l'AJAX</a></li>
			</ul>
			
			<h6 id="auteurs">Auteurs</h6>

			<ul>
			<li><strong>Juliette BONIAUD</strong></li>

			<li><strong>Lilian JUDE</strong></li>

			<li><strong>Solène SINNING</strong></li>

			<li><strong>Jérémy MOUGEY</strong></li>
			</ul>
	</div>
</body>
</html>