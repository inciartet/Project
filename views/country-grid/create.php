<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryGrid */

$this->title = 'Create Country Grid';
$this->params['breadcrumbs'][] = ['label' => 'Country Grids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-grid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
