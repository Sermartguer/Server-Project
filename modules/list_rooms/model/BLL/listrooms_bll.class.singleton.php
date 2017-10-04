<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/a/Server-Project/';
if (!defined('SITE_ROOT')) define('SITE_ROOT', $path);
if(!defined ( 'MODEL_PATH' )) define('MODEL_PATH', SITE_ROOT . 'model/');


require (MODEL_PATH . "Db.class.singleton.php");
require(SITE_ROOT . "modules/list_rooms/model/DAO/listrooms_dao.class.singleton.php");
// echo '<script>';
// echo 'console.log("UserBLL")';
// echo "console.log('$path')";
// echo '</script>';
class listrooms_bll {
    private $dao;
    private $db;
    static $_instance;


    private function __construct() {
        $this->dao = listroomsDAO::getInstance();
        $this->db = Db::getInstance();
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function select_rooms_BLL($limit) {
        return $this->dao->select_rooms_DAO($this->db,$limit);
    }
    public function select_one_rooms_BLL($id) {
        return $this->dao->select_one_rooms_DAO($this->db,$id);
    }
}
