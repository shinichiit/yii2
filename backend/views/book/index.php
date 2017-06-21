<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
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
        'attribute'=>'id',
        'label'=>'ID',
        'headerOptions'=>[
        'style'=>'width:15px; text-align:centrer'
        ],
        'contentOptions'=>[
        'style'=>'width:15px; text-align:centrer'
        ],


        ],
            

            
            'name',
            'cate',
            'slug',
            'image',
            // 'desc',
            // 'content:ntext',
            // 'price',
            // 'quantity',
            // 'author',
            // 'page',
            // 'status',
            // 'publish_at',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn',
                'header'=> 'Hành Động'
            ],
        ],
    ]); ?>
</div>
