<?php

abstract class MythGoods{
    protected $designation;
    
    protected function __construct($designation){
        $this->designation = $designation;
    }
    
    abstract protected function getDesignation();
    abstract protected function getPrice();
    abstract protected function getPlus();
}

//Категория штучных товаров, масла.
class PieceGoods extends MythGoods{
    public $name;
    public $sellPrice;
    public $buyPrice;
    
    function getDesignation(){
        return $this->$designation;
    }
    
    function getPrice(){
        return $this->price;
    }
    
    function getPlus(){
        return $fullprice = $this->sellPrice - $this->buyPrice;
    }
    
    function __construct($designation, $name, $sellPrice, $buyPrice){
        parent:: __construct($designation);
        $this->name = $name;
        $this->sellPrice = $sellPrice;
        $this->buyPrice = $buyPrice;
    }
    
    function getScreen(){
        $screen = "Категория: {$this->designation}<br>";
        $screen.= "Название товара: {$this->name}<br>";
        $screen.= "Цена продажи: {$this->sellPrice}<br>";
        $screen.= "Цена закупки: {$this->buyPrice}<br>";
        $screen.= "Выручка: {$this->getPlus()} dollars";
        return $screen;
    }
}

//Категория ИТ-товаров
//Реализована зависимость от наследника class PieceGoods
class ITGoods extends PieceGoods{
    
    function __construct($designation,$name,$sellPrice, $buyPrice){
        //parent:: __construct($designation,$name,$sellPrice, $buyPrice);
        $this->name = $name;
        $this->sellPrice = $sellPrice * 5;
        $this->buyPrice = $buyPrice;
    }
    
    function SetSellPrice(){
        $screen = "Категория: {$this->designation}<br>";
        $screen.= "Название товара: {$this->name}<br>";
        $screen.= "Цена продажи: {$this->sellPrice}<br>";
        $screen.= "Цена закупки: {$this->buyPrice}<br>";
        $screen.= "Выручка: {$this->getPlus()} dollars";
        return $screen;
    }
}

$oil = new PieceGoods("Piece", "Luxoil", 2000, 1325);

$it = new ITGoods("Soft", "IT", 15200, 4500);

echo $oil->getScreen();
echo "<br>";
echo $it->SetSellPrice();

?>
