<?php
// 
// smart-http.com
// Module Info

$mydirname = basename( dirname( dirname( dirname( __FILE__ ) ) ) );
$modinfo_lang =  '_MI_' . strtoupper( $mydirname ) ;
$admin_lang =  '_AM_' . strtoupper( $mydirname ) ;

// The name of this module
define($modinfo_lang."_NAME","".$mydirname."");
define($modinfo_lang."_MONEY","Monnaie") ;

// A brief description of this module
define("_MI_MON_CV_DESC","This module allows your members to create their CVs online professional with multifunction.");





define("_MI_MAX_SIZE","Size Max ");
define("_MI_DESC_MAXSIZE","Maximum size allowed  of the picture for CVs, in Byte");


// Names of admin menu items
define("_MI_ADMENU1","Index");
define("_MI_ADMENU2","CVs waiting");
define("_MI_ADMENU3","Management CVs");


define("_MI_MON_CV_NEW","Latest CVs");

define("_MI_NB_INDEX","Number of CV");
define("_MI_DESC_NBINDEX","Number of CVs to display in the index");

define("_MI_NB_RECHERCHER","Number of CV");
define("_MI_DESC_NBRECHERCHER","Number of CVs to display in the page of search results");

define("_MI_NB_ADMIN","Number of CV");
define("_MI_DESC_NBADMIN","Number of CVs to be displayed in the admin");


define("_MI_MON_CV_SUJET","Subject of Email");
define("_MI_MON_CV_GARDEZ","Keep your CV online");
define("_MI_MON_CV_EMAIL","Contents of Email");
define("_MI_MON_CV_VEMAIL","Hello:
Congratulations your CV has just been approved, your account allows you to access your CV, print and update it whenever you want. 
Thank you for your registration.
Please do not reply to this message.
Webmaster
");
define("_MI_MON_CV_DEMAIL","Email which informs the member of the approval of his CV.");

?>
