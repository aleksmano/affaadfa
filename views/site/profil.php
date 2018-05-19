<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Profil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'form-зкщашд']); ?>
            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'lastname') ?>
            <?= $form->field($model, 'about')->textarea(['rows' => 2, 'cols' => 5])->label('О себе');?>
            <?= $form->field($model, 'sex')
                ->dropDownList([
                    '0' => 'Мужчина',
                    '1' => 'Женщина',
                ]); ?>
            <?= $form->field($model, 'img') ?>


            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'profil-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>