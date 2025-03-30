<?php
require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

/* This file contains few classes in order to decrease the amount of code inside the theme,
 it is not recommended to make changes here */


 class MailFunctions {

      private $mail;
      public $retornoArr;

      public function __construct() {
          
          $this->mail = new PHPMailer\PHPMailer\PHPMailer();
          $this->mail->CharSet = 'UTF-8';
          $this->mail->IsSMTP();
          $this->mail->Port = 587;
          $this->mail->Host = 'smtp.weblink.com.br';
          $this->mail->SMTPAuth = true;
          $this->mail->Username = 'apras@apras.com.br'; 
          $this->mail->Password = 'Apras@2458525'; 
          $this->mail->IsHTML(true);    
          //$this->mail->SMTPDebug = 2;
          $this->mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
      }

      public function setMailData($mailData) {
        $this->mail->Subject  = "Email do site - cliente: ".$mailData["nome"]; 
        $this->mail->Body = " Dados do cliente <br />". $mailData["nome"]. " <br /> Email: ". $mailData["email"]." <br /> Telefone: ".$mailData["telefone"]."<br /> Mensagem: ".$mailData["mensagem"];
        $this->mail->From = "apras@apras.com.br";
        $this->mail->FromName = 'Contato Site';
        $this->mail->AddAddress('apras@apras.com.br','Contato');
      }


      public function send() {
        if(!$this->mail->Send())
        {
          

            $this->retornoArr = array(

              "status" => false,
              "mensagem" => "Houve problemas para enviar seu email, 
              por gentileza entre em contato conosco por telefone ou mande nos um email por sua conta de email pessoal. 
              Pedimos desculpas pelos transtornos"

            );
          
        } else {

          $this->retornoArr = array(

            "status" => true,
            "mensagem" => "Mensagem enviada com sucesso"

          );


        }
      
      }



} 



class WP_SidebarFunctions {

// function to generate an Array for new Sidebars on side bar custom function in main functions file

public static function getSideBar(Array $params = array()) {

return array (
            'name' => $params['name'],
            'id' => $params['id'],
            'description' => $params['description'],
            'before_widget' => '<div class="widget-content">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        );

 }
}


// Below something usefull but still needs some implementations

// Somethings to implement, data control and default params, it is similiar with the abstract class concept, for now it doesn't need any attention

interface dataFunctions {

public function setParams(Array $params = array());
public function getParams(); 

}


class WP_Entities implements dataFunctions {

private $params;
private $data;

public function setParams(Array $params = array()) {

$this->params = $params;

}

public function getParams() {

return $this->params;

}

}

// Below Some important helpers for Customize register API from wordpress. It decreased a lot of code from SideBar custom function on "special customizers file"

class WP_CustomizerHelper {


public function addImageControl($wp_customize, $setting = array(), $control = array()) {


$wp_customize->add_setting($setting["name"], $setting["params"]);
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, $control["name"], $control["params"]));

}

public function addSimpleControl($wp_customize, $setting = array(), $control = array()) {
  $wp_customize->add_setting($setting['name'], $setting["params"]);     
  $wp_customize->add_control($control["name"], $control["params"]);

}


public function addColorControl($wp_customize, $setting = array(), $control = array()) {
$wp_customize->add_setting($setting['name'], $setting["params"]);  
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $control["name"], $control["params"]));
	
}

public function addTextControl($wp_customize, $setting = array(), $control = array()) {
$wp_customize->add_setting($setting['name'], $setting["params"]);  
$wp_customize->add_control($control["name"], $control["params"]);
	
}

}


