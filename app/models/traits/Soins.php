<?php

trait Soins {
    public function soigner()
    {
        $_SESSION[$this->getId() . 'newHP'] = $_SESSION[$this->getId() . 'newHP'] + 50;
    }
}