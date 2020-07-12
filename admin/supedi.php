<?php
// ------------------------------------------------------------------------- //
//                VOTRE CV EN LIGNE                      //
//                       <http://www.smart-http.com/>                             //
// ------------------------------------------------------------------------- //

include_once '../../../include/cp_header.php';
xoops_cp_header();
global $xoopsTheme;

if (isset($_GET['start']) ) {
	$start = intval($_GET['start']);
} else {
	$start = 0;
}


echo '<h4>' . _AM_SUPEDI . '</h4>';
        $sql = "SELECT email,ville FROM ".$xoopsDB->prefix("cv")." where valider= 1 ";
		$result=$xoopsDB->queryF($sql);
		

//on compte combien durésultats y 'en a 
$combien = $xoopsDB->getRowsNum($result);

if ($combien>=1){

$sql = "SELECT id,login,formation FROM ".$xoopsDB->prefix("cv")." where valider= 1 ORDER BY id Desc Limit $start, ".$xoopsModuleConfig['nb_afficher_admin'];
		$req=$xoopsDB->queryF($sql);
		


print "<b>"._AM_NOUVEAU."</b><table> <tr class=\"even\">
	<td>"._AM_LOGIN." </td>
        <td >". _AM_DOMAINE."</td>	
	<td colspan=\"5\">"._AM_ACTION."</td>
  </tr>";

while($result = $xoopsDB->fetchArray($req))
{ 
     
  print  "<tr class=\"itemFoot\"><td> $result[login] </td><td> $result[formation] </td><td> <a href=\"consulter.php?id=$result[id]\">"._AM_CONSULTE."</a> </td><td> <a href=\"../modifie.php?login=$result[login]\">"._AM_EDITER."</a> </td><td> <a href=\"valider.php?id=$result[id]\">"._AM_APPROUVER."</a> </td><td> <a href=\"desap.php?id=$result[id]\">"._AM_DESAPPROUVER."</a> </td><td> <a href=\"effacer.php?id=$result[id]\">"._AM_SUPPRIMER."</a> </td></tr>";
}


include_once XOOPS_ROOT_PATH.'/class/pagenav.php';
$pagenav=new XoopsPageNav($combien, $xoopsModuleConfig['nb_afficher_admin'], $start, 'start', "");
print "</table><br>".$pagenav->renderNav();

print "<br><br>Contactez nous sur <a href=\"http://www.smart-http.com\" target=self>Mon_CV</a>";
}

else {print "0 ".ENREGISTERS;}





xoops_cp_footer();
?>
