<?php

require_once './app/utils/Render.php';

class BattleController{
  use Render;

  public function fight(): void
  {
    $this->renderView('battle/fight');
  }

  public function select(): void
  {
    $this->renderView('battle/select');
  }
}