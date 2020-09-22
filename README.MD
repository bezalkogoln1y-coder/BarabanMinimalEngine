# Схема расположения файлов

-  index.php (Входная страница)
   -  src/tpl (Директория шаблонов)
      -  tpl/index.tpl (Шаблон отрисовки главной страницы)
      -  tpl/main.tpl (Шаблон - layout)
   -  src/public (Файлы типа css, js, img)
   -  src/Core (Объекты реализации бэкэнда)
      -  Core/Router.php (Маршрутизатор)
      -  Core/SqlConnector.php (Соединение с базой)
      -  Core/View.php (Шаблонизатор)
      -  Core/Controllers (Директория контроллеро)
         -  Controllers/MainController.php (Главный контроллер)

### Для установки используем данную команду

> git clone https://github.com/bezalkogoln1y-coder/BarabanMinimalEngine.git . | composer install
