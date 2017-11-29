<?php  include '../config.php'; ?>
<?php  include '../header.php'; ?>

    <!-- début traitement image upload-->

    <!-- fin traitement image upload-->



<div class="general-content">
<h1>Les vignettes</h1>
    <h2>Explications sur l'exercice</h2>
    <p>Vous devez faire le script pour que les vignettes soient enregistrées dans le répertoires "vignettes", les vignettes dans ce répertoire doivent être visibles sur cette page. La vignette doit avoir le même nom que le fichier original. Pour info, le format pour l'image envoyée par le formulaire est un .png, il vous faudra donc convertir d'une manière ou d'une autre l'image téléchargée pour que l'image finale soit au format .jpg
    </p>
<h2>Faire une vignette</h2>
<div>
<div class="image-uploader">
    <form action="index.php"  method="post" enctype="multipart/form-data">
      <div class="image-editor">
        <input type="file" class="cropit-image-input btn btn-default btn-lg" name="imageUP">
        <div class="cropit-preview"></div>
        <div class="image-size-label">
          Redimensionner l'image
        </div>
        <input type="range" class="cropit-image-zoom-input">
        <input type="hidden" name="image-data" class="hidden-image-data" />
        <button type="submit" class="btn btn-default btn-lg">Enregistrer la vignette</button>
      </div>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
            $filename = 'vignettes/'.$_FILES["imageUP"]['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $filename = str_replace($ext,'png',$filename);
            $data = $_POST['image-data'];
            $data = str_replace("data:image/png;base64,",'',$data);
            $data = str_replace(' ','+',$data);
            $data = base64_decode($data);
            file_put_contents($filename, $data);
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $file = str_replace($ext,'jpg',$filename);
            imagejpeg(imagecreatefromstring(file_get_contents($filename)),$file);
            unlink($filename);
        }
?>
 </div>
 </div>
 <h2>Vignettes disponibles</h2>


<?php $dirname = "vignettes/";
$images = glob($dirname."*.jpg");

foreach($images as $image) {
    echo '<img src="'.$image.'" '.'class="vignettes"'.'/>';
}
?>

<script>
$(document).ready(function() {
	$('.menu-link').menuFullpage();
} );
</script>
    <script>
      $(function() {
        $('.image-editor').cropit();

        $('form').submit(function() {
          var imageData = $('.image-editor').cropit('export');
          $('.hidden-image-data').val(imageData);

          return true;
        });
      });
    </script>
<?php  include '../footer.php'; ?>
