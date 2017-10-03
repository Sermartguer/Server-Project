<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/';
//define('SITE_ROOT', $path);
if (!defined('SITE_ROOT')) define('SITE_ROOT', $path);

require(SITE_ROOT . "modules/list_rooms/model/BLL/listrooms_bll.class.singleton.php");

class listrooms_model {
    private $bll;
    static $_instance;

    private function __construct() {
        $this->bll = listrooms_bll::getInstance();
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function select_rooms() {
        return $this->bll->select_rooms_BLL();

    }
    public function select_one_rooms($id) {
        return $this->bll->select_one_rooms_BLL($id);

    }



}
