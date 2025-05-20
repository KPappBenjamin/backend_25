<?php

namespace Foo\Bar;

class Tablet{
    private int $id;
    private int $manufaturer_id;
    private string $fullname;
    private float $screen;
    private int $storage;
    private string $os;
    private int $price;

    private static array $manufaturers = [
        1 => "Apple",
        2 => "Samsung",
        3 => "Lenovo",
    ];

    public function __construct(int $id,int $manufaturer_id,string $fullname,float $screen,int $storage,
        string $os,int $price){

            $this->id = $id;
            $this->manufaturer_id = $manufaturer_id;
            $this->fullname = $fullname;
            $this->screen = $screen;
            $this->storage = $storage;
            $this->os = $os;
            $this->price = $price;
        }


    public function __get(string $name):mixed{
        if("manufacturer_name" == $name){
            return self::$manufaturers[$this->manufaturer_id];
        }
        else if(property_exists($this,$name)){
            return $this->$name;
        }
        return null;
    }

    public function getManufacturers():array{
        return self::$manufaturers;
    }

    public function getImagePath():string{
        return "./img/{$this->id}.webp";
    }

    public function getFormattedPrice():string{
        return number_format($this->price,0,",", " ") . " Ft";
    }

}