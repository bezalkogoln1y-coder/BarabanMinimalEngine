<?php

namespace Core;

class View {

   public function __construct($dir_tpl) {
      $this->dir_tpl = $dir_tpl;
   }

   public function render($data, $template, $return = false) {
      $template = $this->dir_tpl . $template . '.tpl';
      extract($data);

      ob_start();
      include $template;

      $buffer = ob_get_clean();

      if ($return) {
         return $buffer;
      } else {
         echo $buffer;
      }
   }
}
