<?php
use yii\helpers\Url;
use yii\helpers\Html;

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
      <div class="btn btn-success align-center" >Учавствовать</div>
      <hr>
      <button type="button" id="description-hack" class="btn btn-default">Описание</button>
      <button type="button" id="commands-hack" class="btn btn-default">Команды</button>
      <button type="button" id="users-hack" class="btn btn-default">Участники</button>
      <button type="button" id="ceses-hack" class="btn btn-default">Задачи</button>
      <div id="content-hack"><div>

    <?php }?>
    <div class="body-content">



    </div>
</div>
<script type="text/javascript">
    var hack_time = <?=json_encode($hack->date)?>
</script>
