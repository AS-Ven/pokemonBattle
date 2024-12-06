<?php

require_once './app/utils/Render.php';

class IndexController{
  use Render;

  // Fonction d'affiche de la page index
  public function index(): void
  {
    // Rendu avec layout
    $this->renderView('home');
  }
}