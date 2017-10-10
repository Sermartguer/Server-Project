
<?php
class controller_main {

    function __construct() {
        //include(UTILS . "common.inc.php");
    }

    function begin() {
			require_once(VIEW_PATH_INC ."top_page.php");
			require_once(VIEW_PATH_INC ."menu.php");

        loadView('modules/main/view/', 'main.php');

        require_once(VIEW_PATH_INC . "footer.php");
				require_once(VIEW_PATH_INC ."bottom_page.php");
    }

}
