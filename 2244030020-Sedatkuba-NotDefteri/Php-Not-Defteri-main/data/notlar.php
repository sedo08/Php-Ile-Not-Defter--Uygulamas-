<?php 

$notlar = new Not(); 
$notGetir = $notlar->notGetir();




if(isset($_GET['islem']) && $_GET['islem'] === 'sil' && isset($_GET['not_id'])) {
    $not_id = $_GET['not_id'];

    $silme_sonuc = $notlar->notSil($not_id);
    

    if($silme_sonuc) {
        echo "<script>window.location.href='index.php?notSil=ok';</script>";
        exit; 
    } else {
        echo "<script>window.location.href='index.php?notSil=no';</script>";
        exit; 
    } 
  }

?>

<div class="col-9 notes-div">
    <h3 class="ustbaslik">YAPILACAKLAR</h3>
    <?php
    if($notGetir) 
    {
        foreach($notGetir as $not) 
        {
            ?>
                <div class="alert alert-success mt-4" role="alert">

                    <a class="btn btn-warning btnmodal" href="./modal-index.php?not_id=<?php echo $not->not_id?>"><i class="fa-solid fa-pen-to-square"></i> Düzenle</a>
                    <a style="position: absolute; top: 55px; right: 5px;" class="btn btn-danger" href="./index.php?not_id=<?php echo $not->not_id?>&islem=sil"><i class="fa-solid fa-delete-left"></i> Sil</a>

                    <span class="badge badge-pill badge-<?php echo $not->alert_type?> mb-4"><?php echo $not->oncelik_durum?></span>
                    <h4 class="alert-heading"><?php echo $not->not_baslik?></h4>
                    <p><?php echo $not->not_icerik?></p>
                </div>

            <?php
        }
    }
    else // Kayıt Yoksa
    {
        ?>
        <div class="alert alert-danger mt-4" role="alert">
            <h5>Kayıt Bulunamadı Lütfen Not Ekleyiniz.</h5>
        </div>
        <?php
    }
    ?>
    <footer class="text-center mt-5">
    <p>Bol Bol Not Tutma Dileği İle - Sedat Kuba</p>
</footer>

</div>


