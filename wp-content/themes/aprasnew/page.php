<?php get_header();?>

<div class="container-fluid mainContent">
<div class="row p-35 pt-50">

<div id="wrapLeft" class="col-xl-6 col-md-6 col-lg-6 col-12 pr-50 pb-50">

<?php
 while ( have_posts() ) : the_post(); ?>
        

        <h1 class="title-h1 primary" style="color: #003e81;">  <?= the_title(); ?>   </h1>

        <span class="border-line mt-30 mb-30 w-20"></span>


    <p style="font-size: 18px;">  A Apras Uniformes Escolares é uma empresa que pensa nos estudantes que dedicam suas vidas buscando sonhos e conquistas. Isso não seria possível sem <?php if(!str_contains(strtolower(get_the_title()), "confecção")) : ?> comprar <?php endif; ?>  <?php $title = get_the_title(); echo str_replace('Comprar', '', $title); ?>  de qualidade e com tecnologia têxtil para os anos dentro das instituições.
    </p>
    <p style="font-size: 18px;"> Há mais de 30 anos no mercado de uniformes, a Apras Uniformes Escolares segue trabalhando com dedicação e carinho para satisfazer às expectativas de pais, alunos e escolas. Os uniformes escolares são desenvolvidos exclusivamente para cada cliente, utilizando a matéria-prima de mais alta qualidade que não agride ao meio ambiente.
    </p>
    <p style="font-size: 18px;">
    Com fabricação própria, do corte ao acabamento, os uniformes escolares são qualificados para o melhor uso, proporcionando conforto e satisfação para a realização das atividades cotidianas.
    </p>
    <?php
    endwhile; 
  
    ?>

</div>



<div id="wrapRight"  class="col-xl-6 col-md-6 col-lg-6 col-12  column-box p-35 lt-rounded-50  rb-rounded-50" style="font-size: 18px;">
    
<p> Os uniformes escolares são tingidos com corantes especiais de longa durabilidade, para que possam resistir ao maior número de lavagens sem perder a cor e não sofram deformações após lavagens.</p>

<p> Para atender a segmentos de tecidos tecnológicos, oferece ainda malhas com microfibra de poliéster (Dri-Fit) e helanca. </p>

<p> A Apras Uniformes Escolares oferece peças de uniformes escolares com modelos exclusivos, de modo a proporcionar identidade e fixação da marca dos clientes: </p>

<ul class="list"> 
<li>Camisetas  <i class="fa fa-check"></i></li>
<li>Moletons <i class="fa fa-check"></i></li>
<li>Blusões <i class="fa fa-check"></i></li>
<li>Bermudas <i class="fa fa-check"></i></li>
<li>Calças <i class="fa fa-check"></i></li>
<li>Leggins <i class="fa fa-check"></i> </li>
<li>E muito mais. </li>
</ul> 

<a class="w-100 btn btn-lg btn-primary" href="<?= get_site_url() ?>/produtos"> Ver lista de produtos  </a>  



</div> 




<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <div id="algodaoSection" class="col-xl-6 col-md-6 col-lg-6 col-12 rb-rounded-50 column-box image-case">

<img src="<?= get_the_post_thumbnail_url(); ?>" class="img-fluid "/>
</div>
<?php else :?>
    <div id="algodaoSection" class="col-xl-6 col-md-6 col-lg-6 col-12">
    <img src="<?= get_template_directory_uri().'/img/algodao1.png';?>" class="img-fluid rb-rounded-50" style="transform: scale(1.1)"/>
    </div>
<?php endif; ?>


<div id="valoresBriefing" class="col-xl-6 col-md-6 col-lg-6 col-12 pt-40 pl-50">

<h1 class="title-h3" style="color: #003e81;"> A Apras Uniformes Escolares atende escolas e universidades de toda região da grande São Paulo </h1>

<span class="border-line mt-30 mb-30 w-20"></span>


<p> Santo André, São Bernardo do Campo, São Caetano do Sul, Mauá, Diadema, São Paulo, interior e outros Estados, além de contar com empresas internacionais no rol de clientes. </p>

<p> Faça um contato com a Apras Uniformes Escolares, <?= the_title(); ?>  em São Paulo de qualidade para sua instituição. </p>

<p> A central atende pelo número de telefone <b> (11) 2269-2269 </b> de segunda a sexta das 8h30 às 17h30. </p>

<p> Se preferir pode entrar em contato conosco por Whatsapp ou <a href="https://uniformeescolar.com.br/contato/contato/"> clique aqui <a/> e nos envie um e-mail. </p>

</div>
</div>
</div>
<?php get_footer(); 
?>
<style>

p {
    font-size: 18px !important;
}
@media (max-width: 768px) {

    .border-line {
        width: 50% !important;
    }

    .list {
    flex-direction: column;
    justify-content: center;
    
    li {
            width: 100%;
        display: block;
        text-align: center;
    }
    }

#valoresBriefing
{
    margin-top: 30px !important;
    p {
    text-align: center !important;
    }

}

.mainContent {
    .row {
        padding-left: 0px !important;
        padding-right: 0px !important;
        padding-top: 30px;
    }
}
#wrapRight {
    transform: scale(1) !important;

}

#valoresBriefing
{
    padding-top: 30px !important;

    transform: scale(1) !important;
    padding-top:0px !important;
}



#algodaoSection {
        padding: 0px;
        text-align: center;
        display: flex;
        justify-content: center;
        img {
            width: 100%;
            transform: scale(1) !important;
            border-radius: 0px !important;
        }
    }
}

.image-case {
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.list {
    margin: 0px;
    padding: 0px;
    display: flex;
    flex-wrap: wrap;
    
    li {
        list-style-type: none;
        margin: 0px;
        color:#666;
        font-weight: bold;
        margin-right: 4px;
        padding: 8px;
    }
}

</style>