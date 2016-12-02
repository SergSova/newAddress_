<div class="seo_block">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <p class="panel-title">SEO</p>
        </div>
        <div class="panel-body">
            <?= $form->field($model->baseModel, 'seo_title') ?>
            <?= $form->field($model->baseModel, 'seo_keywords') ?>
            <?= $form->field($model->baseModel, 'seo_description') ?>
            <?= $form->field($model->baseModel, 'seo_header') ?>
        </div>
    </div>
</div>
