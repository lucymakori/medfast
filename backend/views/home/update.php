<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Home */

$this->title = Yii::t('app', 'Update Home: {name}', [
    'name' => $model->home_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Homes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->home_id, 'url' => ['view', 'id' => $model->home_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="home-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
