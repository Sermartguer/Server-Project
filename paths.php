<?php
//SITE_ROOT
$path = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/';
define('SITE_ROOT', $path);

//SITE_PATH
define('SITE_PATH', 'https://' . $_SERVER['HTTP_HOST'] . '/a/Server-Project/');

//CSS
define('CSS_PATH', SITE_PATH . 'view/css/');

//CSS FontAwesme
define('CSS_PATH_FAW', SITE_PATH . 'view/font-awesome/');
//JS
define('JS_PATH', SITE_PATH . 'view/js/');

//IMG
define('IMG_PATH', SITE_PATH . 'view/img/');

//log
define('USER_LOG_DIR', SITE_ROOT . 'log/rooms/Site_User_errors.log');
define('GENERAL_LOG_DIR', SITE_ROOT . 'log/general/Site_General_errors.log');

define('PRODUCTION', true);

//model
define('MODEL_PATH', SITE_ROOT . 'model/');
//view
define('VIEW_PATH_INC', SITE_ROOT . 'view/inc/');
define('VIEW_PATH_INC_ERROR', SITE_ROOT . 'view/inc/templates_error/');
//modules
define('MODULES_PATH', SITE_ROOT . 'modules/');
//resources
define('RESOURCES', SITE_ROOT . 'resources/');
//media
define('MEDIA_PATH', SITE_ROOT . 'media/');
//utils
define('UTILS', SITE_ROOT . 'utils/');

//model rooms
define('FUNCTIONS_rooms', SITE_ROOT . 'modules/rooms/utils/');
define('MODEL_PATH_rooms', SITE_ROOT . 'modules/rooms/model/');
define('DAO_rooms', SITE_ROOT . 'modules/rooms/model/DAO/');
define('BLL_rooms', SITE_ROOT . 'modules/rooms/model/BLL/');
define('MODEL_rooms', SITE_ROOT . 'modules/rooms/model/model/');
define('rooms_JS_PATH', SITE_PATH . 'modules/rooms/view/js/');

//model list_rooms
define('UTILS_listrooms', SITE_ROOT . 'modules/listrooms/utils/');
define('listrooms_JS_LIB_PATH', SITE_PATH . 'modules/listrooms/view/lib/');
define('listrooms_JS_PATH', SITE_PATH . 'modules/listrooms/view/js/');
define('MODEL_PATH_listrooms', SITE_ROOT . 'modules/listrooms/model/');
define('DAO_listrooms', SITE_ROOT . 'modules/listrooms/model/DAO/');
define('BLL_listrooms', SITE_ROOT . 'modules/listrooms/model/BLL/');
define('MODEL_listrooms', SITE_ROOT . 'modules/listrooms/model/model/');

//amigables
define('URL_AMIGABLES', TRUE);
