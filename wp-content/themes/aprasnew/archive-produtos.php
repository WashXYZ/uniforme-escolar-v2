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

<div class="col-xl-3 col-md-6 col-sm-6 col-lg-4 col-12 text-center mb-20">
<?php the_post_thumbnail(array("class" => " p-25 case-thumbnail")); ?>
</div>


<?php endwhile; wp_reset_query(); ?>
</div>
</div>

</div>
<?php get_footer(); ?>