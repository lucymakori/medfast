<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Services */

$this->title = 'Create Services';
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
