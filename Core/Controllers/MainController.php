<?php

namespace Core\Controllers;

use Core\View;

class MainController {

   private $meta_title = '';
   private $site_name = 'Baraban Minimal Engine';
   private $template = '';

   public function __construct() {
      $this->view = new View(DIR_TPL);
   }

   public function actionIndex() {
      $this->meta_title = 'Baraban Minimal Template';
      $this->template = 'index';
      $data['pagetitle'] = 'Добро пожаловать';
      $data['introtext'] = 'Фронт не подвезли)';
      $content = $this->view->render($data, $this->template, true);

      $this->render($content);
   }

   private function render($content) {
      $data['meta_title'] = $this->meta_title;
      $data['content'] = $content;
      $data['site_name'] = $this->site_name;
      $data['tpl'] = $this->template;

      $this->view->render($data, MAIN_TPL);
   }
}
