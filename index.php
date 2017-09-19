<?php
require_once("view/inc/top_page.php");
require_once("view/inc/menu.php");
require_once("utils/utils.inc.php");
session_start();

	if (!isset($_GET['module'])) {
		require_once("modules/main/controller/controller_main.class.php");
	} else	if ( (isset($_GET['module'])) && (!isset($_GET['view'])) ){
		require_once("modules/".$_GET['module']."/controller/controller_".$_GET['module'].".class.php");
	}
	
	if ( (isset($_GET['module'])) && (isset($_GET['view'])) ) {
		require_once("modules/".$_GET['module']."/view/".$_GET['view'].".php");
	}
require_once("view/inc/footer.php");
require_once("view/inc/bottom_page.php");
?>