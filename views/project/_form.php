<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\helpers\ArrayHelper

/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">
    <?php
    $form = ActiveForm::begin([
                'action' => 'create',
                'enableClientValidation' => true,
                'options' => ['enctype' => 'multipart/form-data'],
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{hint}\n{error}",
                ],
    ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label("Gib deinem Projekt einen Namen")->hint("Der Name sollte am besten kurz und pregnant sein.") ?>

    <?= $form->field($model, 'shortDescription')->textarea(['rows' => 6])->hint("Beschreibe in 3-4 Sätzen worum es bei deiner Idee geht und was deine Nachbarschaft davon hat.")->label("Worum geht's?") ?>
    <?= $form->field($model, 'formattedAddress')->textInput(['maxlength' => true])->label("Wo?") ?>
    <?= $form->field($model, 'location')->hiddenInput()->label(false) ?>
    <?= $form->field($model, 'longitude')->hiddenInput()->label(false) ?>
    <?= $form->field($model, 'latitude')->hiddenInput()->label(false) ?>
    <?= $form->field($model, 'placeId')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'mainImage')->fileInput(array("class" => "inputfile"))->hint("Ein Bild sagt mehr als tausend Worte. Zeig uns den Ort den du verändern möchtest.")->label("Lade ein Bild hoch") ?>

    <?php
    $categories = Category::find()->asArray()->all();
    $map = ArrayHelper::map($categories, 'id', 'title'); // (where 'id' becomes the value and 'name' the name of the value which will be displayed)
    ?>
    <?= $form->field($model, 'category_id')->radioList($map, array("class" => "category-select"))->label("In welche Kategorie passt dein Projekt?") ?>
    
    <div class="form-group center-block text-center">
        <?= Html::submitButton($model->isNewRecord ? 'Leg los' : 'Update', ['class' => 'btn btn-fill btn-large']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
