<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=Yii::getAlias('@images')?>/user-male-icon.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => Yii::t('app', 'Меню') , 'options' => ['class' => 'header']],
                    ['label' => Yii::t('app', 'Головна') , 'icon' => 'home', 'url' => ['site/index']],
                    ['label' => Yii::t('app', 'Про нас') , 'icon' => 'bars', 'url' => ['about/index']],
                    ['label' => Yii::t('app', 'Правила клубу') , 'icon' => 'lock', 'url' => ['rules/index']],
                    ['label' => Yii::t('app', 'Cпортсмени') , 'icon' => 'users', 'url' => ['athletes/index']],
                    ['label' => Yii::t('app', 'Фото галерея') , 'icon' => 'picture-o', 'url' => ['photo-gallery/index']],
                    ['label' => Yii::t('app', 'Користувачі') , 'icon' => 'user', 'url' => ['user/index']],
                    ['label' => Yii::t('app', 'Коментарі') , 'icon' => 'comments', 'url' => ['comment/index']],
                    ['label' => Yii::t('app', 'Новини') , 'icon' => 'newspaper-o', 'url' => ['news/index']],
                    ['label' => Yii::t('app', 'Категорії') , 'icon' => 'list-ul', 'url' => ['category/index']],
                    ['label' => Yii::t('app', 'Теги') , 'icon' => 'tags', 'url' => ['tag/index']],
                    ['label' => Yii::t('app', 'При підтримці') , 'icon' => 'medkit', 'url' => ['skills/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
