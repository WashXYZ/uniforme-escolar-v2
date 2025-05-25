<?php get_header();?>

<div id="customers-area" class="container-fluid bg-inverse p-32">

<div class="container">

<div class="row">

<div class="w-100 text-center">

<h1 class="title-h3 primary-lighten">  Uniformes Escolares </h1>

<div class="border-line mt-40 mb-60 w-7 margin-auto"></div>
</div>


</div>


<div class="row">

<?php $loop = new WP_Query( array( 'post_type' => 'produtos', 'posts_per_page' => -1,  'order' => 'ASC', 'category' => 'current' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="col-xl-3 col-md-6 col-sm-6 col-lg-4 col-12   ">


<div class="produto-thumbnail text-center mb-20">

<?php if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<img src="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="img-fluid p-50" />';
 } ?>

<h1 class="title-h5">
<?php

 the_title()

?>

</h1>

<?php the_content() ?>


<div class="product-card-panel">

  <a class="btn btn-outline-primary w-100" href="<?php get_site_url() ?>/contato/contato"> <i class="fa fa-phone"></i> Entrar em contato  </a>


  <a class="btn btn-success w-100 mt-1" href="https://api.whatsapp.com/send?phone=5511963515151&text=Olá,%20vi vocês da Apras Uniformes no site oficial e tenho interesse em saber mais sobre <?=get_the_title()?>"> <i class="fa-brands fa-whatsapp"></i> Saiba mais  </a>

</div>
</div>
</div>


<?php endwhile; wp_reset_query(); ?>
</div>
</div>

</div>
<?php get_footer(); ?>

<style>

.product-thumbnail {
  padding: 0px !important;
}

.product-card-panel {
 padding:20px;
}


</style>