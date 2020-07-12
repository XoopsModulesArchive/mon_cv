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


foreach ( $_POST as $k => $v ) { ${$k} = $v; }
foreach ($_GET as $k => $v) {${$k} = $v;}

// fonction qui recupere l'extension du fichier
function getExtension($filename){
  $ext = substr(strtolower(strrchr(basename($filename), ".")), 1);
  return $ext;} 

$time = time(); 
$size = $_FILES['webfile']['size'];
$type = getExtension($_FILES['webfile']['name']);

// Entrez ici le repertoire de destination
$ma_destination = XOOPS_ROOT_PATH ."/modules/mon_cv/images/".$time.$login.".".$type;
$extensions=array('jpg','jpeg','gif','png','bmp','',);
if (!empty($_FILES['webfile']['name'])){
$photo = $time.$login.".".$type;}
else{$photo =$_POST["photoa"];}

$point = strpos($email,"."); 
$aroba = strpos($email,"@"); 


if( empty($nationalite) || empty($ville) || empty($pays) || empty($cp) || empty($email) || empty($spec) )
   {echo("<center><br><br><br><strong>"._MD_REMPLIR."<br><br><a href='javascript:history.back(1)'>< "._MD_RETOUR."</a></strong></center>");}

elseif($point=='' || $aroba=='')
{echo("<center><br><br><br><strong>"._MD_VEREMAIL."<br><br><a href='javascript:history.back(1)'>< "._MD_RETOUR."</a></strong></center>");}

elseif($size ==0 && $_FILES['webfile']['name']!="")
{echo("<center><br><br><br><strong>"._MD_VERIMAGE."<br><br><a href='javascript:history.back(1)'>< "._MD_RETOUR."</a></strong></center>");}

else{

// est ce que l'extension est valide ?
  if(!in_array(getExtension($_FILES['webfile']['name']),$extensions)) {
    print "<center><br><br><br><strong>"._MD_FORMAT."<br><br><a href='javascript:history.back(1)'>< "._MD_RETOUR."</a></strong></center>";}

else{

$experience=$_POST["experience"];
//on affecte au poids les valeurs de 0 à 5 pour pouvoir choisir dans la recherche x et plus, 2ans et plus.
$resultat = split(" ",$experience); 
if($resultat[0]=="<") {$poids="0";}
else{
$poids= $resultat[0];}

if ($option1== _MD_SELECT ){
$option1="";}

if ($option2== _MD_SELECT){
$option2="";}

if ($option3== _MD_SELECT){
$option3="";}

if ($option4== _MD_SELECT){
$option4="";}

if ($option5== _MD_SELECT){
$option5="";}

if ($option6== _MD_SELECT){
$option6="";}




	// bloc de traitement
	
	    
			// on envois la photo 
        move_uploaded_file( $_FILES['webfile']['tmp_name'] , $ma_destination );
         
		//on vérifie si le login n 'existe déja ou si la person n'est déjà inscrite
		
		$sql = "SELECT login FROM ".$xoopsDB->prefix("cv")." where login='$login'";
		$result=$xoopsDB->queryF($sql);
		$login_existe = mysql_numrows($result);
		
		//si oui mise à jour
        if ($login_existe!="0" ){ 
		
		$sql = "Update ".$xoopsDB->prefix("cv")." Set  photo = '$photo' , nom = '$nom' , prenom = '$prenom' , jour='$jour',mois='$mois', annee='$annee', lieu='$lieu' , nationalite='$nationalite' , situation='$situation' , cp='$cp' , ville='$ville' , pays='$pays' , gsm='$gsm' , email='$email' , sexe='$sexe' , niveau='$niveau' , formation='$formation' , spec='$spec' , per1='$per1' , des1='$des1'  , per2='$per2' , des2='$des2' , per3='$per3' , des3='$des3' , per4='$per4' , des4='$des4' , per5='$per5' , des5='$des5' , per6='$per6' , des6='$des6' , peri1='$peri1' , desc1='$desc1' , peri2='$peri2' , desc2='$desc2' , peri3='$peri3' , desc3='$desc3' , peri4='$peri4' , desc4='$desc4' , peri5='$peri5' , desc5='$desc5' , peri6='$peri6' , desc6='$desc6', peri7='$peri7' , desc7='$desc7', peri8='$peri8' , desc8='$desc8', peri9='$peri9' , desc9='$desc9', peri10='$peri10' , desc10='$desc10' , experience='$experience' , poids='$poids' , actuellement='$actuellement' , permet='$permet', langue1='$langue1' , langue2='$langue2' , langue3='$langue3' , langue4='$langue4' , langue5='$langue5' , langue6='$langue6' , option1='$option1' , option2='$option2' , option3='$option3' , option4='$option4' , option5='$option5' , option6='$option6' , comp1='$comp1' , descr1='$descr1' , comp2='$comp2' , descr2='$descr2' , loisir1='$loisir1' , loisir2='$loisir2' , 
		loisir3='$loisir3' 
		  where login='$login' " ;

if(!$result=$xoopsDB->queryF($sql)) {print 'oui';};		
} 
				
				
		 //si non on insire les données dans new id
		else{ 
		
		$sql = "INSERT INTO ".$xoopsDB->prefix("cv")." (login,photo,nom,prenom,jour,mois,annee,lieu,nationalite,situation,cp,ville,pays,gsm,email,sexe,niveau,formation,spec,per1,des1,per2,des2,per3,des3,per4,des4,per5,des5,per6,des6,peri1,desc1,peri2,desc2,peri3,desc3,peri4,desc4,peri5,desc5,peri6,desc6,peri7,desc7,peri8,desc8,peri9,desc9,peri10,desc10,experience,poids,actuellement,permet,langue1,langue2,langue3,langue4,langue5,langue6,option1,option2,option3,option4,option5,option6,comp1,descr1,comp2,descr2,loisir1,loisir2,loisir3)  		VALUES ('$login','$photo','$nom','$prenom','$jour','$mois','$annee','$lieu','$nationalite','$situation','$cp',
'$ville','$pays','$gsm','$email','$sexe','$niveau','$formation','$spec','$per1','$des1','$per2','$des2','$per3','$des3','$per4','$des4','$per5','$des5','$per6','$des6','$peri1','$desc1','$peri2','$desc2','$peri3','$desc3','$peri4','$desc4','$peri5','$desc5','$peri6','$desc6','$peri7','$desc7','$peri8','$desc8','$peri9','$desc9','$peri10','$desc10','$experience','$poids','$actuellement','$permet','$langue1','$langue2','$langue3','$langue4','$langue5','$langue6','$option1','$option2','$option3','$option4','$option5','$option6','$comp1','$descr1','$comp2','$descr2','$loisir1','$loisir2','$loisir3') ";
if(!$result=$xoopsDB->queryF($sql)) {print 'oui';};
}

$sql = "SELECT id FROM ".$xoopsDB->prefix("cv")." where login='$login' ";
		$req=$xoopsDB->queryF($sql);
$result = $xoopsDB->fetchArray($req);

echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= consulter.php?id=$result[id]'>";


}
}

include (XOOPS_ROOT_PATH."/footer.php");
 
?>
