<?php
require_once("base.php");

class Categories extends Base
{
    public function get() {
        $query = $this->db->prepare("
            SELECT category_id, name, image
            FROM categories
        ");

        $query->execute();

        return $query->fetchAll();
    }
}