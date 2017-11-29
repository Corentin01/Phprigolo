<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

<div class="general-content">
<h1>Les helpers</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faites une requête dans la base de données liées à ces exercices pour retourner la totalité des apprenants. Faites du PHP pour mélanger ce résultat et obtenir 4 apprenants au hasard.
    </p>
<h2>Résultat</h2>

    <!-- Début du code à remplacer par votre PHP -->
    <?php
    $nomprenom = $dbconnexion->query('SELECT * FROM users');
    $array = array();
    foreach ($nomprenom as $rs){
        $array[] = $rs;
    }
    shuffle($array);

    for($i = 0;$i <4; $i++){
        ?>
        <div class="choix-aleatoire"><?php echo  $array[$i]["nom"]." ".$array[$i]["prenom"]; ?></div>
        <?php
    }
    ?>
    <!-- Fin du code à remplacer par votre PHP -->
<button class="bouton-retry">Retry</button>
<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
<?php  include '../footer.php'; ?>
