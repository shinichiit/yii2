<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'header'=>'STT',
            'headerOptions'=>[
                'style'=>'width:15px; text-align:centrer'
            ],
            // 'contentOptions'=>[
            //     'style'=>'width:15px; text-align:centrer'
            //     ],
            ],
            ['class'=>'yii\grid\CheckBoxColumn'],
            [
        'attribute'=>'pro_id',
        'label'=>'ID',
        'headerOptions'=>[
        'style'=>'width:15px; text-align:centrer'
        ],
        'contentOptions'=>[
        'style'=>'width:15px; text-align:centrer'
        ],


        ],

            
            'pro_name',
            'cat_id',
            'slug',
            'image',
            // 'desc',
            // 'metadesc:ntext',
            // 'price',
            // 'quantity',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
