<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-sm-4">
                имя пользователя: <?= Html::a(Html::encode($model->name), ['view', 'id' => $model->id]) ?>
            </div>
            <div class="col-sm-4">
                e-mail: <?= Html::a(Html::encode($model->email), 'mailto:'.$model->email) ?>
            </div>
            <div class="col-sm-4">
                <?= ($model->completed)?'отредактировано администратором':'' ?>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <?= Yii::$app->formatter->asNtext($model->content) ?>
    </div>
</div>
