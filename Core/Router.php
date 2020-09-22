<?php

namespace Core;

use Core\Plugins\URLHelper;

class Router {

   public static function start() {
      $controller_name = 'Main';
      $action_name = 'Index';

      $url = URLHelper::getUrl();

      if (!empty($url)) {
         $action_name = lcfirst($url);
      }

      $controller = 'Core\\Controllers\\' . $controller_name . 'Controller';
      $controller = new $controller();

      $action_name = 'action' . $action_name;

      if (method_exists($controller, $action_name)) {
         $controller->$action_name();
      } else {
         $controller->action404();
      }
   }
}
