<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

  <p>
        <?= Html::button('Create Contact', ['value'=>Url::to('contact/create'),'class' =>'btn btn-success','id'=>'modalButton'])
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

            'contact_id',
            'contact_icon',
            'contact_tittle',
            'contact_content:ntext',
            'status',
            //'created_at',
            //'updated_at',
            //'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
