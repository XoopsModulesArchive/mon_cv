<?php
include_once '../../../include/cp_header.php';
xoops_cp_header();


include ("../../mainfile.php");
include XOOPS_ROOT_PATH.'/header.php';

						
				
		$sql = "Update ".$xoopsDB->prefix("cv")." Set valider='1' where id = $_GET[id] ";
		$result=$xoopsDB->queryF($sql);
		 
		$sql = "SELECT email FROM ".$xoopsDB->prefix("cv")." where id = $_GET[id] ";
		$req=$xoopsDB->queryF($sql);
		$result = $xoopsDB->fetchArray($req);

$from = 'From: '.$xoopsUser->getVar('email');		
$sujet = $xoopsModuleConfig['mon_cv_sujet']; //le sujet
$message = $xoopsModuleConfig['mon_cv_email']." ".XOOPS_URL.'/modules/mon_cv/consulter.php?id='.$_GET[id]; 
 

 
 mail($result[email],$sujet,$message,$from);
		 
echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= index.php'>";

xoops_cp_footer();
?>
