<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

<div class="general-content">
<h1>La note</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Calculez vous même votre note en utilisant le formulaire suivant. Attention, les notes sont dans le fichier note.txt au format JSON, vous devez faire la correspondance entre ces données et les données envoyées par le formulaire.
    </p>

<!-- Début de votre PHP-->
    <?php ;
    $note = 46; if(isset($_POST['helpers'])){ $file = fopen('note.txt','r'); $json = fgets($file); $obj = json_decode($json,true); $note = 0; foreach($_POST as $post){ $note += $obj[$post]; } echo '<div class="MegaNote">'.$note.'/20</div>'; fclose($file); } ?>



<h2>Avez-vous réussi les exercices suivants :</h2>
<form action="/note/" method="post" id="exo">
  <table class="table table-striped">
  <tbody>
    <tr>
      <td class="lead">Exercice "Les helpers"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="helpers" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="helpers" value="lhGtF62">OUI
    </label></td>
    </tr>
    <tr>
      <td class="lead">Exercice "La classe"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="classe" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="classe" value="lhGtF62">OUI
    </label></td>
    </tr>
     <tr>
      <td class="lead">Exercice "La note"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="note" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="note" value="lhGtF62">OUI
    </label></td>
    </tr>
      <tr>
      <td class="lead">Exercice "Le menu"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="menu" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="menu" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Référencement"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="referencement" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="referencement" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Vignettes"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="vignettes" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="vignettes" value="GFoP5s">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Morpion"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="morpion" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="morpion" value="MvDF34">OUI
    </label></td>
    </tr>
       <tr>
      <td class="lead">Exercice "Conforama"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="conforama" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="conforama" value="MvDF34">OUI
    </label></td>
    </tr>
        <tr>
      <td class="lead">Exercice "Fichier CSV"</td>
      <td align="right"><label class="radio-inline">
      <input type="radio" name="csv" checked value="qsdfV45">NON
    </label>
    <label class="radio-inline">
      <input type="radio" name="csv" value="YvKJhc23">OUI
    </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><button type="submit" class="btn btn-default btn-lg" form="exo" value="Submit">Calculer ma note</button></td>
    </tr>
  </tbody>
</table>


</form>

<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
<?php  include '../footer.php'; ?>