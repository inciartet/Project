<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StateData */

$this->title = 'Create State Data';
$this->params['breadcrumbs'][] = ['label' => 'State Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
