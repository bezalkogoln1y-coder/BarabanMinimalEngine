<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $meta_title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="row">
            <div class="nav-wrapper light-blue accent-3 z-darken-3 col s12">
                <a href="/" class="brand-logo">
                    <?= $site_name ?>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <?= $content ?>
        </div>
    </main>
</body>

</html>