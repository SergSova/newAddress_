<?php
    use yii\helpers\Url;

    /**
     * @var                       $this \yii\web\View
     * @var \common\models\Realty $model
     */

    $realtyType = $model->realtyType->realty_table;

    $js = <<<JS
    $('.tooltipped').tooltip({delay: 50});
JS;

    $this->registerJs($js, 3);
?>
<div class="col s12 m6 l3">
    <div class="card catalog-item hoverable">
        <a href="<?= Url::to([
                                 'site/realty',
                                 'id' => $model->id
                             ]) ?>" class="black-text">
            <div class="card-image">
                <div class="action-ico">
                    <?php foreach($model->actions as $action): ?>
                        <img src="<?= Url::to($action->icon, true) ?>" class="tooltipped" data-tooltip="<?= $action->title ?>">
                    <?php endforeach; ?>
                </div>
                <img class="responsive-img"
                     src="<?= ($model->$realtyType->cover) ? Yii::getAlias('@storageUrl').'/'.$model->$realtyType->cover : Url::to('@web/img/nophoto.jpg') ?>">
                <div class="card-title">
                    <p class="title"><?= $model->district->name ?></p>
                    <p class="price"><?= $model->newPrice ? $model->newPrice : $model->price ?> руб</p>
                </div>
                <p class="realty-type"><?= Yii::$app->params['realties']['realtyType'][$realtyType] ?></p>
            </div>
            <div class="card-content">
                <div class="card-info">
                    <p class="subtitle"><?= $model->address ?></p>
                </div>
                <div class="card-description">
                    <?= $model->short_description ?>
                </div>
            </div>
            <button type="button" class="btn mypallete fullWidth waves-effect waves-light">Подробнее</button>
        </a>
    </div>
</div>