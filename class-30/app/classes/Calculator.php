<?php


namespace App\classes;


class Calculator
{
    public $first_number;
    public $last_number;
    public $result;
    public $choose;
    public function calculate($cal){
        $this->first_number=$cal['first_number'];
        $this->last_number=$cal['last_number'];
        $this->choose=$cal['choose'];
        switch ($this->choose){
            case '+' :
                $this->result=$this->first_number+$this->last_number;
                break;
            case '-' :
                $this->result=$this->first_number-$this->last_number;
                break;
            case '*' :
                $this->result=$this->first_number*$this->last_number;
                break;
            case '/' :
                $this->result=$this->first_number/$this->last_number;
                break;
            case '%' :
                $this->result=$this->first_number%$this->last_number;
                break;
            default:
                echo '404';
        }
        return $this->result;
    }

}