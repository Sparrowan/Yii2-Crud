<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<?php if(yii::$app->session->hasFlash('message')):?>
<?php echo yii::$app->session->getFlash('message');?>
<?php endif?>
    <div class="jumbotron">
        <h1>Yii2 CRUD</h1>
    </div>

    <div class="body-content">

        <div class="row">
        <span><?= Html::a('Create', ['/site/create'],['class'=> 'btn btn-primary'])?></span>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($posts) > 0): ?>
  <?php foreach($posts as $post): ?>
    <tr>
      <td><?php echo $post->id ?></td>
      <td><?php echo $post->title ?></td>
      <td><?php echo $post->description ?></td>
      <td><?php echo $post->category ?></td>
      <td>
      
      <span><?= Html :: a('View',['view','id'=>base64_encode(str_rot13($post->id))],['Class'=>'label label-primary']) ?></span>
      <span><?= Html :: a('Update',['update','id'=>$post->id],['Class'=>'label label-default']) ?></span>
      <span><?= Html :: a('Delete',['delete','id'=>$post->id],['Class'=>'label label-danger']) ?></span>
      </td>
    </tr>
    <?php endforeach?>
   <?php else: ?>
   <tr>
   <td>

   </td>
   </tr>
    <?php endif; ?>
  </tbody>
</table>
        </div>

    </div>
</div>
