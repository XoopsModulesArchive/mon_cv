<?php

$xoopsTpl->assign('ETAT', _MD_ETAT);
$xoopsTpl->assign('PHOTO', _MD_PHOTO);
$xoopsTpl->assign('NOM', _MD_NOM);
$xoopsTpl->assign('PRENOM', _MD_PRENOM);
$xoopsTpl->assign('TITRE', _MD_TITRE);
$xoopsTpl->assign('DATE', _MD_DATE);
$xoopsTpl->assign('LIEU', _MD_LIEU);
$xoopsTpl->assign('NATIONALITE', _MD_NATIONALITE);
$xoopsTpl->assign('SITUATION', _MD_SITUATION);
$xoopsTpl->assign('COORDONNEES', _MD_COORDONNEES);
$xoopsTpl->assign('VILLE', _MD_VILLE);
$xoopsTpl->assign('PAYS', _MD_PAYS);
$xoopsTpl->assign('CP', _MD_CP);
$xoopsTpl->assign('EMAIL',_MD_EMAIL);
$xoopsTpl->assign('GSM', _MD_GSM);
$xoopsTpl->assign('FORMATIONS', _MD_FORMATIONS);
$xoopsTpl->assign('DOMAINE', _MD_DOMAINE);
$xoopsTpl->assign('SPECIALITE', _MD_SPECIALITE);
$xoopsTpl->assign('NIVEAU', _MD_NIVEAU);
$xoopsTpl->assign('QUALIFIE', _MD_QUALIFIE);
$xoopsTpl->assign('PERIODE', _MD_PERIODE);
$xoopsTpl->assign('DESCRIPTION', _MD_DESCRIPTION);
$xoopsTpl->assign('EXPERIENCES', _MD_EXPERIENCES);
$xoopsTpl->assign('EXPERIENCE', _MD_EXPERIENCE);
$xoopsTpl->assign('PERIODE', _MD_PERIODE);
$xoopsTpl->assign('ACTUELLEMENT', _MD_ACTUELLEMENT);
$xoopsTpl->assign('PERMIS', _MD_PERMIS);
$xoopsTpl->assign('LANGUES', _MD_LANGUES);
$xoopsTpl->assign('COMPETENCES', _MD_COMPETENCES);
$xoopsTpl->assign('INFORMATIQUE', _MD_INFORMATIQUE);
$xoopsTpl->assign('AUTRES', _MD_AUTRES);
$xoopsTpl->assign('LOISIRS', _MD_LOISIRS);


$xoopsTpl->assign('RPHOTO', $result[photo]);
$xoopsTpl->assign('RNOM', $result[nom]);
$xoopsTpl->assign('RPRENOM', $result[prenom]);
$xoopsTpl->assign('RTITRE', $result[sexe]);


$xoopsTpl->assign('RJOUR', $result[jour]);
$xoopsTpl->assign('RMOIS', $result[mois]);
$xoopsTpl->assign('RANNEE', $result[annee]);
$xoopsTpl->assign('RLIEU', $result[lieu]);
$xoopsTpl->assign('RNATIONALITE', $result[nationalite]);
$xoopsTpl->assign('RSITUATION', $result[situation]);

$xoopsTpl->assign('RVILLE', $result[ville]);
$xoopsTpl->assign('RPAYS', $result[pays]);
$adresse = str_replace(" ","&nbsp;",$result[cp]) ;
$xoopsTpl->assign('RCP', $adresse);
$xoopsTpl->assign('REMAIL',$result[email]);
$gsm = str_replace(" ","&nbsp;",$result[gsm]) ;
$xoopsTpl->assign('RGSM', $gsm);

$xoopsTpl->assign('RFORMATION', $result[formation]);

$spec = str_replace(" ","&nbsp;",$result[spec]) ; 
$xoopsTpl->assign('RSPECIALITE', $spec);


$xoopsTpl->assign('RNIVEAU', $result[niveau]);

$per1 = str_replace(" ","&nbsp;",$result[per1]) ;      
$xoopsTpl->assign('RPER1', $per1);
$per2 = str_replace(" ","&nbsp;",$result[per2]) ; 
$xoopsTpl->assign('RPER2', $per2);
$per3 = str_replace(" ","&nbsp;",$result[per3]) ; 
$xoopsTpl->assign('RPER3', $per3);
$per4 = str_replace(" ","&nbsp;",$result[per4]) ; 
$xoopsTpl->assign('RPER4', $per4);
$per5 = str_replace(" ","&nbsp;",$result[per5]) ; 
$xoopsTpl->assign('RPER5', $per5);
$per6 = str_replace(" ","&nbsp;",$result[per6]) ; 
$xoopsTpl->assign('RPER6', $per6);


$des1 = str_replace(" ","&nbsp;",$result[des1]) ;    
$xoopsTpl->assign('RDES1', $des1);
$des2 = str_replace(" ","&nbsp;",$result[des2]) ;    
$xoopsTpl->assign('RDES2', $des2);
$des3 = str_replace(" ","&nbsp;",$result[des3]) ;    
$xoopsTpl->assign('RDES3', $des3);
$des4 = str_replace(" ","&nbsp;",$result[des4]) ;    
$xoopsTpl->assign('RDES4', $des4);
$des5 = str_replace(" ","&nbsp;",$result[des5]) ;    
$xoopsTpl->assign('RDES5', $des5);
$des6 = str_replace(" ","&nbsp;",$result[des6]) ;    
$xoopsTpl->assign('RDES6', $des6);


$peri1 = str_replace(" ","&nbsp;",$result[peri1]) ;      
$xoopsTpl->assign('RPERI1', $peri1);
$peri2 = str_replace(" ","&nbsp;",$result[peri2]) ; 
$xoopsTpl->assign('RPERI2', $peri2);
$peri3 = str_replace(" ","&nbsp;",$result[peri3]) ; 
$xoopsTpl->assign('RPERI3', $peri3);
$peri4 = str_replace(" ","&nbsp;",$result[peri4]) ; 
$xoopsTpl->assign('RPERI4', $peri4);
$peri5 = str_replace(" ","&nbsp;",$result[peri5]) ; 
$xoopsTpl->assign('RPERI5', $peri5);
$peri6 = str_replace(" ","&nbsp;",$result[peri6]) ; 
$xoopsTpl->assign('RPERI6', $peri6);
$peri7 = str_replace(" ","&nbsp;",$result[peri7]) ; 
$xoopsTpl->assign('RPERI7', $peri7);
$peri8 = str_replace(" ","&nbsp;",$result[peri8]) ; 
$xoopsTpl->assign('RPERI8', $peri8);
$peri9 = str_replace(" ","&nbsp;",$result[peri9]) ; 
$xoopsTpl->assign('RPERI9', $peri9);
$peri10 = str_replace(" ","&nbsp;",$result[peri10]) ; 
$xoopsTpl->assign('RPERI10', $peri10);

$desc1 = str_replace(" ","&nbsp;",$result[desc1]) ;    
$xoopsTpl->assign('RDESC1', $desc1);
$desc2 = str_replace(" ","&nbsp;",$result[desc2]) ;    
$xoopsTpl->assign('RDESC2', $desc2);
$desc3 = str_replace(" ","&nbsp;",$result[desc3]) ;    
$xoopsTpl->assign('RDESC3', $desc3);
$desc4 = str_replace(" ","&nbsp;",$result[desc4]) ;    
$xoopsTpl->assign('RDESC4', $desc4);
$desc5 = str_replace(" ","&nbsp;",$result[desc5]) ;    
$xoopsTpl->assign('RDESC5', $desc5);
$desc6 = str_replace(" ","&nbsp;",$result[desc6]) ;    
$xoopsTpl->assign('RDESC6', $desc6);
$desc7 = str_replace(" ","&nbsp;",$result[desc7]) ;    
$xoopsTpl->assign('RDESC7', $desc7);
$desc8 = str_replace(" ","&nbsp;",$result[desc8]) ;    
$xoopsTpl->assign('RDESC8', $desc8);
$desc9 = str_replace(" ","&nbsp;",$result[desc9]) ;    
$xoopsTpl->assign('RDESC9', $desc9);
$desc10 = str_replace(" ","&nbsp;",$result[desc10]) ;    
$xoopsTpl->assign('RDESC10', $desc10);

$xoopsTpl->assign('REXPERIENCE', $result[experience]);
$xoopsTpl->assign('RACTUELLEMENT', $result[actuellement]);

$xoopsTpl->assign('RPERMIS', $result[permet]);

$xoopsTpl->assign('RLANGUE1', $result[langue1]);
$xoopsTpl->assign('RLANGUE2', $result[langue2]);
$xoopsTpl->assign('RLANGUE3', $result[langue3]);
$xoopsTpl->assign('RLANGUE4', $result[langue4]);
$xoopsTpl->assign('RLANGUE5', $result[langue5]);
$xoopsTpl->assign('RLANGUE6', $result[langue6]);
$xoopsTpl->assign('ROPTION1', $result[option1]);
$xoopsTpl->assign('ROPTION2', $result[option2]);
$xoopsTpl->assign('ROPTION3', $result[option3]);
$xoopsTpl->assign('ROPTION4', $result[option4]);
$xoopsTpl->assign('ROPTION5', $result[option5]);
$xoopsTpl->assign('ROPTION6', $result[option6]);

$xoopsTpl->assign('RCOMP1', $result[comp1]);
$xoopsTpl->assign('RCOMP2', $result[comp2]);

$xoopsTpl->assign('RDESCR1', $result[descr1]);
$xoopsTpl->assign('RDESCR2', $result[descr2]);

$xoopsTpl->assign('RLOISIR1', $result[loisir1]);
$xoopsTpl->assign('RLOISIR2', $result[loisir2]);
$xoopsTpl->assign('RLOISIR3', $result[loisir3]);   


?>