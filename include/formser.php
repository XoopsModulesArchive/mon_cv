<?php
// Chargement du formloader
include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php"; 
// Création de l'objet formulaire
$my_form = new XoopsThemeForm(_MD_RECHERCHE, 'myform', 'rechercher.php');
$my_form->setExtra( " enctype='multipart/form-data'") ;

// Création des éléments de formulaire



$champ4 = new XoopsFormSelect(_MD_TITRE, "sexe", '');
$champ4->addOption(_MD_QUELCONQUE);
$champ4->addOption("Mr");
$champ4->addOption(_MD_MME);
$champ4->addOption(_MD_MLLE);

$champ9 = new XoopsFormText(_MD_VILLE, "ville", 25, 100, _MD_QUELCONQUE);
$champ10 = new XoopsFormText(_MD_PAYS, "pays", 25, 100, _MD_QUELCONQUE);

$champ16 = new XoopsFormSelect(_MD_NIVEAU, "niveau",'');
$champ16->addOption(_MD_QUELCONQUE);
$champ16->addOption(_MD_BAC."-4");
$champ16->addOption(_MD_BAC."-2");
$champ16->addOption(_MD_NIVEAU." "._MD_BAC);
for ( $i = 1; $i<=6; $i++ ) {
$champ16->addOption(_MD_BAC."+".$i);
}

$champ17 = new XoopsFormSelect(_MD_EXPERIENCE, "experience", '');
$champ17->addOption(_MD_QUELCONQUE);
$champ17->addOption("<"._MD_AN);
$champ17->addOption("1"._MD_AN."s");
$champ17->addOption("2"._MD_AN."s");
$champ17->addOption("3"._MD_AN."s");
$champ17->addOption("4"._MD_AN."s");
$champ17->addOption("5 &+");





$champ25 = new XoopsFormSelect(_MD_DOMAINE, "formation", '');
$champ25->addOption(_MD_QUELCONQUE);
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


$champ101 = new XoopsFormButton('', 'post', _MD_RESET, 'reset');
$champ102 = new XoopsFormButton('', 'post', _MD_RECHERCHER, 'submit');
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
$my_form->addElement($champ7, false);
$my_form->addElement($champ8, false);
$my_form->insertBreak(_MD_COORDONNEES,'itemHead');
$my_form->addElement($champ9, false);
$my_form->addElement($champ10, false);
$my_form->addElement($champ11, false);
$my_form->addElement($champ12, false);
$my_form->addElement($champ13, false);
$my_form->insertBreak(_MD_FORMATIONS,'itemHead');
$my_form->addElement($champ25, false);
$my_form->addElement($champ15, false);
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
$my_form->addElement($champ103, false);




// Affichage du formulaire
$my_form->display();

?>