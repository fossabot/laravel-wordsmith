<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Правила';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo Yii::$app->urlManager->createUrl('site/index')?>">Головна</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $this->title?></li>
        </ol>
    </nav>

</div>
