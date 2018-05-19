<?php
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php if(Yii::$app->user->isGuest){ ?>
      <div class="jumbotron">
          <h1>Хакатоны</h1>
          <p class="lead">Хотите ли вы принять участие в ХАКАТОНАХ по всей России</p>
          <p><a class="btn btn-lg btn-success" href="<?=Url::toRoute(['site/login']);?>">Не теряйте время и присоединяйтесь</a></p>
      </div>
    <?php }?>
    <div class="body-content">

        <div class="row">
          <?php foreach ($hackatons as $hackaton) {?>
              <div id_case="<?=$hackaton['id_hack']?>" class="col-lg-4">
                  <?= Html::img("@web/$hackaton[img]", ['alt' => 'Наш логотип', 'width' => '200']) ?>
                  <h2><?=$hackaton['name'] ?></h2>
                  <?php Yii::$app->formatter->locale = 'ru-RU';?>
                  <h4><?=Yii::$app->formatter->asDate($hackaton['date']);?></h4>
                  <p><?=$hackaton['city'] ?></p>
                  <p><?=$hackaton['description'] ?></p>
                  <p>Количество участников: <?=$hackaton['users']?></p>
                  <p>Количество команд: <?=$hackaton['commands']?></p>
                  <p><a class="btn btn-success" href="<?=Url::toRoute(['hackatons/one', 'id_hack' => $hackaton['id_hack']]);?>">Задачи <span ><?=$hackaton['countCases']?></span></a></p>
              </div>
          <?php } ?>
        </div>

    </div>
</div>
