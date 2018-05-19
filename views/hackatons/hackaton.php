<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = $hack->name;
var_dump($hack->date)
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
      <div class="your-clock"></div>
      <div class="btn btn-success align-center">Учавствовать</div>
      <hr>


      <ul class="nav nav-tabs">
        <li class="active"><a href="#description-hack" data-toggle="tab">Описание</a></li>
        <li><a href="#commands-hack" data-toggle="tab">Участники</a></li>
        <li><a href="#users-hack" data-toggle="tab">Команды</a></li>
        <li><a href="#cases-hack" data-toggle="tab">Задания</a></li>
      </ul>

    <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="description-hack"> <p width="200"><?=$hack->description?></p> </div>
        <div class="tab-pane fade" id="commands-hack">...</div>
        <div class="tab-pane fade" id="users-hack">...</div>
        <div class="tab-pane fade" id="cases-hack">...</div>
      </div>
    <?php }?>


</div>
<script type="text/javascript">
    var hack_time = <?=json_encode($hack->date)?>
</script>
