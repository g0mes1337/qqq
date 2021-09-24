<?php
use yii\helpers\Url;

?>

<div class="all">
        <?php foreach ($clients as $client):?>
            <div class="col-md-12">
                <div class="client">
                    <h1><a href="<?= Url::toRoute(['theme/view','id'=>$client->id]) ?>"><?=$client->name?> <?=$client->surname?> <?=$client->patronymic?></a></h1>
                    <div>
                        <span class="qwe"><?=\yii\helpers\ArrayHelper::map($clients,'id','')?></span>
                    </div>
                    <hr>
                </div>
            </div>
        <?php endforeach;?>
</div>