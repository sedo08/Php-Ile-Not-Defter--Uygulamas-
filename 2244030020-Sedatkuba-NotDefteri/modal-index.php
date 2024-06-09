<?php 
require_once ('./classes/db.class.php');

include "./classes/functions.classes.php";
include "./inc/_header.php";

$id = $_GET["not_id"];
?>
<?php 


$oncelik = new Oncelik();
$oncelikGetir = $oncelik->oncelikGetir();
?>
  <body>
    <div class="container-fluid">
      <div class="row">
      

        <?php include "./data/not-ekle.php"?>



        <?php include "./data/notlar.php"?>



        <?php include "./data/modal-duzenle.php"?>


      </div>
    </div>


    <?php include "./inc/_footer.php"?>

  </body>
</html>  
