<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ParticipationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Participations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Participation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'grille',
            'coeff',
            'uniteBase',
            'flash',
            //'numParty',
            //'idRemote',
            //'date',
            //'numCollector',
            //'status',
            //'state',
            //'idHost',
            //'dateSession',
            //'session',
            //'amount',
            //'party',
            //'nature',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
