<?php

trait Soins {
    // Fonction de soin
    public function soigner()
    {
        $pv = $this->getPointsDeVie();
        $heal = 50;
        $this->setPointsDeVie($pv + $heal);
    }
}