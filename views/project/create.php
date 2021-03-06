<?php

$this->registerJsFile('@web/js/CreateProject.js', ['position' => \yii\web\View::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = 'Starte dein Projekt';
?>
<div class="full-page-form-holder">
    <div class="full-page-form-large">
        <div class="form-header">
            <h4 class="form-title">Starte dein Projekt!</h4>
            <p class="form-subtitle">Erzähle uns ein bisschen über deine Idee.</p>
        </div>
        <div class="full-page-form-content">

                <?=
                $this->render('_form', [
                    'model' => $model,
                ])
                ?>  
        </div>
    </div>
</div>