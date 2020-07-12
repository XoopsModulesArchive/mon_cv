<?php
###########################################################################
#                                                                         #
# ***********************************************                         #
#  MON CV                                                                 #
# ***********************************************                         #
#                                                                         #
#  http://www.smart-http.com.com                                          #
#                                                                         #
########################################################################### 

function show($options) { 
global $xoopsDB;
$block = array();
$myts =& MyTextSanitizer::getInstance();

$sql = "SELECT id,formation,spec,ville,pays FROM ".$xoopsDB->prefix("cv")." where valider= 1 ORDER BY id DESC LIMIT 0, $options[0]";
		$req=$xoopsDB->queryF($sql);
while($result = $xoopsDB->fetchArray($req)){
$message = array();

    $message['id'] = $result['id'];
    $message['formation'] = $result['formation'];
    $message['spec'] = $result['spec'];
    $message['ville'] = $result['ville'];
    $message['pays'] = $result['pays'];
    $block[mymodule][] = $message;
}
return $block;
}



// fonction édition option
function edit($options) {
$form = ""._MB_MON_CV_DISP."&nbsp;";
$form .= "<input type=\"text\" name=\"options[]\" value=\"".$options[0]."\" />&nbsp;"._MB_MON_CV_CV."";
return $form;
}




?>

