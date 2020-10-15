<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contact */

$this->title = Yii::t('app', 'Update Contact: {name}', [
    'name' => $model->contact_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->contact_id, 'url' => ['view', 'id' => $model->contact_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
