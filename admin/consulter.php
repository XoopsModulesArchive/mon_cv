<?php

 include_once '../../../include/cp_header.php';
 include (XOOPS_ROOT_PATH."/header.php");
xoops_cp_header();
?>
 
 
<html>
<head>
<LINK href="../style.css" type=text/css rel=stylesheet>
</head>
<body>

<?php

// bloc de traitement
         				
				
		 //on affiche les données de l id
		 $sql = "SELECT id,login,photo,nom,prenom,jour,mois,annee,lieu,nationalite,situation,cp,ville,pays,gsm,email,sexe,niveau,formation,spec,per1,des1,per2,des2,per3,des3,per4,des4,per5,des5,per6,des6,peri1,desc1,peri2,desc2,peri3,desc3,peri4,desc4,peri5,desc5,peri6,desc6,peri7,desc7,peri8,desc8,peri9,desc9,peri10,desc10,experience,poids,actuellement,permet,langue1,langue2,langue3,langue4,langue5,langue6,option1,option2,option3,option4,option5,option6,comp1,descr1,comp2,descr2,loisir1,loisir2,loisir3 FROM ".$xoopsDB->prefix("cv")." where id=$_GET[id] ";
		$req=$xoopsDB->queryF($sql);
		
		$result = $xoopsDB->fetchArray($req);
		
			
				
				
				
				
				
				
		//on affiche les données de clien	
		
		
					?>
<table width="80%"  align="center" border="0"><tr class="head"><td><?  print  "<a href=\"../modifie.php?login=$result[login]\">"._AM_EDITER."</a> </td><td> <a href=\"valider.php?id=$result[id]\">"._AM_APPROUVER."</a> </td><td> <a href=\"desap.php?id=$result[id]\">"._AM_DESAPPROUVER."</a> </td><td> <a href=\"effacer.php?id=$result[id]\">"._AM_SUPPRIMER."</a> </td></tr>"; ?>

</table>
<br>
<table width="80%"  align="center" border="0" >
<tr ><td  ><?php if($result[photo]!=""){ print  "<img src=\"".$XOOPS_URL."/modules/mon_cv/images/".$result[photo]."\">"; } ?></td><td>
  <p >Curriculum Vitae</p>
   
  <table border="0" width="435">
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
<TR><td colspan="2" class="head"><?php print _AM_ETAT; ?></td></TR>
<tr height="5"><td></td><td></td></tr>
<tr><td >  <?php print _AM_TITRE; ?> </td><td > <?php print $result[sexe] ?></td></tr>
<tr><td > <?php print _AM_NOM; ?></td><td> <?php print $result[nom] ?></td></tr>
<tr><td  > <?php print _AM_PRENOM; ?></td><td> <?php print $result[prenom] ?></td></tr>
<tr><td > <?php print _AM_DATE; ?></td><td> <?php print $result[jour] ."-". $result[mois] ."-". $result[annee] ?></td></tr>
<tr><td > <?php print _AM_LIEU; ?></td><td> <?php print $result[lieu]  ?></td></tr>
<tr><td > <?php print _AM_NATIONALITE; ?></td><td> <?php print $result[nationalite] ?></td></tr>
<tr><td > <?php print _AM_SITUATION; ?></td><td> <?php print $result[situation] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="head"><?php print _AM_FORMATIONS; ?></td></TR>
<tr height="5"><td></td><td></td></tr>
<tr><td > <?php print _AM_DOMAINE; ?></td><td> <?php print $result[formation] ?></td></tr>
<tr><td > <?php print _AM_SPECIALITE; ?></td><td> <?php print $result[spec] ?></td></tr>
<tr><td > <?php print _AM_NIVEAU; ?></td><td> <?php print $result[niveau] ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="odd"> <?php print _AM_PERIODE; ?></td><td class="odd"><?php print _AM_DESCRIPTION; ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td > <?php print $result[per1] ?></td><td><?php print $result[des1] ?></td></tr>
<tr><td > <?php print $result[per2] ?></td><td><?php print $result[des2] ?></td></tr>
<tr><td > <?php print $result[per3] ?></td><td><?php print $result[des3] ?></td></tr>
<tr><td > <?php print $result[per4] ?></td><td><?php print $result[des4] ?></td></tr>
<tr><td > <?php print $result[per5] ?></td><td><?php print $result[des5] ?></td></tr>
<tr><td > <?php print $result[per6] ?></td><td><?php print $result[des6] ?></td></tr>
<tr height="8"><td></td><td></td></tr>

<tr><td colspan="2" class="head"><?php print _AM_EXPERIENCES; ?>  </td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td class="odd"> <?php print _AM_PERIODE; ?></td><td class="odd"><?php print _AM_DESCRIPTION; ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td > <?php print $result[peri1] ?></td><td><?php print $result[desc1] ?></td></tr>
<tr><td > <?php print $result[peri2] ?></td><td><?php print $result[desc2] ?></td></tr>
<tr><td > <?php print $result[peri3] ?></td><td><?php print $result[desc3] ?></td></tr>
<tr><td > <?php print $result[peri4] ?></td><td><?php print $result[desc4] ?></td></tr>
<tr><td > <?php print $result[peri5] ?></td><td><?php print $result[desc5] ?></td></tr>
<tr><td > <?php print $result[peri6] ?></td><td><?php print $result[desc6] ?></td></tr>
<tr><td > <?php print $result[peri7] ?></td><td><?php print $result[desc7] ?></td></tr>
<tr><td > <?php print $result[peri8] ?></td><td><?php print $result[desc8] ?></td></tr>
<tr><td > <?php print $result[peri9] ?></td><td><?php print $result[desc9] ?></td></tr>
<tr><td > <?php print $result[peri10] ?></td><td><?php print $result[desc10] ?></td></tr>
<tr><td > <?php print _AM_EXPERIENCE; ?></td><td> <?php print $result[experience] ?></td></tr>
<tr><td > <?php print _AM_ACTUELLEMENT; ?></td><td> <?php print $result[actuellement] ?></td></tr>
<tr><td > <?php print _AM_PERMIS; ?></td><td> <?php print $result[permet] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="head"><?php print _AM_LANGUES; ?> </td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td ><?php print $result[langue1] ?> </td><td><?php print $result[option1] ?></td></tr>
<tr><td ><?php print $result[langue2] ?> </td><td><?php print $result[option2] ?></td></tr>
<tr><td ><?php print $result[langue3] ?> </td><td><?php print $result[option3] ?></td></tr>
<tr><td ><?php print $result[langue4] ?> </td><td><?php print $result[option4] ?></td></tr>
<tr><td ><?php print $result[langue5] ?> </td><td><?php print $result[option5] ?></td></tr>
<tr><td ><?php print $result[langue6] ?> </td><td><?php print $result[option6] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="head"><?php print _AM_COMPETENCES; ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td > <?php print $result[comp1] ?></td><td><?php print $result[descr1] ?></td></tr>
<tr><td > <?php print $result[comp2] ?></td><td><?php print $result[descr2] ?></td></tr>
<tr height="8"><td></td><td></td></tr>
<tr><td colspan="2" class="head"><?php print _AM_LOISIRS; ?></td></tr>
<tr height="5"><td></td><td></td></tr>
<tr><td ><?php print $result[loisir1] ?> </td><td></td></tr>
<tr><td ><?php print $result[loisir2] ?> </td><td></td></tr>
<tr><td ><?php print $result[loisir3] ?> </td><td></td></tr>
</table>
<br><br>


<table width="80%"  align="center" border="0"><tr class="head"><td><?  print  "<a href=\"../modifie.php?login=$result[login]\">"._AM_EDITER."</a> </td><td> <a href=\"valider.php?id=$result[id]\">"._AM_APPROUVER."</a> </td><td> <a href=\"desap.php?id=$result[id]\">"._AM_DESAPPROUVER."</a> </td><td> <a href=\"effacer.php?id=$result[id]\">"._AM_SUPPRIMER."</a> </td></tr>"; ?>

</table>

</html>
<?php
xoops_cp_footer();
?>

