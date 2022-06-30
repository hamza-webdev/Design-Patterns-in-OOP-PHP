<?php

namespace creational\Singleton\config;

class config{

    private static $instance;
    private static array $values=[];

    private function __construct(){
        self::$values['carrot']='carrot';
        self::$values['manga']='manga';
        self::$values['fraise']='fraise';
        self::$values['habricot']='habricot';
    }

    private static init(): self;{
        if(is_null(self::$instance)){
            var_dump('class instancie');
            self::$instance=new self();
        }

}
