<?php

trait Soins {
    // Fonction de soin
    public function soigner($heal)
    {
        $this->setPointsDeVie($heal);
    }
}