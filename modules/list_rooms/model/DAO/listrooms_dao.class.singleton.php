<?php
class listroomsDAO {
    static $_instance;

    private function __construct() {

    }

    public static function getInstance() {
      // echo '<script>';
      // echo 'console.log("UserDAO")';
      // echo '</script>';
        if (!(self::$_instance instanceof self))
            self::$_instance = new self();
        return self::$_instance;
    }

    public function select_rooms_DAO($db,$limit) {
      $sql = "SELECT * FROM rooms LIMIT $limit";
      $stmt = $db->ejecutar($sql);
      return $db->listar($stmt);


    }
    public function select_one_rooms_DAO($db,$id) {
      $sql = "SELECT * FROM rooms WHERE id='$id'";
      $stmt = $db->ejecutar($sql);
      return $db->listar($stmt);


    }
}
