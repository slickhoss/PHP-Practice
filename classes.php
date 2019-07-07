<?php

//we can also create oop classes in php
class Car 
{
    //properties are defined with an accesss modifier
    public $make;
    public $model;
    public $year;

    //function to echo each property and its name
    function displayProperties ()
    {
        foreach ($this as $key => $property)
        {
            echo $key . ':' . $property . '<br>';
        }
    }
}

//object definition
//set properties or call methods using -> notation
$civic = new Car();
$civic->make='honda';
$civic->model='civic';
$civic->year='2009';
$civic->weight=200;
$civic->displayProperties();
