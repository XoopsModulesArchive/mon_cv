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
require_once("include/functions.php"); 
?>
 
 
<html>
<head>
<STYLE type="text/css">
		<!--

.comUserRankText {font-size: 10px;font-weight:bold;}
.Titletd { border-bottom: 1px solid #666666; font-weight: bold; padding-left: 5px; }
.affiche {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif;}

		-->
		</STYLE>
<script type="text/javascript">
		window.print() ;
	</script>
</head>
<body>

<?php

// bloc de traitement
         				
				
		 //on affiche les données de l id
		 $sql = "SELECT photo,nom,prenom,jour,mois,annee,lieu,nationalite,situation,cp,ville,pays,gsm,email,sexe,niveau,formation,spec,per1,des1,per2,des2,per3,des3,per4,des4,per5,des5,per6,des6,peri1,desc1,peri2,desc2,peri3,desc3,peri4,desc4,peri5,desc5,peri6,desc6,peri7,desc7,peri8,desc8,peri9,desc9,peri10,desc10,experience,poids,actuellement,permet,langue1,langue2,langue3,langue4,langue5,langue6,option1,option2,option3,option4,option5,option6,comp1,descr1,comp2,descr2,loisir1,loisir2,loisir3 FROM ".$xoopsDB->prefix("cv")." where id=$_GET[id] ";
		$req=$xoopsDB->queryF($sql);
		
		$result = $xoopsDB->fetchArray($req);
		
		 		
		//on affiche les données de clien	
					?>
<br>

<table width="620"  align="center" border="0">
<tr><td  ><?php if($result[photo]!=""){?>  <img src="../../modules/mon_cv/images/<?php print $result[photo]?>"><?php } ?></td>
<td >
 <h1 >Curriculum Vitae</h1>
 
  
  <table border="0" width="435" align="right">
      
	  <tr>
	  <td class="comUserRankText">   
	  
<p  ><?php print $result[cp] ?></p>
<p ><?php print $result[ville] ?></p>
<p  ><?php print $result[pays] ?></p>
                        </td>
                        <td class="comUserRankText">
<p >GSM: <?php print $result[gsm] ?></p>
<p >EMAIL: <?php print "<a href=\"mailto: $result[email]\">  $result[email] </a>" ?></p>
                                                       </td>
      </tr>
    </table>
	
	</td></tr> 
<tr height="15"><td></td><td></td></tr>
<TR><td colspan="2" class="Titletd"><?php print _MD_ETAT; ?></td></TR>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche">  <?php print _MD_TITRE; ?> </td><td class="affiche"> <?php print $result[sexe] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_NOM; ?></td><td class="affiche"> <?php print $result[nom] ?></td></tr>
<tr><td class="affiche" > <?php print _MD_PRENOM; ?></td><td class="affiche"> <?php print $result[prenom] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_DATE; ?></td><td class="affiche"> <?php print $result[jour] ."-". $result[mois] ."-". $result[annee] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_LIEU; ?></td><td class="affiche"> <?php print $result[lieu]  ?></td></tr>
<tr><td class="affiche"> <?php print _MD_NATIONALITE; ?></td><td class="affiche"> <?php print $result[nationalite] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_SITUATION; ?></td><td class="affiche"> <?php print $result[situation] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="Titletd"><?php print _MD_FORMATIONS; ?></td></TR>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print _MD_DOMAINE; ?></td><td> <?php print $result[formation] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_SPECIALITE; ?></td><td> <?php print $result[spec] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_NIVEAU; ?></td><td> <?php print $result[niveau] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="Title"> <?php print _MD_PERIODE; ?></td><td class="Title"><?php print _MD_DESCRIPTION; ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[per1] ?></td><td class="affiche"><?php print $result[des1] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[per2] ?></td><td class="affiche"><?php print $result[des2] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[per3] ?></td><td class="affiche"><?php print $result[des3] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[per4] ?></td><td class="affiche"><?php print $result[des4] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[per5] ?></td><td class="affiche"><?php print $result[des5] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[per6] ?></td><td class="affiche"><?php print $result[des6] ?></td></tr>
<tr height="8"><td></td><td></td></tr>

<tr><td colspan="2" class="Titletd"><?php print _MD_EXPERIENCES; ?>  </td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="Title"> <?php print _MD_PERIODE; ?></td><td class="Title"><?php print _MD_DESCRIPTION; ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri1] ?></td><td class="affiche"><?php print $result[desc1] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri2] ?></td><td class="affiche"><?php print $result[desc2] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri3] ?></td><td class="affiche"><?php print $result[desc3] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri4] ?></td><td class="affiche"><?php print $result[desc4] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri5] ?></td><td class="affiche"><?php print $result[desc5] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri6] ?></td><td class="affiche"><?php print $result[desc6] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri7] ?></td><td class="affiche"><?php print $result[desc7] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri8] ?></td><td class="affiche"><?php print $result[desc8] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri9] ?></td><td class="affiche"><?php print $result[desc9] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[peri10] ?></td><td class="affiche"><?php print $result[desc10] ?></td></tr>

<tr><td class="affiche"> <?php print _MD_EXPERIENCE; ?></td><td class="affiche"> <?php print $result[experience] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_ACTUELLEMENT; ?></td><td class="affiche"> <?php print $result[actuellement] ?></td></tr>
<tr><td class="affiche"> <?php print _MD_PERMIS; ?></td><td class="affiche"> <?php print $result[permet] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="Titletd"><?php print _MD_LANGUES; ?> </td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"><?php print $result[langue1] ?> </td><td class="affiche"><?php print $result[option1] ?></td></tr>
<tr><td class="affiche"><?php print $result[langue2] ?> </td><td class="affiche"><?php print $result[option2] ?></td></tr>
<tr><td class="affiche"><?php print $result[langue3] ?> </td><td class="affiche"><?php print $result[option3] ?></td></tr>
<tr><td class="affiche"><?php print $result[langue4] ?> </td><td class="affiche"><?php print $result[option4] ?></td></tr>
<tr><td class="affiche"><?php print $result[langue5] ?> </td><td class="affiche"><?php print $result[option5] ?></td></tr>
<tr><td class="affiche"><?php print $result[langue6] ?> </td><td class="affiche"><?php print $result[option6] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="Titletd"><?php print _MD_COMPETENCES; ?> </td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"> <?php print $result[comp1] ?></td><td class="affiche"><?php print $result[descr1] ?></td></tr>
<tr><td class="affiche"> <?php print $result[comp2] ?></td><td class="affiche"><?php print $result[descr2] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="Titletd"><?php print _MD_LOISIRS; ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="affiche"><?php print $result[loisir1] ?> </td><td></td></tr>
<tr><td class="affiche"><?php print $result[loisir2] ?> </td><td></td></tr>
<tr><td class="affiche"><?php print $result[loisir3] ?> </td><td></td></tr>
</table>
<br><br>
<?php

display_smart();

?>
</html>
<?php

?>

