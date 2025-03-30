<?php get_header();?>

<div id="customers-area" class="container-fluid bg-inverse p-32">

<div class="container">

<div class="row">

<div class="w-100 text-center">

<h1 class="title-h3 primary-lighten">  Produtos </h1>

<div class="border-line mt-40 mb-60 w-7 margin-auto"></div>
</div>


</div>


<div class="row">

<?php $loop = new WP_Query( array( 'post_type' => 'produtos', 'posts_per_page' => -1,  'order' => 'ASC', 'category' => 'current' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="col-xl-6 col-md-6 col-sm-6 col-lg-6 col-12 text-center mb-20">


<?php if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<img src="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="produto-thumbnail img-fluid p-150" />';
 } ?>
</div>


<?php endwhile; wp_reset_query(); ?>
</div>
</div>

</div>
<?php get_footer(); ?>

<style> 
.produto-thumbnail {
    box-shadow: 0 20px 40px 10px rgba(0, 0, 0, .1);
    padding: 100px 0;
    border-radius: 0 40px 40px;
    background-color: #fff;
}
</style>