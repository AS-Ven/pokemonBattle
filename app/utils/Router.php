<?php

class Router{
  public function dispatch($url)
  {
    // Suppression des / en début et fin de chaine
    $url = trim($url, '/');
    // Découpe en tableau l'URL
    $url = explode('/', $url);
 
    // Défini le nom du controller
    $controllerName = ucfirst(!empty($url[0]) ? $url[0] : 'index') . 'Controller';
 
    // Le second élément de l'URL est la méthode
    $methodName = isset($url[1]) ? $url[1] : 'index';
    
    // Extrait la suite de l'URL
    $params = array_slice($url, 2);
 
    // Vérification de l'existence du contrôleur
    if (file_exists("./app/controllers/$controllerName.php")) {
      // Charge le controleur
      require_once "./app/controllers/$controllerName.php";
      // Initialise le controleur
      $controller = new $controllerName;
 
      // Vérification de l'existence de la méthode dans le contrôleur
      if (method_exists($controller, $methodName)) {
        // Appel la méthode du controleur et envoie les paramètres
        call_user_func_array([$controller, $methodName], $params);
      } else {
        die('<p>Méthode introuvable</p>');
      }
    } else {
      die('<p>Controleur introuvable</p>');
    }
  }
}