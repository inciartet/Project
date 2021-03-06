<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\StateData */

$this->title = $model->state;
$this->params['breadcrumbs'][] = ['label' => 'State Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = $model->date;

\yii\web\YiiAsset::register($this);

?>
<div class="state-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!--<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'date',
            'state',
            'fips',
            'cases',
            'deaths',
        ],
    ]) ?>
    <p><?= Html::a('Back', ['back', $url = Url::previous()], ['class' => 'btn btn-primary']) ?></p>
</div>
