<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dominus77\iconpicker\IconPicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'contact_icon')->widget(IconPicker::className(), []); ?>

    <?= $form->field($model, 'contact_content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
