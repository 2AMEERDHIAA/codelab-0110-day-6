<?php
/**
 * Created by PhpStorm.
 * User: hdrm147
 * Date: 2/9/19
 * Time: 2:38 PM
 */

class Person
{
    public $name;
    public $mood;
    public $length;
    public $sports;
    public $energy;

    public function __construct($name,$energy)
    {
        $this->name = $name;
        $this->energy = $energy;
        echo "Class Constructor Called";
    }

    public function sleep($hours  = 7)
    {
        switch ($hours) {
            case 0:
                $this->energy += 0;
                break;
            case 1:
                $this->energy += 0;
                break;
            case 2:
                $this->energy += 0;
                break;
            case 3:
                $this->energy += 0.01;
                break;
            case 7:
                $this->energy += 6;
                break;
        }
    }
}