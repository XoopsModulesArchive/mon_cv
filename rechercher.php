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
$xoopsOption['template_main'] = 'mon_cv_rechercher.html';
global $xoopsTheme;
include_once "include/functions.php";

 // title de la page

$xoopsTpl->assign('xoops_pagetitle',  _MD_RECHERCHE.' '.$result[pays].' '.$result[ville].' '.$result[formation]);

$xoTheme->addMeta( 'meta', 'keywords', _MD_RECHERCHE);

$xoTheme->addMeta( 'meta', 'description', _MD_RECHERCHE);



if (isset($_GET['start']) ) {
	$start = intval($_GET['start']);
} else {
	$start = 0;



$sexe= $_POST["sexe"];
$formation=$_POST["formation"];
$niveau=$_POST["niveau"];
$experience=$_POST["experience"];
$ville=$_POST["ville"];
$pays=$_POST["pays"];


//  teste si il est vide, donc n'imprt != si non on cherche dans la table
session_start();
//  teste sexe
if($_POST["sexe"]==_MD_QUELCONQUE){
$sexe ='sexe!=""';
}
else{
$sexe="sexe='$sexe'";}

//  teste formation
if($_POST["formation"]==_MD_QUELCONQUE){
$formation='formation!=""';
}
else{
$formation="formation='$formation'";}

//  teste niveau
if($_POST["niveau"]==_MD_QUELCONQUE){
$niveau='niveau!=""';
}
else{
$niveau="niveau='$niveau'";}

//  teste experience
if($experience ==_MD_QUELCONQUE){
$experience='experience!=""';
}
else{$resultat = split(" ",$experience); 
$poids= $resultat[0];
$experience="poids>=$poids";
}

//  teste ville
if($_POST["ville"]==_MD_QUELCONQUE){
$ville='ville!=""';
}
else{
$ville="ville='$ville'";}

//  teste pays
if($_POST["pays"]==_MD_QUELCONQUE){
$pays='pays!=""';
}
else{
$pays="pays='$pays'";}


session_start();
$_SESSION['niveau']= $niveau ;
$_SESSION['formation'] = $formation ;
$_SESSION['sexe'] = $sexe ;
$_SESSION['ville'] = $ville ;
$_SESSION['pays'] = $pays ;
$_SESSION['experience'] = $experience ;

}


session_start();
$sql = "SELECT id,sexe,niveau,formation,experience,actuellement,ville,pays FROM ".$xoopsDB->prefix("cv")." where valider= 1 and $_SESSION[sexe] and $_SESSION[formation] and $_SESSION[niveau] and $_SESSION[experience] and $_SESSION[ville] and $_SESSION[pays] ";
		$result=$xoopsDB->queryF($sql);
		

//on compte combien durésultats y 'en a 
$combien = $xoopsDB->getRowsNum($result);
///////////////////////////////////


$xoopsTpl->assign('combien', $combien);
$xoopsTpl->assign('ENREGISTERS', _MD_ENREGISTERS);
$xoopsTpl->assign('TITRE', _MD_TITRE);
$xoopsTpl->assign('DOMAINE', _MD_DOMAINE);
$xoopsTpl->assign('NIVEAU', _MD_NIVEAU);
$xoopsTpl->assign('EXPERIENCE', _MD_EXPERIENCE);
$xoopsTpl->assign('VILLE', _MD_VILLE);
$xoopsTpl->assign('PAYS', _MD_PAYS);
$xoopsTpl->assign('CONSULTE', _MD_CONSULTE);


session_start();
$sql = "SELECT id,sexe,niveau,formation,experience,actuellement,ville,pays FROM ".$xoopsDB->prefix("cv")." where valider= 1 and $_SESSION[sexe] and $_SESSION[formation] and $_SESSION[niveau] and $_SESSION[experience] and $_SESSION[ville] and $_SESSION[pays] ORDER BY poids Desc LIMIT $start, ".$xoopsModuleConfig['nb_afficher_rechercher'];
		$req=$xoopsDB->queryF($sql);
while($result = $xoopsDB->fetchArray($req))
{ 
$message = array();
    $message['id'] = $result['id'];
    $message['formation'] = $result['formation'];
    $message['titre'] = $result['sexe'];
    $message['niveau'] = $result['niveau'];
    $message['experience'] = $result['experience'];
    $message['ville'] = $result['ville'];
    $message['pays'] = $result['pays'];
  $xoopsTpl->append('posts', $message);
}

include_once XOOPS_ROOT_PATH.'/class/pagenav.php';
$pagenav=new XoopsPageNav($combien, $xoopsModuleConfig['nb_afficher_rechercher'], $start, 'start', "");
$xoopsTpl->assign('PAGENAV', $pagenav->renderNav());
    
display_smart();
include (XOOPS_ROOT_PATH."/footer.php");
?>
