<?php
// ------------------------------------------------------------------------- //
//                           Mon_Cv for Xoops                                //
//                              Version:  2.13                               //
// ------------------------------------------------------------------------- //
// Author: Moussa Lhoussaine (alias smart)                                   //
// email:  admin@smart-http.com                                              //
// URLs: http://www.smart-http.com                                           //
//---------------------------------------------------------------------------//

include ("../../mainfile.php");
include (XOOPS_ROOT_PATH."/header.php");
global $xoopsTheme;
require_once("include/functions.php"); 

// title de la page
  
  
$xoopsTpl->assign('xoops_pagetitle',   _MD_RECHERCHE);

$xoTheme->addMeta( 'meta', 'keywords', _MD_RECHERCHE);

$xoTheme->addMeta( 'meta', 'description', _MD_RECHERCHE);

include_once "include/formser.php";
display_smart();
include (XOOPS_ROOT_PATH."/footer.php");
?>

