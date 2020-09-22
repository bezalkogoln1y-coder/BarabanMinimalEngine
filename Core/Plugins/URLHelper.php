<?php

namespace Core\Plugins;

class URLHelper {

   public static function getUrl() {
      $url = $_SERVER['REQUEST_URI'];
      $url = preg_match('#/([a-z0-9]+)#', $url, $matches);

      if (empty($matches)) {
         return '';
      }

      return $matches[1];
   }
}
