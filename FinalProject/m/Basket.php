<?php

    include_once 'DB.php';
    
    class Basket {

        public function addneworder($iduser){
            return DB::Insert('INSERT INTO orders (`idusers`)  VALUES (:idusers)', ['idusers' => $iduser]);
        } 
        public function addordertouser($iduser, $idorder){
            DB::Update('UPDATE users SET lastidorder = :lastidorder WHERE (id = :id)',['lastidorder' => $idorder, 'id' => $iduser]);
        }
        public function checklastorderuser($iduser){
            return DB::GetRow('SELECT users.lastidorder FROM users WHERE id = :id', ['id' => $iduser]);
        }

        public function addgoodtobasket($idgoods, $idorders,$counts) {
            $goodsfound = DB::GetRow('SELECT basket.id, basket.idgoods,basket.idorders, basket.counts  FROM basket WHERE idgoods = :idgoods AND idorders = :idorders', ['idgoods' => $idgoods, 'idorders' => $idorders]);
            if ($goodsfound){
                    $newcount = $goodsfound['counts'] + $counts;
                    $idbasket = $goodsfound['id'];
                    DB::Update('UPDATE basket SET counts = :counts WHERE (id = :id) and (idgoods = :idgoods) and (idorders = :idorders)', ['counts' => $newcount, 'id' => $idbasket , 'idgoods' => $idgoods, 'idorders' => $idorders]);
                } else {
                    return DB::Insert('INSERT INTO basket (`idgoods`, `idorders`, `counts`)  VALUES (:idgoods,:idorders, :counts)', ['idgoods' => $idgoods, 'idorders' => $idorders, 'counts' => $counts]); 
                }
        }

        public function basketget($idorders){
            return DB::Select("SELECT basket.id, goods.goodname, basket.counts, goods.price FROM basket INNER JOIN goods ON  basket.idgoods = goods.id_goods WHERE basket.idorders = :idorders", ['idorders' => $idorders] );
        }

        public function basketdel($idbasket){
            return $delbasket = DB::Delete('DELETE FROM basket WHERE (id = :id)',['id' => $idbasket]);
        }

        public function test(){
            echo "test";
        }
 }



