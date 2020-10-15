<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dominus77\iconpicker\IconPicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Home */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'home_icon')->widget(IconPicker::className(), []); ?>

    <?= $form->field($model, 'home_tittle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_content')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
