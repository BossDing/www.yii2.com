<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = '修改: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '微课管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="video-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
