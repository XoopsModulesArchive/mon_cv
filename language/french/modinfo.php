<?php
// mon_cv v 2.13
// smart-http.com
// Module Info

$mydirname = basename( dirname( dirname( dirname( __FILE__ ) ) ) );
$modinfo_lang =  '_MI_' . strtoupper( $mydirname ) ;
$admin_lang =  '_AM_' . strtoupper( $mydirname ) ;

// The name of this module
define($modinfo_lang."_NAME","".$mydirname."");
define($modinfo_lang."_MONEY","Monnaie") ;

// A brief description of this module
define("_MI_MON_CV_DESC","Ce module permet à vos membres de créer leur CVs professionnel en ligne, avec multifonctions.");





define("_MI_MAX_SIZE","Taille Max ");
define("_MI_DESC_MAXSIZE","Taille maximale de l'image autorisée pour les CVs, en Octet");


// Names of admin menu items
define("_MI_ADMENU1","Index");
define("_MI_ADMENU2","CVs en attente");
define("_MI_ADMENU3","Gestion des CVs");


define("_MI_MON_CV_NEW","Derniers CVs");

define("_MI_NB_INDEX","Nombre de CV");
define("_MI_DESC_NBINDEX","Nombre de CV à afficher dans l'index");

define("_MI_NB_RECHERCHER","Nombre de CV");
define("_MI_DESC_NBRECHERCHER","Nombre de CV à afficher dans la page des résultats de la recherche");

define("_MI_NB_ADMIN","Nombre de CV");
define("_MI_DESC_NBADMIN","Nombre de CV à afficher dans l'admin");


define("_MI_MON_CV_SUJET","Sujet de l'Email");
define("_MI_MON_CV_GARDEZ","Gardez votre CV en ligne");
define("_MI_MON_CV_EMAIL","Contenu de l'Email");
define("_MI_MON_CV_VEMAIL","Bonjour, 
Félicitation votre CV vient d'être approuvé, Votre compte vous permet d'accéder à votre CV, l'imprimer et le mettre à jour quand vous voulez.
Merci pour votre inscription. 
Merci de ne pas répondre à ce message.
Webmaster
");
define("_MI_MON_CV_DEMAIL","Email qui informe le membre de l'approbation de son CV.");

?>
