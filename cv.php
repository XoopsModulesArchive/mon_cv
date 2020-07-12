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
$xoopsOption['template_main'] = 'mon_cv_cv.html';
include_once "include/functions.php";


$xoopsTpl->assign('xoops_pagetitle',   _MD_FORMULAIRE);

$xoTheme->addMeta( 'meta', 'keywords', _MD_FORMULAIRE);

$xoTheme->addMeta( 'meta', 'description', _MD_FORMULAIRE);





 if ($xoopsUser !='') {
$login = $xoopsUser->getVar('uname');

include_once "include/form.php";


}

else {
$xoopsTpl->assign('POUR', _MD_POUR);
$xoopsTpl->assign('VOUS', _MD_VOUS);
$xoopsTpl->assign('SI', _MD_SI);
$xoopsTpl->assign('ICI', _MD_ICI);
$xoopsTpl->assign('POURS', _MD_POURS);
}
 display_smart();




include (XOOPS_ROOT_PATH."/footer.php");
?>

