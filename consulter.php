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
$xoopsOption['template_main'] = 'mon_cv_consulter.html';
global $xoopsTheme;
require_once("include/functions.php"); 


// bloc de traitement
         				
				
		 //on affiche les données de l id
		 $sql = "SELECT photo,nom,prenom,jour,mois,annee,lieu,nationalite,situation,cp,ville,pays,gsm,email,sexe,niveau,formation,spec,per1,des1,per2,des2,per3,des3,per4,des4,per5,des5,per6,des6,peri1,desc1,peri2,desc2,peri3,desc3,peri4,desc4,peri5,desc5,peri6,desc6,peri7,desc7,peri8,desc8,peri9,desc9,peri10,desc10,experience,poids,actuellement,permet,langue1,langue2,langue3,langue4,langue5,langue6,option1,option2,option3,option4,option5,option6,comp1,descr1,comp2,descr2,loisir1,loisir2,loisir3 FROM ".$xoopsDB->prefix("cv")." where id=$_GET[id] ";
		$req=$xoopsDB->queryF($sql);
		
		$result = $xoopsDB->fetchArray($req);
		
//title


$xoopsTpl->assign('xoops_pagetitle',   _MD_CONSULTERCV);

$xoTheme->addMeta( 'meta', 'keywords', _MD_CONSULTERCV.' ,'." ".$result[des1]." ".$result[des2]." ".$result[des3]);

$xoTheme->addMeta( 'meta', 'description', _MD_CONSULTERCV.' ,'." ".$result[desc1].", ".$result[desc2].", ".$result[desc3]);		 		
				
				
				
				
				
				
				
		//on affiche les données de clien	
include_once "include/var.php";		  



print"<div align=\"right\"><a href=\"print.php?id=$_GET[id]\"><img src=\"".$XOOPS_URL."/modules/mon_cv/images/print.png\"> "._MD_PRINT."</a></div>";

display_smart();


include (XOOPS_ROOT_PATH."/footer.php");
?>

