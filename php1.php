<?php
class tetrad{
    public function __construct($l){
        $this->lists = $l;
}
//атрибуты
public $lists;
public $cover; //обложка
//Поведение
//Функция открытия тетради
public function open(){
    $this->cover = false;
    echo "Тетрадь открыта";
} 
//Функция закрытия тетради
public function close(){
    $this->cover = false;
    echo "Тетрадь закрыта";
} 
//Функция записи в тетрадь
public function write($number_words){
    if($this->cover){
        $this->lists -= strlen($number_words);
        if($this->lists < 0){
            echo "Не хватает места";
        }
        else if($this->lists == 0){
            echo "Информация успешно записана в тетрадь, но нет больше доступного места для записи";
        }
        else{
            echo "Информация успешно записана в тетрадь";
        }
    }
    else{
        echo"Тетрадь закрыта";
    }
}

//Объект класса 
$foreveryoung = new tetrad(7);
$foreveryoung->open();
$foreveryoung->write("Привет");
$foreveryoung->close();
?>