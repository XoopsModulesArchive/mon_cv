<?php
// ------------------------------------------------------------------------- //
//                              VOTRE CV EN LIGNE V 2.13                     //
//                      <http://www.smart-http.com/>                         //
// ------------------------------------------------------------------------- //

include_once '../../../include/cp_header.php';
xoops_cp_header();
global $xoopsTheme;


echo '<h4>' . _AM_CONFIG . '</h4>';
        echo"| <a href=\"../index.php\">" . _AM_GOTOMOD . "</a> |<br>
        <table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";       
        echo " - <b><a href='attente.php'>" . _AM_ATTENTE . "</a></b>\n";
        echo "<br /><br />\n";        
        echo " - <b><a href='supedi.php'>" . _AM_SUPEDI . "</a></b>\n";
        echo "<br /><br />\n";
        echo " - <b><a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule->getVar('mid')."'>" . _AM_PRE . "</a></b>\n";
        echo "<br /><br />\n";     
        echo"</td></tr></table>";




Print "<Small>[<a href=\"http://www.smart-http.com/modules/mon_cv/\">Mon_cv V2.13</a> Powered by <a href=\"http://www.smart-http.com\">Smart-http.com</a>]</Small>";

xoops_cp_footer();
?>
