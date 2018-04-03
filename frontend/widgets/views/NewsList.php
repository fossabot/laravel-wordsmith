<?php

use yii\helpers\Url;
?>
<h3 >Недавні статті:</h3>
<div class="card-group">
    <?php foreach ($NewsWidgetListTree as $item): ?>
        <div class="card">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22259%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20259%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16228c51a90%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16228c51a90%22%3E%3Crect%20width%3D%22259%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.2578125%22%20y%3D%2296%22%3E259x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E">
        <div class="card-body">
            <h5 class="card-title"><?=$item->title ?></h5>
            <p class="card-text"><?=$item->description ?></p>
            <a href="<?=Url::to(['news/view', 'id' => $item->id]); ?>" class="btn btn-danger">Детальніше <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
    <?php endforeach;?>
</div>

