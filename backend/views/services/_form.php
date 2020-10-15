<?php
use dominus77\iconpicker\IconPicker;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'service_icon')->widget(IconPicker::className(), []); ?>

    <?= $form->field($model, 'service_tittle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service_content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

