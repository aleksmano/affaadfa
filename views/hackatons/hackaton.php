<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\Pjax;

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
      <div class="your-clock"></div>
      <div class="btn btn-success align-center">Учавствовать</div>
      <hr>


      <ul class="nav nav-tabs">
        <li class="active"><a href="#description-hack" data-toggle="tab">Описание</a></li>
        <li><a href="#commands-hack" data-toggle="tab">Команды</a></li>
        <li><a href="#users-hack" data-toggle="tab">Участники</a></li>
        <li><a href="#cases-hack" data-toggle="tab">Задания</a></li>
      </ul>

    <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="description-hack"> <p width="200"><?=$hack->description?></p> </div>
        <div class="tab-pane fade" id="commands-hack">
          <?php foreach ($commands as  $command) {?>
            <div class="card text-xs-center" style="margin:10px">
              <div class="card-header">
                Количество баллов: <?=$command->score?>
              </div>
              <div class="card-block">
                <h4 class="card-title"><?=$command->name?></h4>
                <p class="card-text"><?=$command->description?></p>
                <a href="#" class="btn btn-primary">Страница группы</a>
              </div>
              <div class="card-footer text-muted">
                Образована: <?php Yii::$app->formatter->locale = 'ru-RU';?>
                <?=Yii::$app->formatter->asDate($command->date_of_formation);?>
              </div>
          </div>
        <?php }?>
        </div>
        <div class="tab-pane fade" id="users-hack">
          <div class="row">
            <?php foreach ($users as  $user) {?>
                <div class="col-sm-6">
                <div class="card card-block">
                    <?= Html::img("@web/$user->img", ['alt' => 'Инкогнито', 'width' => '200']) ?>
                    <div class="card-block">
                      <h4 class="card-title"><?=$user->name." ".$user->lastname?></h4>
                      <p class="card-text"><?=$user->about?></p>
                      <a href="#" class="btn btn-primary">На страницу</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                <div class="card card-block">
                    <?= Html::img("@web/$user->img", ['alt' => 'Инкогнито', 'width' => '200']) ?>
                    <div class="card-block">
                      <h4 class="card-title"><?=$user->name." ".$user->lastname?></h4>
                      <p class="card-text"><?=$user->about?></p>
                      <a href="#" class="btn btn-primary">На страницу</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                <div class="card card-block">
                    <?= Html::img("@web/$user->img", ['alt' => 'Инкогнито', 'width' => '200']) ?>
                    <div class="card-block">
                      <h4 class="card-title"><?=$user->name." ".$user->lastname?></h4>
                      <p class="card-text"><?=$user->about?></p>
                      <a href="#" class="btn btn-primary">На страницу</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                <div class="card card-block">
                    <?= Html::img("@web/$user->img", ['alt' => 'Инкогнито', 'width' => '200']) ?>
                    <div class="card-block">
                      <h4 class="card-title"><?=$user->name." ".$user->lastname?></h4>
                      <p class="card-text"><?=$user->about?></p>
                      <a href="#" class="btn btn-primary">На страницу</a>
                    </div>
                  </div>
                </div>
          <?php }?>
        </div>
      </div>

        <div class="tab-pane fade" id="cases-hack">
          <?php foreach ($cases as  $case) {?>
          <div class="card card-block text-xs-center">
            <h4 class="card-title"><?=$case->company?></h4>
            <p class="card-text"></p>
            <a href="<?=$case->linc?>" class="btn btn-primary">Перейти к документу</a>
          </div>
        <?php }?>
        </div>
      </div>
    <?php }?>


</div>
<script type="text/javascript">
    var hack_time = <?=json_encode($hack->date)?>
</script>
