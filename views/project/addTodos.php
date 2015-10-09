<?php

$this->registerJsFile('@web/js/Todos.js', ['position' => \yii\web\View::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);

/* @var $this yii\web\View */
/* @var $proejct app\models\Project */

$this->title = 'Was ist zu tun?';
?>

<div class="create-form">

    <h1 class="form-title">Was ist zu tun?</h4>
    <p class="form-subtitle">Beschreibe kurz ein paar Aufgaben die zu erlidgen sind bei denen du Hilfe benötigen könntest.</p>

    <?= $this->render('_todos', [
        'project' => $project,
    ]) ?>

</div>