<?php

require_once './app/utils/Render.php';

class IndexController{
  use Render;

  public function index(): void
  {
    $this->renderView('home');
  }
}