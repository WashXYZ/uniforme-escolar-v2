
<div  class="container-fluid p-0" data-ride="carousel">

<div id="slider" class="carousel slide" data-ride="carousel">

 
<div class="carousel-inner">

<?php


$slidesWrap = 1;


foreach ($slides as $slide) :

?>

  
<div class="carousel-item-container carousel-item <?php if ($slidesWrap == 1) { echo "active";} ?>">

<div class="carousel-caption">
        <h3 class="logo-text-style"><?=$slide["title"]?></h3>
        <p><?= $slide["caption"]?></p> <?php if ($slide["link"]) :?>
        <p><a href="<?= $slide['link'] ?>" class="btn btn-outline-warning"> <?php _e("Saiba mais", "wsxdevstudio");?></a></p>
<?php endif; ?>
      </div>
      <img src="<?= $slide["url"]  ?>" width="1920" height="auto" alt="slide-<?= $slide["title"] ?>" class="w-100" />

</div>

<?php $slidesWrap++; ?>

<?php endforeach; ?>


</div>
  <!-- Left and right controls -->

 <a class="carousel-control-prev carousel-control" href="#slider" data-slide="prev" aria-label="Voltar para o slide anterior">
    <i class="fa fa-angle-left" aria-hidden="true"></i>

  </a>
  <a class="carousel-control-next carousel-control" href="#slider" data-slide="next" aria-label="Ir para o slide seguinte">
    <i class="fa fa-angle-right" aria-hidden="true"></i>

  </a>



</div>
</div>