<?php

class listrooms_bll {
    private $dao;
    private $db;
    static $_instance;


    private function __construct() {
        $this->dao = listrooms_dao::getInstance();
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
