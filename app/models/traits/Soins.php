<?php

trait Soins {
    public function soigner()
    {
        $pv = $this->getPointsDeVie();
        $heal = 50;
        $this->setPointsDeVie($pv + $heal);
    }
}