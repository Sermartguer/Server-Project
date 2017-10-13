<?php
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

    public function select_rooms($limit) {
        return $this->bll->select_rooms_BLL($limit);

    }
    public function select_one_rooms($id) {
        return $this->bll->select_one_rooms_BLL($id);

    }



}
