<?php get_header();?>

<div class="container-fluid mainContent">
<div class="row">



<!-- <div id="wrap-left" class="col-md-4 col-xs-12">

<?php get_sidebar(); ?>

</div>
-->


<div id="wrap-right" class="col-md-12 col-xl-12 col-12 box m-0">

<?php
 while ( have_posts() ) : the_post(); ?>
        

        <h1>   <?= the_title(); ?>   </h1>

            <?php the_content(); ?> 
      

    <?php
    endwhile; 
  
    ?>

</div>
</div>
</div>
<?php get_footer(); 
?>