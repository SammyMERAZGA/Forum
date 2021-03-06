<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Forum dédié au jeu mobile Dragon Ball Legends - Forum réalisé dans le cadre de nos études à l'institut G4 avec M. Martin-Nevot"/>
  <meta name="keywords" content="Forum, Dragon Ball, Institut G4, Marseille PHP, HTML, CSS, JavaScript, MySQL">
  <link rel="stylesheet" type="text/css" href="assets/styles/style.css"/>
  <link rel="icon" href="assets/images/favicon.ico"/>
  <title>Legends Corp</title>
</head>

<body>

<a name="top"></a>
<!-- NAVBAR -->

<nav>
	<div class="table">
		<ul>
			<img id="logoNav" src="./assets/images/logoDbl.jpg" alt="Logo Legends Corp">
			<li>
				<a href="index.php?uc=home&action=home">🏠 Accueil</a>
			</li>
			<li>
				<a href="index.php?uc=about&action=about">👥 À propos</a>
			</li>
			<?php if(isset($_SESSION['theUserEmail'])) {
				echo '<li>
					<a href="index.php?uc=account&action=account">👨‍🎓 Mon profil</a>
				</li>';
				echo '<li>
					<a href="index.php?uc=logout&action=logout">🔓 Déconnexion</a>
				</li>';
			} else {
				echo '<li>
					<a href="index.php?uc=login&action=login">🔒 Connexion</a>
				</li>';
				echo '<li>
				<a href="index.php?uc=subscribe&action=subscribe">🔐 Inscription</a>
				</li>';
			} ?>
			<?php if(isset($_SESSION['theUserEmail']) && getUserInfo($_SESSION['theUserEmail'])['admin'] == 1) {
				echo '<li>
					<a href="index.php?uc=admin&action=admin">🔧 Admin</a>
				</li>';
			} ?>
		</ul>
	</div>
</nav>