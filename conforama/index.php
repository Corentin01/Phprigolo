<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>
<div class="general-content">
<h1>Conforama</h1>
    <h2>Explications sur l'exercice</h2>
    <p>A partir de l'url suivante <a href="http://www.conforama.fr/sitemap/sitemap-magasins.xml" target="_blank">http://www.conforama.fr/sitemap/sitemap-magasins.xml</a>, allez chercher les adresses des 10 premiers magasins conforama. Attention sur chaque page, il y une adresse de magasin et une adresse de depôt. C'est l'adresse du magasin qui nous interesse !
    </p>


<h2>Résultat</h2>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Code postal</th>
                <th>Ville</th>
            </tr>

        </thead>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Code postal</th>
                <th>Ville</th>

            </tr>
        </tfoot>
        <tbody>
        
            <?php 
    $xml = simplexml_load_file('http://www.conforama.fr/sitemap/sitemap-magasins.xml');
    $i = 0;
foreach($xml->children() as $urls) {
if ($i === 1) {break;}
else {
    $url = $urls->loc;
    parse_str($url);
$content = file_get_contents($url);
$infoBloc = explode( '<div class="left">' , $content );
$address = explode("<br>" , $infoBloc[1] );
$zipCode = explode($name , $address[1] );
echo '<tr><td>'.$name.'</td><td>'.$address[0].'</td><td>'.$zipCode[0].'</td><td>'.$name.'</td></tr>';
    $i++;
    }
} 

    ?>
        </tbody>
    </table>
    </div> !-->
<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
    $('#example').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/French.json"
            }
        } );
} );
</script>
<?php  include '../footer.php'; ?>