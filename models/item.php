<?php
class Item extends db{
    public function getALLItems(){
        $sql = self::$connection->prepare("SELECT * From `items`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all()(MYSQLI_ASSOC);
        return $items;
    }
}