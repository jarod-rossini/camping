<?php 
	if(session_status() === PHP_SESSION_NONE){
        session_start();
    } 
?>

<header>
	<nav>
		<a href="index"><p>Accueil</p></a>
		<?php
			if(empty($_SESSION['login'])){
				echo '<a href="inscription"><p>Inscription</p></a>
					  <a href="connexion"><p>Connexion</p></a>
					  <a href="reservation"><p>Réservations</p></a>';
			}
			if(!empty($_SESSION['login'])){
				echo '<a href="profil"><p>Profil</p></a>
					  <a href="reservation"><p>Réservations</p></a>
					  <a href="reserver"><p>Réserver</p></a>';
			}
		?>
	</nav>
</header>