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
include XOOPS_ROOT_PATH.'/header.php';
$xoopsOption['template_main'] = 'mon_cv_cv.html';
global $xoopsTheme;
include_once "include/functions.php";

// title de la page
  
$xoopsTpl->assign('xoops_pagetitle',   _MD_MODIFIERCV);

$xoTheme->addMeta( 'meta', 'keywords', _MD_MODIFIERCV);

$xoTheme->addMeta( 'meta', 'description', _MD_MODIFIEZ);




 if ($xoopsUser !='') {
if (isset($_GET[login]) && $xoopsUserIsAdmin == 1 ){$login = $_GET[login];}
else{
$login = $xoopsUser->getVar('uname');
}
	// bloc de traitement
         
		//on télecharge les données
		$sql = "SELECT sexe,photo,nom,prenom,jour,mois,annee,lieu,nationalite,situation,cp,ville,pays,gsm,email,niveau,formation,spec,per1,des1,per2,des2,per3,des3,per4,des4,per5,des5,per6,des6,peri1,desc1,peri2,desc2,peri3,desc3,peri4,desc4,peri5,desc5,peri6,desc6,peri7,desc7,peri8,desc8,peri9,desc9,peri10,desc10,experience,poids,actuellement,permet,langue1,langue2,langue3,langue4,langue5,langue6,option1,option2,option3,option4,option5,option6,comp1,descr1,comp2,descr2,loisir1,loisir2,loisir3 FROM ".$xoopsDB->prefix("cv")." where login='$login' ";
		$req=$xoopsDB->queryF($sql);
		
		$result = $xoopsDB->fetchArray($req);

				
		//on affiche les données de clien	
include_once "include/form.php";


}

else{
$xoopsTpl->assign('POUR', _MD_POUR);
$xoopsTpl->assign('VOUS', _MD_VOUS);
$xoopsTpl->assign('SI', _MD_SI);
$xoopsTpl->assign('ICI', _MD_ICI);
$xoopsTpl->assign('POURS', _MD_POURS);
}
 display_smart();
include (XOOPS_ROOT_PATH."/footer.php");
?>
