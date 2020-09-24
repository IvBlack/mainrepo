<?php

    include_once 'DB.php';
    
    class Good {
 
    public function goodget(){
        return DB::Select("SELECT goods.id_goods AS id, goods.goodname AS name, goods.goodimage AS image, goods.price AS price, categories.categoryname AS category  FROM goods, categories WHERE goods.id_category = categories.id_category");
    }
    public function goodgetindex(){
        return DB::Select("SELECT goods.id_goods AS id, goods.goodname AS name, goods.goodimage AS image, goods.price AS price, categories.categoryname AS category  FROM goods, categories WHERE goods.id_category = categories.id_category LIMIT 3");
    }


}

