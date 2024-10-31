<?php
class Product extends Db{
    public function getALLPorduct(){
        $sql =  self::$connection->prepare("SELECT * FROM `products`");
        $sql->execute();
        $item = array();
        $item =$sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
}