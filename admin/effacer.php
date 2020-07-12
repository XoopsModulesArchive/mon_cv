<?php
include_once '../../../include/cp_header.php';
xoops_cp_header();

				
		$sql = "Delete  FROM ".$xoopsDB->prefix("cv")." where id = $_GET[id] ";
		$result=$xoopsDB->queryF($sql);
		
echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= index.php'>";

xoops_cp_footer();
?>
