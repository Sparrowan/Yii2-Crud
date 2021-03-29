<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>View Post</h1>
    </div>
    <div class="body-content">
    <div class="container">
    <div class="row">
    <div class="col-6">
    <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->title; ?>
    
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->description; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <?php echo $post->category; ?>
  </li>
</ul>
    </div>
    <div class="col-lg-2">
        <a href=<?php echo yii::$app->homeUrl?> class="btn btn-primary">Go Back</a>
        </div>
    </div>
    </div>
    </div>
</div>
