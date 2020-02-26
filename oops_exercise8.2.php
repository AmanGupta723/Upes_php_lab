<?php

class book
{
    var $price;
    var $title;
    

    
    public function __construct($par,$str){
    $this->price = $par;
    $this->title = $str;
}


function getPrice(){
    echo $this->price ."<br/>";
}

function getTitle(){
    echo $this->title ." <br/>";
}
}
$B1 = new book(300,"MAths");
$B1->getPrice();
$B1->getTitle();
?>
