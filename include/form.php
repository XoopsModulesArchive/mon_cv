<?php
if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

if (file_exists(XOOPS_ROOT_PATH.'/language/'.$xoopsConfig['language'].'/calendar.php')) {
	include_once XOOPS_ROOT_PATH.'/language/'.$xoopsConfig['language'].'/calendar.php';
} else {
	include_once XOOPS_ROOT_PATH.'/language/english/calendar.php';
}

// Chargement du formloader
include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php"; 
// Création de l'objet formulaire
$my_form = new XoopsThemeForm(_MD_FORMULAIRE, 'myform', 'inserer.php');
$my_form->setExtra( " enctype='multipart/form-data'") ;

// Création des éléments de formulaire

$maxsize = $xoopsModuleConfig['max_imgsize']/1000;

$champ1 = new XoopsFormFile(_MD_PHOTO." Max ".$maxsize."Ko", "webfile", $xoopsModuleConfig['max_imgsize']);
$champ1->setExtra( "size ='20' ") ;


$champ104 = new xoopsFormHidden (login, $login); 
$champ105 = new xoopsFormHidden (photoa, $result[photo]); 
$champ2 = new XoopsFormText(_MD_NOM, "nom", 25, 100, $result[nom]);
$champ3 = new XoopsFormText(_MD_PRENOM, "prenom", 25, 100, $result[prenom]);

$champ4 = new XoopsFormSelect(_MD_TITRE, "sexe", $result[sexe]);
$champ4->addOption("Mr");
$champ4->addOption(_MD_MME);
$champ4->addOption(_MD_MLLE);


$champ22 = new XoopsFormSelect('', "jour", $result[jour]);
$champ22->addOption("", _MD_JOUR);
for ( $i = 1; $i<=31; $i++ ) {
$champ22->addOption($i, $i);
}

$champ23 = new XoopsFormSelect('', "mois", $result[mois]);
$champ23->addOption("", _MD_MOIS);
for ( $i = 1; $i<=31; $i++ ) {
$champ23->addOption($i, $i);
}

$champ24 = new XoopsFormSelect('', "annee", $result[annee]);
$champ24->addOption("", _MD_ANNEE);
for ($i=1950;$i<2010;$i++) {
$champ24->addOption($i, $i);
}



$champ5 = new XoopsFormElementTray(_MD_DATE ,'');
// ajout des champs
$champ5->addElement($champ22);
$champ5->addElement($champ23);
$champ5->addElement($champ24);

$champ6 = new XoopsFormText(_MD_LIEU, "lieu", 25, 100, $result[lieu]);
$champ7 = new XoopsFormText(_MD_NATIONALITE."*", "nationalite", 25, 100, $result[nationalite]);
$champ8 = new XoopsFormText(_MD_SITUATION, "situation", 25, 100, $result[situation]);
$champ9 = new XoopsFormText(_MD_VILLE."*", "ville", 25, 100, $result[ville]);
$champ10 = new XoopsFormText(_MD_PAYS."*", "pays", 25, 100, $result[pays]);
$champ11 = new XoopsFormText(_MD_CP."*", "cp", 25, 100, $result[cp]);
$champ12 = new XoopsFormText(_MD_EMAIL."*", "email", 25, 100, $result[email]);
$champ13 = new XoopsFormText(_MD_GSM, "gsm", 25, 100, $result[gsm]);
$champ15 = new XoopsFormText(_MD_SPECIALITE."*", "spec", 25, 100, $result[spec]);
$champ16 = new XoopsFormSelect(_MD_NIVEAU, "niveau", $result[niveau]);
$champ16->addOption(_MD_BAC."-4");
$champ16->addOption(_MD_BAC."-2");
$champ16->addOption(_MD_NIVEAU." "._MD_BAC);
for ( $i = 1; $i<=6; $i++ ) {
$champ16->addOption(_MD_BAC."+".$i);
}

$champ17 = new XoopsFormSelect(_MD_EXPERIENCE, "experience", $result[experience]);
$champ17->addOption("<"._MD_AN);
$champ17->addOption("1"._MD_AN."s");
$champ17->addOption("2"._MD_AN."s");
$champ17->addOption("3"._MD_AN."s");
$champ17->addOption("4"._MD_AN."s");
$champ17->addOption("5 &+");


$champ18 = new XoopsFormSelect(_MD_ACTUELLEMENT, "actuellement", $result[actuellement]);
$champ18->addOption(_MD_STAGIAIRE);
$champ18->addOption(_MD_NONEMPLOYE);
$champ18->addOption(_MD_EMPLOYE);

$champ19 = new XoopsFormSelect(_MD_PERMIS, "permet", $result[permet]);
$champ19->addOption(_MD_SANS);
$champ19->addOption("B");
$champ19->addOption("C");
$champ19->addOption("D");
$champ19->addOption("E");


$champ25 = new XoopsFormSelect(_MD_DOMAINE, "formation", $result[formation]);
$champ25->addOption(_MD_FORMATION1);
$champ25->addOption(_MD_FORMATION2);
$champ25->addOption(_MD_FORMATION3);
$champ25->addOption(_MD_FORMATION4);
$champ25->addOption(_MD_FORMATION5);
$champ25->addOption(_MD_FORMATION6);
$champ25->addOption(_MD_FORMATION7);
$champ25->addOption(_MD_FORMATION8);
$champ25->addOption(_MD_FORMATION9);
$champ25->addOption(_MD_FORMATION10);
$champ25->addOption(_MD_FORMATION11);
$champ25->addOption(_MD_FORMATION12);
$champ25->addOption(_MD_FORMATION13);
$champ25->addOption(_MD_FORMATION14);
$champ25->addOption(_MD_FORMATION15);
$champ25->addOption(_MD_FORMATION16);
$champ25->addOption(_MD_FORMATION17);
$champ25->addOption(_MD_FORMATION18);
$champ25->addOption(_MD_FORMATION19);
$champ25->addOption(_MD_FORMATION20);
$champ25->addOption(_MD_FORMATION21);
$champ25->addOption(_MD_FORMATION22);
$champ25->addOption(_MD_FORMATION23);
$champ25->addOption(_MD_FORMATION24);
$champ25->addOption(_MD_FORMATION25);
$champ25->addOption(_MD_FORMATION26);
$champ25->addOption(_MD_FORMATION27);
$champ25->addOption(_MD_FORMATION28);
$champ25->addOption(_MD_FORMATION29);
$champ25->addOption(_MD_FORMATION30);
$champ25->addOption(_MD_FORMATION31);
$champ25->addOption(_MD_FORMATION32);
$champ25->addOption(_MD_FORMATION33);
$champ25->addOption(_MD_FORMATION34);
$champ25->addOption(_MD_FORMATION35);
$champ25->addOption(_MD_FORMATION36);
$champ25->addOption(_MD_FORMATION37);

$champ26 = new XoopsFormText('', "per1", 25, 100,$result[per1]);
$champ27 = new XoopsFormTextArea('', 'des1', $result[des1], 4, 40);
$champ28 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout des champs
$champ28->addElement($champ26);
$champ28->addElement($champ27);

$champ29 = new XoopsFormText('', "per2", 25, 100,$result[per2]);
$champ30 = new XoopsFormTextArea('', 'des2', $result[des2], 4, 40);
$champ31 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout des champs
$champ31->addElement($champ29);
$champ31->addElement($champ30);

$champ32 = new XoopsFormText('', "per3", 25, 100,$result[per3]);
$champ33 = new XoopsFormTextArea('', 'des3', $result[des3], 4, 40);
$champ34 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout des champs
$champ34->addElement($champ32);
$champ34->addElement($champ33);

$champ35 = new XoopsFormText('', "per4", 25, 100,$result[per4]);
$champ36 = new XoopsFormTextArea('', 'des4', $result[des4], 4, 40);
$champ37 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout des champs
$champ37->addElement($champ35);
$champ37->addElement($champ36);

$champ38 = new XoopsFormText('', "per5", 25, 100,$result[per5]);
$champ39 = new XoopsFormTextArea('', 'des5', $result[des5], 4, 40);
$champ40 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout des champs
$champ40->addElement($champ38);
$champ40->addElement($champ39);

$champ41 = new XoopsFormText('', "per6", 25, 100,$result[per6]);
$champ42 = new XoopsFormTextArea('', 'des6', $result[des6], 4, 40);
$champ43 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout des champs
$champ43->addElement($champ41);
$champ43->addElement($champ42);

$champ44 = new XoopsFormText('', "peri1", 25, 100,$result[peri1] );
$champ45 = new XoopsFormTextArea('', 'desc1', $result[desc1], 4, 40);
$champ46 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ46->addElement($champ44);
$champ46->addElement($champ45);

$champ47 = new XoopsFormText('', "peri2", 25, 100,$result[peri2]);
$champ48 = new XoopsFormTextArea('', 'desc2', $result[desc2], 4, 40);
$champ49 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ49->addElement($champ47);
$champ49->addElement($champ48);

$champ50 = new XoopsFormText('', "peri3", 25, 100,$result[peri3]);
$champ51 = new XoopsFormTextArea('', 'desc3', $result[desc3], 4, 40);
$champ52 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ52->addElement($champ50);
$champ52->addElement($champ51);

$champ53 = new XoopsFormText('', "peri4", 25, 100,$result[peri4]);
$champ54 = new XoopsFormTextArea('', 'desc4', $result[desc4], 4, 40);
$champ55 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ55->addElement($champ53);
$champ55->addElement($champ54);

$champ56 = new XoopsFormText('', "peri5", 25, 100,$result[peri5]);
$champ57 = new XoopsFormTextArea('', 'desc5', $result[desc5], 4, 40);
$champ58 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ58->addElement($champ56);
$champ58->addElement($champ57);

$champ59 = new XoopsFormText('', "peri6", 25, 100,$result[peri6]);
$champ60 = new XoopsFormTextArea('', 'desc6', $result[desc6], 4, 40);
$champ61 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ61->addElement($champ59);
$champ61->addElement($champ60);

$champ62 = new XoopsFormText('', "peri7", 25, 100,$result[peri7]);
$champ63 = new XoopsFormTextArea('', 'desc7', $result[desc7], 4, 40);
$champ64 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ64->addElement($champ62);
$champ64->addElement($champ63);

$champ65 = new XoopsFormText('', "peri8", 25, 100,$result[peri8]);
$champ66 = new XoopsFormTextArea('', 'desc8', $result[desc8], 4, 40);
$champ67 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ67->addElement($champ65);
$champ67->addElement($champ66);

$champ68 = new XoopsFormText('', "peri9", 25, 100,$result[peri9]);
$champ69 = new XoopsFormTextArea('', 'desc9', $result[desc9], 4, 40);
$champ70 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ70->addElement($champ68);
$champ70->addElement($champ69);

$champ71 = new XoopsFormText('', "peri10", 25, 100,$result[peri10]);
$champ72 = new XoopsFormTextArea('', 'desc10', $result[desc10], 4, 40);
$champ73 = new XoopsFormElementTray(_MD_PERIODE."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ73->addElement($champ71);
$champ73->addElement($champ72);


$champ74 = new XoopsFormText('', "langue1", 25, 100,$result[langue1]);
$champ75 = new XoopsFormSelect('', 'option1',$result[option1]);
$champ75->addOption(_MD_SELECT);
$champ75->addOption(_MD_OPTION1);
$champ75->addOption(_MD_OPTION2);
$champ75->addOption(_MD_OPTION3);
$champ75->addOption(_MD_OPTION4);
$champ76 = new XoopsFormElementTray('','');
// ajout option champs
$champ76->addElement($champ74);
$champ76->addElement($champ75);

$champ77 = new XoopsFormText('', "langue2", 25, 100,$result[langue2]);
$champ78 = new XoopsFormSelect('', 'option2',$result[option2]);
$champ78->addOption(_MD_SELECT);
$champ78->addOption(_MD_OPTION1);
$champ78->addOption(_MD_OPTION2);
$champ78->addOption(_MD_OPTION3);
$champ78->addOption(_MD_OPTION4);
$champ79 = new XoopsFormElementTray('','');
// ajout option champs
$champ79->addElement($champ77);
$champ79->addElement($champ78);

$champ80 = new XoopsFormText('', "langue3", 25, 100,$result[langue3]);
$champ81 = new XoopsFormSelect('', 'option3',$result[option3]);
$champ81->addOption(_MD_SELECT);
$champ81->addOption(_MD_OPTION1);
$champ81->addOption(_MD_OPTION2);
$champ81->addOption(_MD_OPTION3);
$champ81->addOption(_MD_OPTION4);
$champ82 = new XoopsFormElementTray('','');
// ajout option champs
$champ82->addElement($champ80);
$champ82->addElement($champ81);

$champ83 = new XoopsFormText('', "langue4", 25, 100,$result[langue4]);
$champ84 = new XoopsFormSelect('', 'option4',$result[option4]);
$champ84->addOption(_MD_SELECT);
$champ84->addOption(_MD_OPTION1);
$champ84->addOption(_MD_OPTION2);
$champ84->addOption(_MD_OPTION3);
$champ84->addOption(_MD_OPTION4);
$champ85 = new XoopsFormElementTray('','');
// ajout option champs
$champ85->addElement($champ83);
$champ85->addElement($champ84);

$champ86 = new XoopsFormText('', "langue5", 25, 100,$result[langue5]);
$champ87 = new XoopsFormSelect('', 'option5',$result[option5]);
$champ87->addOption(_MD_SELECT);
$champ87->addOption(_MD_OPTION1);
$champ87->addOption(_MD_OPTION2);
$champ87->addOption(_MD_OPTION3);
$champ87->addOption(_MD_OPTION4);
$champ88 = new XoopsFormElementTray('','');
// ajout option champs
$champ88->addElement($champ86);
$champ88->addElement($champ87);

$champ89 = new XoopsFormText('', "langue6", 25, 100,$result[langue6]);
$champ90 = new XoopsFormSelect('', 'option6',$result[option6]);
$champ90->addOption(_MD_SELECT);
$champ90->addOption(_MD_OPTION1);
$champ90->addOption(_MD_OPTION2);
$champ90->addOption(_MD_OPTION3);
$champ90->addOption(_MD_OPTION4);
$champ91 = new XoopsFormElementTray('','');
// ajout option champs
$champ91->addElement($champ89);
$champ91->addElement($champ90);

$champ92 = new XoopsFormText('', "comp1", 25, 100,$result[comp1]);
$champ93 = new XoopsFormTextArea('', 'descr1', $result[descr1], 4, 40);
$champ94 = new XoopsFormElementTray(_MD_COMPETENCES."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ94->addElement($champ92);
$champ94->addElement($champ93);

$champ95 = new XoopsFormText('', "comp2", 25, 100,$result[comp2]);
$champ96 = new XoopsFormTextArea('', 'descr2', $result[descr2], 4, 40);
$champ97 = new XoopsFormElementTray(_MD_COMPETENCES."<br><br>"._MD_DESCRIPTION,'');
// ajout desc champs
$champ97->addElement($champ95);
$champ97->addElement($champ96);

$champ98 = new XoopsFormText(_MD_LOISIRS, "loisir1", 25, 100,$result[loisir1]);
$champ99 = new XoopsFormText(_MD_LOISIRS, "loisir2", 25, 100,$result[loisir2]);
$champ100 = new XoopsFormText(_MD_LOISIRS, "loisir3", 25, 100,$result[loisir3]);


$champ101 = new XoopsFormButton('', 'post', _MD_RESET, 'reset');
$champ102 = new XoopsFormButton('', 'post', _MD_SUBMIT, 'submit');
$champ103 = new XoopsFormElementTray('','');
// ajout desc champs
$champ103->addElement($champ101);
$champ103->addElement($champ102);


// Ajout des éléments au formulaire
$my_form->insertBreak(_MD_ETAT,'itemHead');
$my_form->addElement($champ1, false);
$my_form->addElement($champ2, false);
$my_form->addElement($champ3, false);
$my_form->addElement($champ4, false);
$my_form->addElement($champ5, false);
$my_form->addElement($champ6, false);
$my_form->addElement($champ7, true);
$my_form->addElement($champ8, false);
$my_form->insertBreak(_MD_COORDONNEES,'itemHead');
$my_form->addElement($champ9, true);
$my_form->addElement($champ10, true);
$my_form->addElement($champ11, true);
$my_form->addElement($champ12, true);
$my_form->addElement($champ13, false);
$my_form->insertBreak(_MD_FORMATIONS,'itemHead');
$my_form->addElement($champ25, false);
$my_form->addElement($champ15, true);
$my_form->addElement($champ16, false);
$my_form->addElement($champ28, false);
$my_form->addElement($champ31, false);
$my_form->addElement($champ34, false);
$my_form->addElement($champ37, false);
$my_form->addElement($champ40, false);
$my_form->addElement($champ43, false);
$my_form->insertBreak(_MD_EXPERIENCES,'itemHead');
$my_form->addElement($champ46, false);
$my_form->addElement($champ49, false);
$my_form->addElement($champ52, false);
$my_form->addElement($champ55, false);
$my_form->addElement($champ58, false);
$my_form->addElement($champ61, false);
$my_form->addElement($champ64, false);
$my_form->addElement($champ67, false);
$my_form->addElement($champ70, false);
$my_form->addElement($champ73, false);
$my_form->addElement($champ17, false);
$my_form->addElement($champ18, false);
$my_form->addElement($champ19, false);
$my_form->insertBreak(_MD_LANGUES,'itemHead');
$my_form->addElement($champ76, false);
$my_form->addElement($champ79, false);
$my_form->addElement($champ82, false);
$my_form->addElement($champ85, false);
$my_form->addElement($champ88, false);
$my_form->addElement($champ91, false);
$my_form->insertBreak(_MD_COMPETENCES,'itemHead');
$my_form->addElement($champ94, false);
$my_form->addElement($champ97, false);
$my_form->insertBreak(_MD_LOISIRS,'itemHead');
$my_form->addElement($champ98, false);
$my_form->addElement($champ99, false);
$my_form->addElement($champ100, false);
$my_form->addElement($champ103, false);
$my_form->addElement($champ104, false);
$my_form->addElement($champ105, false);




// Affichage du formulaire
$my_form->display();


?>