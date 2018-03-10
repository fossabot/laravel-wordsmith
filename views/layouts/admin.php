<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Пік Анаконди</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <?=Menu::widget([
                'options' => ['class' => 'navbar-nav ml-auto'],
                'items' => [
                    ['label' => 'Перейти на сайт',
                        'url' => ['site/index'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link">{label}</a>',
                    ],
                    ['label' => 'Стати',
                        'url' => ['article/index'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link">{label}</a>',
                    ],
                    ['label' => 'Категории',
                        'url' => ['category/index'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link">{label}</a>',
                    ],
                    ['label' => 'Теги',
                        'url' => ['tag/index'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link">{label}</a>',
                    ],
                    ['label' => 'Flvby',
                        'url' => ['site/login'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link dropdown-toggle">{label}</a>',
                    ],
                    ['label' => 'Мова сайту ('.Yii::$app->language.')',
                        'url' => ['site/language'],
                        'options'=>['class'=>'nav-item'],
                        'template' => '<a href="{url}" class="nav-link dropdown-toggle">{label}</a>',
                    ],
                ],
                'activeCssClass'=>'active',
                'itemOptions'=>['class'=>'nav-item'],
                'submenuTemplate' => "\n<div class='dropdown-menu'>\n{items}\n</div>\n",
            ]);
            ?>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= $content ?>
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Слава Плешков ©2016-<?=date('Y')?>. Всі права захищені.</p>
    </div>
</footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
