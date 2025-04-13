<?php

use app\models\Request;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Панель администратора';
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'address',
            'number',
            'date',
            'time',
            [
            'attribute'=>'type.name',
            'label' => 'Тип услуги'
            ],  
            'another',
            [
            'attribute'=>'pay.name',
            'label' => 'Тип оплаты'
            ],  
            [
            'attribute'=>'status.name',
            'label' => 'Статус'
            ], 
            "cancel_reason",
            'user.FIO',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Request $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
