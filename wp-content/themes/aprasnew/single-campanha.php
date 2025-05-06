<?php get_header();?>

<div class="container-fluid mainContent">
<div class="row p-35 pt-50">

<div id="wrapLeft" class="col-xl-6 col-md-6 col-lg-6 col-12">

<?php
 while ( have_posts() ) : the_post(); ?>
        

        <h1 class="title-h1 primary" style="color: #003e81;">   <?= the_title(); ?>   </h1>

        <div class="title-h3 mt-40">Algodão</div>

        <span class="border-line mt-30 mb-30 w-10"></span>
        
        <p style="font-size: 18px;"> Somos fabricantes especializados em tecidos 100% algodão. Nossos produtos são fabricados com fio de algodão certificado internacionalmente, priorizando critérios de sustentabilidade. </p>
        <p style="font-size: 18px;">

        Trabalhamos com empresas nacionais, comprometidas com práticas e sistemas de produção sustentáveis, que buscam a redução do impacto ambiental, assim como a melhoria das condições de trabalho dos trabalhadores. </p>


            <!-- <?php //the_content(); ?>  -->
      

    <?php
    endwhile; 
  
    ?>

</div>



<div id="wrapRight"  class="col-xl-6 col-md-6 col-lg-6 col-12  column-box p-35 lt-rounded-50  rb-rounded-50" style="font-size: 18px;transform: scale(1.1)">
    
<p>
O algodão é uma fibra utilizada para vestuário desde a antiguidade. É uma fibra natural constituída basicamente por celulose e tem capacidade de absorção de umidade de até 8%. Por isso é uma das fibras mais indicadas para nosso clima tropical.
</p> <p>
Por ser muito versátil, confortável e resistente, temos em nossa linha de produtos artigos utilizados tanto para calças (moletons e Cotton Lycra) como para camisetas (1/2 malha).
</p> <p>
Nossas malhas são produzidas a partir de estudos de resistência/durabilidade e conforto, resultando em produtos flexíveis e com toque muito macio.
</p> <p>
Além disso, são tingidas com corantes especiais para que resistam ao maior número de lavagens sem perder a cor e não sofram deformações após lavagens.
</p> <p class="mb-50">
Para atender a segmentos de tecidos tecnológicos, produzimos ainda malhas com microfibra de poliéster (Dri-Fit) e helanca.
</p>
</div> 


<div id="algodaoSection" class="col-xl-6 col-md-6 col-lg-6 col-12">
    <img src="<?= get_template_directory_uri().'/img/algodao1.png';?>" class="img-fluid rb-rounded-50" style="transform: scale(1.1)"/>
</div>


<div id="valoresBriefing" class="col-xl-6 col-md-6 col-lg-6 col-12 pt-200 pl-50">

A Apras Uniformes Escolares atende escolas e universidades de toda região da grande São Paulo
Santo André – São Bernardo do Campo – São Caetano do Sul – Mauá Diadema – São Paulo e interior e outros Estados, além de contar com empresas internacionais no rol de clientes.
Faça um contato com a Apras Uniformes Escolares, comprar uniformes escolares em Santa Catarina de qualidade para sua instituição.
A central atende pelo número de telefone (11) 2269-2269 de segunda a sexta das 8h30 às 17h30.


</div>
</div>
</div>
<?php get_footer(); 
?>
<style>
@media (max-width: 768px) {

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
    transform: scale(1) !important;
    padding-top:30px !important;
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

</style>