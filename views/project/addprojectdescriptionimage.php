<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Füge einen Bild zu deinem Projekt hinzu';
?>

<div class="full-page-form-holder">
    <div class="full-page-form-large">
        <div class="full-page-form-content">
            <div class="form-header">
                <h4 class="form-title">Bild hinzufügen</h4>
            </div>
            <div class="project-form">
                <?php
                
                $form = ActiveForm::begin([
                            'action' => 'addprojectdescription',
                            'enableClientValidation' => true,
                            'options' => ['enctype' => 'multipart/form-data'],
                            'fieldConfig' => [
                                'template' => "{label}\n{input}\n{hint}\n{error}",
                            ],
                ]);
                ?>
                <?= $form->field($projectDescription, 'project_id')->hiddenInput(['value'=> $project->id])->label(false); ?>
                <?= $form->field($projectDescription, 'type')->hiddenInput(['value'=> '1'])->label(false); ?>
                <?= $form->field($projectDescription, 'description')->textInput(['maxlength' => true])->label("Bild-Text")->hint("Dieser Text erscheint neben Ihrem Bild.") ?>

                <?= $form->field($projectDescription, 'value')->fileInput(array("class" => "inputfile"))->label("Lade ein Bild hoch") ?>

                <div class="form-group center-block text-center">
                    <?= Html::submitButton('Speichern', ['class' => 'btn btn-fill btn-large']) ?>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
    <div class="full-page-form-background"></div>
</div>
