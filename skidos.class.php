<?php

//Fatal error: Uncaught ArgumentCountError: Too few arguments to function Skidos::__construct(), 0 passed in D:\OSPanel\domains\localhost\skidos.class.php on line 45 and exactly 3 expected in D:\OSPanel\domains\localhost\skidos.class.php:21 Stack trace: #0 D:\OSPanel\domains\localhost\skidos.class.php(45): Skidos->__construct() #1 {main} thrown in D:\OSPanel\domains\localhost\skidos.class.php on line 21
class Skidos{
    private $size;
    private $date_of_initialization;
    private $validation;
    
    
    function getSize(){
        return $this->size;
    }  
     
    function getDate_of_initialization(){
        return $this->date_of_initialization; 
    }
    
    function getValidation(){
        return $this->validation; 
    }
    
    function __construct($size, $date_of_initialization, $validation){
        $this->setSize();
        $this->setDate_of_initialization();
        $this->setValidation();
    }
    
    function setSize($size){
        $this->size = $size;
    }
    
    function setDate_of_initialization($date_of_initialization){
        $this->date_of_initialization = $date_of_initialization;
    }
    
    function setValidation($validation){
        $this->validation = $validation;
    }
    
    function count_size(){
        echo "Ваша скидка составит ".$this->size.", срок действия - ".$this->validation;
    }
}

$daily_skidos = new Skidos;
$daily_skidos->size = "23%";
$daily_skidos->date_of_initialization = "today";
$daily_skidos->validation = "24 hours";
$this->count_size();

$weekly_skidos = new Skidos;
$weekly_skidos->size = "13%";
$weekly_skidos->date_of_initialization = "June, 21";
$weekly_skidos->validation = "7 days";
$this->count_size();


/*class ChristmasSkidos extends Skidos{
    private $description;
    
    function __construct(){
        parent::__construct($size, $date_of_initialization, $description);
        $this->description = $description;
    }
        
        function count_size(){
        parent::count_size();
        echo "Ваша скидка составит ".$this->getSize().", срок действия - ".$this->getValidation().", категория - ".$this->description;
    }
}
    
$a = new ChristmasSkidos("50%", "Jan, 1", "monthly");
$a->count_size();//выводит ошибку syntax error, unexpected '$a' (T_VARIABLE), expecting function (T_FUNCTION)
    
    class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}

$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

Скрипт выводит 1234, static говорит интерпретатору не обнулять значение переменной между вызовами.

//___________________________________________________

class A{
    public function foo(){
        static $x = 0;
        echo ++$x;
    }
}

class B extends A{
}

$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();//выводит 1122. Наследование класса (и метода) приводит к тому, что всё-таки создается новый метод*/
?>
