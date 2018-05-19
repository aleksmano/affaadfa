<?php
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = $hack->name;
?>
<div class="site-index">
    <?php if(Yii::$app->user->isGuest){ ?>
      <div class="jumbotron">
          <h1>Хакатоны</h1>
          <p class="lead">Хотите ли вы принять участие в ХАКАТОНАХ по всей России</p>
          <p><a class="btn btn-lg btn-success" href="<?=Url::toRoute(['site/login']);?>">Не теряйте время и присоединяйтесь</a></p>
      </div>
    <?php } else {?>
      <h1><?=$hack->name?></h1>



    <?php }?>
    <div class="body-content">



    </div>
</div>
