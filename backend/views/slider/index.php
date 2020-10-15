<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Create Slider', ['value'=>Url::to('slider/create'),'class' =>'btn btn-success','id'=>'modalButton'])
        ?>
    </p>
      <?php
          Modal::begin([
          'header'=>'<h4></h4>',
          'id'=>'modal',
          'size'=>'modal-lg',
          ]);

          echo "<div id='modalContent'></div>";
          Modal::end();
    ?>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'slider_id',
            'slider_content:ntext',
            'status',
            'created_at',
            'updated_at',
            //'created_by',
            //'slider_file',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
