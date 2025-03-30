<?php

 require("inc/mainClass.php");
 
 // Some few customizers in order to implement theme customization

 require("inc/special_customizers.php");

// Variables for default customizers

$custom_logo_defaults = array(

    'height'      => 60,
    'width'       => 330,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => false,

);


$bgdefaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);

function contatoMailSender() {

    if(!isset($_POST["form_nonce"]))
    return null;

    if(!wp_verify_nonce($_POST['form_nonce'],'apras-nonce'))
    return null;

    if(!isset($_POST["captchaToken"]))
    return array(

        "status" => false,
        "mensagem" => "Ação não autorizada"

    );

    $url = "https://www.google.com/recaptcha/api/siteverify";

//The data you want to send via POST
$fields = [
    'secret'      => "6Lc1QCgkAAAAAL4xk2uBf-Ar0o2bkDIAK8VNCnvc",
    'response' => $_POST["captchaToken"]

];

//url-ify the data for the POST
$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

$headers = array(
    "Content-Type: application/x-www-form-urlencoded",
 );
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
$jsonResult = json_decode($result, true);
if(!$jsonResult["success"])
return array(

    "status" => false,
    "mensagem" => "Ação não autorizada"

);

    if(isset($_POST["mailSend"])) {


        if(!isset($_POST["nome"]) ||
        !isset($_POST["email"]) ||
        !isset($_POST["telefone"]) ||
        !isset($_POST["mensagem"]) ) {


                return array(

                    "status" => false,
                    "mensagem" => "Por favor preencha todos os dados"

                );


        }

     $sender = new MailFunctions();

     $mailData = array(
            "nome" => $_POST["nome"],
            "email" => $_POST["email"],
            "telefone" => $_POST["telefone"],
            "mensagem" => $_POST["mensagem"] 
     );

     $sender->setMailData($mailData);
     $sender->send();

     return $sender->retornoArr;

    }

    return null;
}


// It defines the amount of posts per page for which page, it is free to change or implement

function posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
	if ( $query->is_category() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
	if ( $query->is_archive() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
	
	if ( $query->is_search() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '5' );
    }
}


function registerMenus() {

register_nav_menu('primary', __('mainMenu', 'wsxdevstudio'));

} 

function extScripts() {
 wp_deregister_script('jquery');
 wp_enqueue_style( 'slider', get_template_directory_uri() . '/style.css',false,'1.1','all');
 wp_register_script('main', get_template_directory_uri() .'/js/theme.js', array (), '1.1',  false);
wp_enqueue_script('main');
}


function sidebarCustom() {


$entity = new WP_SideBarFunctions();

$params = $entity::getSideBar(array("name" => __("WSX Main Side Bar", "wsxdevstudio"),
"id" => "right-side-bar-custom", 
"description" => __("WSX Main Bar", "wsxdevstudio")

));

register_sidebar($params);


}


function themeListComments($comment, $args, $depth) {

require("inc/views/comments.php");
    

}


function theme_setup(){
    load_theme_textdomain( 'wsxdevstudio', get_template_directory()."/languages/" );
}

function sliderTemplate() {

$slidesamount = get_theme_mod("banner_WSX_qtt");
if($slidesamount) { 
for ($i=1; $i<=$slidesamount; $i++) {
$slides[$i-1] = array(
"url" => wp_get_attachment_url(get_theme_mod("banner_WSX_option_".$i)),
"caption" => get_theme_mod("text_WSX_option_".$i),
"title" => get_theme_mod("title_WSX_option_".$i),
"link" => get_theme_mod("link_WSX_option_".$i));
}

require_once("inc/views/slider.php");
} 

}

// The breadcrumb template
function breadcrumb() {

require("inc/views/breadcrumb.php");
 
}

// Social Networks top header template

function SocialNetworkTopHeader() {

require("inc/views/social.php");

}

function assetsOnPHPTop() {

    require("parts/content-assets-top.php");
    
    }
    

    function assetsOnPHPBottom() {

        require("parts/content-assets-bottom.php");
        
        }


function createPostTypes() {
 
    register_post_type( 'cases',
    
        array(
            'labels' => array(
                'name' => __( 'Cases' ),
                'singular_name' => __( 'Case' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'cases'),
            'supports' => array( 'thumbnail', 'title' )
        )
    );

    register_post_type( 'produtos',
    
    array(
        'labels' => array(
            'name' => __( 'Produtos' ),
            'singular_name' => __( 'Produto' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'produtos'),
        'supports' => array( 'thumbnail', 'title' )
    )
);

    register_post_type( 'paginas_especiais',
    
        array(
            'labels' => array(
                'name' => __( 'Páginas especiais' ),
                'singular_name' => __( 'Páginas especiais' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'paginas_especiais'),
            'supports' => array( 'thumbnail' )
        )
    );

    register_post_type( 'contato',
    
    array(
        'labels' => array(
            'name' => __( 'Páginas de Contato' ),
            'singular_name' => __( 'Página de contato' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'contato'),
        'supports' => array( 'title' )
    )
);

register_post_type( 'campanhas',
    
array(
    'labels' => array(
        'name' => __( 'Páginas de Campanha' ),
        'singular_name' => __( 'Campanha' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'campanha'),
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ,'headway-seo'  )
)
);



}



function meta() {
    global $post;
    if ( is_singular() ) {
        $des_post = strip_tags( $post->post_content );
        $des_post = strip_shortcodes( $post->post_content );
        $des_post = str_replace( array("\n", "\r", "\t"), ' ', $des_post );
        $des_post = mb_substr( $des_post, 0, 300, 'utf8' );
        echo '<meta name="description" content="' . $des_post . '" />' . "\n";
    }
    if ( is_home() ) {
        echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
    }
    if ( is_category() ) {
        $des_cat = strip_tags(category_description());
        echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
    }
}
add_action( 'wp_head', 'meta');


add_action( 'init', 'createPostTypes' );


//default theme hooks


add_theme_support( 'custom-logo', $custom_logo_defaults);

add_theme_support( 'custom-background', $bgdefaults );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

set_post_thumbnail_size( 790, 600, array('center', 'center') );

add_action( 'pre_get_posts', 'posts_on_homepage' );

add_action('init', 'registerMenus');

add_action( 'widgets_init', 'sidebarCustom' );

add_action( 'after_setup_theme', 'theme_setup' );

add_action ('wp_enqueue_scripts' , 'extScripts', 0);

add_action( 'customize_register', 'customizeOptions' ); // Callback of adding customizing controls

// Actions TO DO

add_action("breadcrumb", "breadcrumb");
add_action("slider", "sliderTemplate");
add_action("socialNet", "SocialNetworkTopHeader");





?>