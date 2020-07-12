<?php
// ------------------------------------------------------------------------- //
//                           Mon_Cv for Xoops                                //
//                              Version:  2.13                               //
// ------------------------------------------------------------------------- //
// Author: Moussa Lhoussaine (alias smart)                                   //
// email:  admin@smart-http.com                                              //
// URLs: http://www.smart-http.com                                           //
//---------------------------------------------------------------------------//
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//---------------------------------------------------------------------------//

include ("../../mainfile.php");
include XOOPS_ROOT_PATH.'/header.php';
$xoopsOption['template_main'] = 'mon_cv_index.html';
global $xoopsTheme;
include_once "include/functions.php";


if (isset($_GET['start']) ) {
	$start = intval($_GET['start']);
} else {
	$start = 0;
}

  // title de la page
  
  
$xoopsTpl->assign('xoops_pagetitle',   _MD_CREERCV);

$xoTheme->addMeta( 'meta', 'keywords', _MD_INSCRIVEZ);

$xoTheme->addMeta( 'meta', 'description', _MD_INSCRIVEZ);


$xoopsTpl->assign('VOTRE', _MD_VOTRE);
$xoopsTpl->assign('INSCRIVEZ', _MD_INSCRIVEZ);
$xoopsTpl->assign('MODIFIEZ', _MD_MODIFIEZ);
$xoopsTpl->assign('RECHERCHEZ', _MD_RECHERCHEZ);
$xoopsTpl->assign('CREERCV', _MD_CREERCV);
$xoopsTpl->assign('MODIFIERCV', _MD_MODIFIERCV);
$xoopsTpl->assign('CONSULTERCV', _MD_CONSULTERCV);


//on compte combien du Enregistrements en attente
if ($xoopsUserIsAdmin == 1){

$sql = "SELECT email,ville FROM ".$xoopsDB->prefix("cv")." where valider= 0 ";
		$result=$xoopsDB->queryF($sql);
		
//on affiche combien du résultats y 'en a en attente
$combiena = $xoopsDB->getRowsNum($result);
$xoopsTpl->assign('combiena', $combiena);
$xoopsTpl->assign('ATTENTE', _MD_ATTENTE);
 
}

//on compte combien du Enregistrements
$req2="select id from ".$xoopsDB->prefix("cv")." where valider= 1";
$result=$xoopsDB->queryF($req2);



				
//on affiche combien du résultats y 'en a 
$combien = $xoopsDB->getRowsNum($result);
$xoopsTpl->assign('combiene', $combien);
$xoopsTpl->assign('ENREGISTERS', _MD_ENREGISTERS);




if ($combien>=1){
$sta = $start-2;
 $sql = "SELECT id,niveau,formation,ville,pays FROM ".$xoopsDB->prefix("cv")." where valider= 1 ORDER BY id DESC LIMIT $start, ".$xoopsModuleConfig['nb_afficher_index'];
		$req=$xoopsDB->queryF($sql);
		

$xoopsTpl->assign('NOUVEAU', _MD_NOUVEAU);
$xoopsTpl->assign('DOMAINE', _MD_DOMAINE);
$xoopsTpl->assign('NIVEAU', _MD_NIVEAU);
$xoopsTpl->assign('VILLE', _MD_VILLE);
$xoopsTpl->assign('PAYS', _MD_PAYS);
$xoopsTpl->assign('CONSULTE', _MD_CONSULTE);
	

while($result = $xoopsDB->fetchArray($req))
{ 
$message = array();
    $message['id'] = $result['id'];
    $message['formation'] = $result['formation'];
    $message['niveau'] = $result['niveau'];
    $message['ville'] = $result['ville'];
    $message['pays'] = $result['pays'];
  $xoopsTpl->append('posts', $message);
}

}

include_once XOOPS_ROOT_PATH.'/class/pagenav.php';
$pagenav=new XoopsPageNav($combien, $xoopsModuleConfig['nb_afficher_index'], $start, 'start', "");
$xoopsTpl->assign('PAGENAV', $pagenav->renderNav());
    

display_smart();
include (XOOPS_ROOT_PATH."/footer.php");
?>

