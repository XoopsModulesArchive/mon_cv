<?php
// ------------------------------------------------------------------------- //
//                VOTRE CV EN LIGNE                      //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //

include_once '../../../include/cp_header.php';
xoops_cp_header();
global $xoopsTheme;


echo '<h4>' .  _AM_ATTENTE . '</h4>';
      
$sql = "SELECT email,ville FROM ".$xoopsDB->prefix("cv")." where valider= 0 ";
		$result=$xoopsDB->queryF($sql);
		

//on compte combien durésultats y 'en a 
$combien = $xoopsDB->getRowsNum($result);
if ($combien>=1){

print "<b><p>".$combien." "._AM_ATTENTE."</p></b> ";

if ($combien>=1){

$sql = "SELECT id,login,formation,pays FROM ".$xoopsDB->prefix("cv")." where valider= 0 ORDER BY id Desc ";
		$req=$xoopsDB->queryF($sql);
		
;

print "<table> <tr class=\"even\">
	<td>"._AM_LOGIN." </td>
    <td>". _AM_DOMAINE."</td>
	<td colspan=\"5\">"._AM_ACTION."</td>
  </tr>";

while($result = $xoopsDB->fetchArray($req))
{ 
     
  print  "<tr class=\"itemFoot\"><td> $result[login] </td><td> $result[formation] </td><td> <a href=\"consulter.php?id=$result[id]\">"._AM_CONSULTE."</a> </td><td> <a href=\"../modifie.php?login=$result[login]\">"._AM_EDITER."</a> </td><td> <a href=\"valider.php?id=$result[id]\">"._AM_APPROUVER."</a> </td><td> <a href=\"desap.php?id=$result[id]\">"._AM_DESAPPROUVER."</a> </td><td> <a href=\"effacer.php?id=$result[id]\">"._AM_SUPPRIMER."</a> </td></tr>";
}
print "</table><br><br>";
}
}
else{print "0 "._AM_ATTENTE;}


xoops_cp_footer();
?>
