<?php  include '../config.php';?>
<?php  include '../header.php'; ?>


<div class="general-content">
<h1>Le morpion</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Faire un jeu de morpion, l'adversaire et l'ordinateur, il n'y a pas deux joueurs.
    </p>
<h2>Faire une partie</h2>

    <!-- Début php -->
    <?php
    function createArray(){
        $_SESSION['jeu']=
            array
            (
                array('I','I','I'),
                array('I','I','I'),
                array('I','I','I')
            );
    }

    function display(){
        echo '<table id="center"><tbody>';
        for($i=0;$i<3;$i++){
            echo '<tr>';
            for($j=0;$j<3;$j++){
                checkValue($_SESSION['jeu'][$i][$j],$i,$j);
            }
            echo '</tr>';
        }
        echo '</tbody></table></div>';
    }

    function checkValue($jeu,$i,$j){
        switch ($jeu){
            case "X":
                echo '<td class="carre" id="'.$i.','.$j.'"><img src="/img/croix.png"></td>';
                break;
            case "O":
                echo '<td class="carre" id="'.$i.','.$j.'"><img src="/img/rond.png"></td>';
                break;
            default:
                echo '<td class="carre" id="'.$i.','.$j.'">
                <a href="/morpion/?zone='.$i.','.$j.'"><img src="/img/vide.png"></a></td>';
        }
    }

    function playerMove($id){
        $tab=explode(",", $id);
        $i=$tab[0];
        $j=$tab[1];
        $_SESSION['jeu'][$i][$j]='X';
    }

    function computerMove(){
        $b=true;
        while($b){
            $i=rand(0,2);
            $j=rand(0,2);
            if($_SESSION['jeu'][$i][$j] == 'I'){
                $_SESSION['jeu'][$i][$j]='O';
                $b=false;
            }
        }
    }

    function checkWin(){
        if(verif('X')){
            echo '<div style="text-align:center;margin-bottom:30px;width:100%;">
            <a href="/morpion/?rejouer=ok" class="btn btn-info" style="font-size:50px;padding-left:100px;padding-right:100px;">
            Bravo, tu as gagné !!<br>Rejouer une partie</a></div>';
        }
        else if(verif('O')) {
            echo '<div style="text-align:center;margin-bottom:30px;width:100%;">
            <a href="/morpion/?rejouer=ok" class="btn btn-info" style="font-size:50px;padding-left:100px;padding-right:100px;">
            Bravo, tu as perdus !!<br>Rejouer une partie</a></div>';
        }
        else if(checkFull()){
            echo '<div style="text-align:center;margin-bottom:30px;width:100%;">
            <a href="/morpion/?rejouer=ok" class="btn btn-info" style="font-size:50px;padding-left:100px;padding-right:100px;">
            Match nul !!<br>Rejouer une partie</a></div>';
        }
        else{
            echo '<div style="text-align:center;margin-bottom:30px;width:100%;">
            <a href="/morpion/?rejouer=ok" class="btn btn-info" style="font-size:50px;padding-left:100px;padding-right:100px;">
            Recommencer</a></div>';
        }
    }

    function checkfull(){
        foreach($_SESSION['jeu'] as $jeu){
            foreach($jeu as $case){
                if ($case == 'I')
                {
                    return false;
                }
            }
        }
        return true;
    }

    function verif($joueur){
        if($_SESSION['jeu'][0][0]==$joueur && $_SESSION['jeu'][0][1]==$joueur && $_SESSION['jeu'][0][2]==$joueur
        || $_SESSION['jeu'][1][0]==$joueur && $_SESSION['jeu'][1][1]==$joueur && $_SESSION['jeu'][1][2]==$joueur
        || $_SESSION['jeu'][2][0]==$joueur && $_SESSION['jeu'][2][1]==$joueur && $_SESSION['jeu'][2][2]==$joueur
        || $_SESSION['jeu'][0][0]==$joueur && $_SESSION['jeu'][1][0]==$joueur && $_SESSION['jeu'][2][0]==$joueur
        || $_SESSION['jeu'][0][1]==$joueur && $_SESSION['jeu'][1][1]==$joueur && $_SESSION['jeu'][2][1]==$joueur
        || $_SESSION['jeu'][0][2]==$joueur && $_SESSION['jeu'][1][2]==$joueur && $_SESSION['jeu'][2][2]==$joueur
        || $_SESSION['jeu'][0][0]==$joueur && $_SESSION['jeu'][1][1]==$joueur && $_SESSION['jeu'][2][2]==$joueur
        || $_SESSION['jeu'][0][2]==$joueur && $_SESSION['jeu'][1][1]==$joueur && $_SESSION['jeu'][2][0]==$joueur){
            return true;
        }
        else {
            return false;
        }
    }

    if(!isset($_SESSION['jeu']))
    {
        createArray();
    }
    else if(isset($_GET['zone'])){
        if(!verif('X') && !verif('O')) {
            playerMove($_GET['zone']);
        }
        if(!verif('X') && !verif('O') && !checkfull()) {
            computerMove();
        }
        header('Location: /morpion/');
    }
    if (isset($_GET['rejouer']) && $_GET['rejouer'] == 'ok') {
        session_destroy();
        header('Location: /morpion/');
    }
    checkwin();
    display();
    ?>
<!-- Fin php -->
<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
<?php  include '../footer.php'; ?>
