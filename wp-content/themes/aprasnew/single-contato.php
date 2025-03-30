<?php

get_header();


$senderStatus = contatoMailSender();


?>
<script src="https://www.google.com/recaptcha/api.js?render=6Lc1QCgkAAAAAJwREQX5yGH_GezGHQoWPhOF6c4P"></script>

<div class="container-fluid" id="contato-block">
<div class="row contato-row">


<div class="col-xl-4 pt-38 pb-38 p-18 bg-green" id="contato-left-block">

<div class="inner-contato-box">

<h1> Contato </h1>

<h2> <i class="fa fa-phone"> </i> (11) 2269-2269 </h2>

<p> <a href="mailto:apras@apras.com.br" style="color:white;"> <i class="fa fa-envelope"></i> apras@apras.com.br </a> </p>

</div>

</div>

<div class="col-xl-8 bg-inverse p-32" >

<form method="post" id="formContato">


<div class="row">

<div class="col-xl-4">
<label> Nome* </label>
<input type="text" class="form-control" required name="nome" />
</div>

<div class="col-xl-4">
<label>  E-mail* </label>
<input type="email" class="form-control" required name="email" />
</div>
<div class="col-xl-4">
<label>  Telefone* </label>
<input type="text" class="form-control" required name="telefone" />
</div>
</div>
<input id="captchaToken" name="captchaToken" type="hidden" value="" />

<input name="form_nonce" type="hidden" value="<?=wp_create_nonce('apras-nonce')?>" />
<div class="row mt-10">
<div class="col-xl-12">
<textarea class="form-control minh-200" name="mensagem" required>
Escreva sua mensagem
</textarea>
</div>
</div>
<div class="d-flex justify-content-center w-100">
</div>
<input type="hidden" name="mailSend" value="true" />

<div class="d-flex justify-content-end">

<button id="formContatoBtn" class="btn btn-primary-dark mt-10 w-100"  type="submit"> <i class="fa fa-envelope"></i> ENVIAR MENSAGEM </button>

<small class="w-100"> Todos os campos são obrigatórios. </small>


</div>

<?php if($senderStatus != null) : ?>


    <div class="alert <?= $senderStatus["status"] == true ? "alert-success" : "alert-danger"; ?> temp-alert">
    
    <?= $senderStatus["mensagem"]; ?> <i class="fa fa-check"> </i>

</div>

<?php 

endif;

?>
</form>

</div>

</div>
</div>



<script>


$(document).ready( () => {

    $("#formContato").submit((event) => {

        if($("#captchaToken").val().length == 0) {
        event.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lc1QCgkAAAAAJwREQX5yGH_GezGHQoWPhOF6c4P', {action: 'submit'}).then(function(token) {
            console.log(token);
              // Add your logic to submit to your backend server here.
              $("#captchaToken").val(token);
              $("#formContato").submit();
              console.log(token);
             
          });
        });
    }
    })
});


</script>

<?php get_footer(); 
?>