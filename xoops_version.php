<?php
// ------------------------------------------------------------------------- //
//                           Mon_Cv for Xoops                                //
//                              Version:  2.13                               //
// ------------------------------------------------------------------------- //
// Author: Moussa Lhoussaine (alias smart)                                   //
// email:  admin@smart-http.com                                              //
// URLs: http://www.smart-http.com                                           //
//---------------------------------------------------------------------------//

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";



$modversion['name']        = "mon cv";
$modversion['dirname']     = "mon_cv";
$modversion['hasMain']     = 1;
$modversion['version'] 	   = 2.13;
$modversion['description'] = _MI_MON_CV_DESC;
$modversion['author'] = "smart-http.com";
$modversion['license'] = "GPL see LICENSE";


$modversion['sub'][1]['name'] = _MD_CREERCV;
$modversion['sub'][1]['url']  = 'cv.php';
$modversion['sub'][2]['name'] = _MD_MODIFIERCV;
$modversion['sub'][2]['url']  = 'modifie.php';
$modversion['sub'][3]['name'] = _MD_CONSULTERCV;
$modversion['sub'][3]['url']  = 'recherche.php';

//images
$modversion['image'] = "images/logo.png";

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "cv";

//sql
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";



// Templates
$modversion['templates'][1]['file'] = 'mon_cv_index.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'mon_cv_cv.html';
$modversion['templates'][2]['description'] = '';
$modversion['templates'][3]['file'] = 'mon_cv_consulter.html';
$modversion['templates'][3]['description'] = '';
$modversion['templates'][4]['file'] = 'mon_cv_recherche.html';
$modversion['templates'][4]['description'] = '';
$modversion['templates'][5]['file'] = 'mon_cv_rechercher.html';
$modversion['templates'][5]['description'] = '';


// Blocks
$modversion['blocks'][1]['file'] = "mon_cv_block_new.php";
$modversion['blocks'][1]['name'] = _MI_MON_CV_NEW;
$modversion['blocks'][1]['description'] = "";
$modversion['blocks'][1]['show_func'] = "show"; // fonction affichage du bloc
$modversion['blocks'][1]['edit_func'] = "edit"; // fonction édition options du bloc
$modversion['blocks'][1]['options'] = "5"; // options (séparation par | si plusieurs) 
$modversion['blocks'][1]['template'] = "mon_cv_block_new.html";

//config
$modversion['config'][1]['name'] = max_imgsize;
$modversion['config'][1]['title'] ='_MI_MAX_SIZE';
$modversion['config'][1]['description'] ='_MI_DESC_MAXSIZE';
$modversion['config'][1]['formtype'] = 'textbox';
$modversion['config'][1]['valuetype'] = 'int' ;
$modversion['config'][1]['default'] = '100000';

$modversion['config'][2]['name'] = nb_afficher_index;
$modversion['config'][2]['title'] ='_MI_NB_INDEX';
$modversion['config'][2]['description'] ='_MI_DESC_NBINDEX';
$modversion['config'][2]['formtype'] = 'textbox';
$modversion['config'][2]['valuetype'] = 'int' ;
$modversion['config'][2]['default'] = '5';

$modversion['config'][3]['name'] = nb_afficher_rechercher;
$modversion['config'][3]['title'] ='_MI_NB_RECHERCHER';
$modversion['config'][3]['description'] ='_MI_DESC_NBRECHERCHER';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'int' ;
$modversion['config'][3]['default'] = '5';

$modversion['config'][4]['name'] = nb_afficher_admin;
$modversion['config'][4]['title'] ='_MI_NB_ADMIN';
$modversion['config'][4]['description'] ='_MI_DESC_NBADMIN';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'int' ;
$modversion['config'][4]['default'] = '5';

$modversion['config'][5]['name'] = mon_cv_sujet;
$modversion['config'][5]['title'] ='_MI_MON_CV_SUJET';
$modversion['config'][5]['description'] ='';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'text' ;
$modversion['config'][5]['default'] = _MI_MON_CV_GARDEZ;

$modversion['config'][6]['name'] = mon_cv_email;
$modversion['config'][6]['title'] ='_MI_MON_CV_EMAIL';
$modversion['config'][6]['description'] ='_MI_MON_CV_DEMAIL';
$modversion['config'][6]['formtype'] = 'textarea';
$modversion['config'][6]['valuetype'] = 'text' ;
$modversion['config'][6]['default'] = _MI_MON_CV_VEMAIL;


?>