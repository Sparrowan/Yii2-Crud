<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Yii2 CRUD</h1>
    </div>
    <div class="body-content">
    <?php 
    $form = ActiveForm::begin()
    ?>
        <div class="row">
        <div class="form-group">
        <div class="col-lg-6">
        <?= $form->field($post, 'title') ?>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group">
        <div class="col-lg-6">
        <?= $form->field($post, 'description')->textarea(['rows'=> '6']) ?>
        </div>
        </div>
        </div>
    
        <div class="row">
        <div class="form-group">
        <div class="col-lg-6">
        <?php $items = ['e-commerce'=>'e-commerce','CMS'=>'CMS','MVC'=>'MVC'] ?>
        <?= $form->field($post, 'category')->dropDownList($items, ['prompt' => 'Select']) ?>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group">
        <div class="col-lg-6">
        <div class="col-lg-3">
        <?= Html::submitButton('Create Post', ['class'=>'btn btn-primary']) ?>
        </div>
        <div class="col-lg-2">
        <a href=<?php echo yii::$app->homeUrl?> class="btn btn-primary">Go Back</a>
        </div>
        </div>
        </div>
        </div>

        <?php 
    $form = ActiveForm::end()
    ?>
    </div>
</div>
