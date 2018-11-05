<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="wrapper">
<header class="main-header">
    <a href="<?= Url::to('index')?>" class="logo">
      <span class="logo-mini"><?= Html::img('@web/img/logo-mini.png', ['alt' => 'mygympartner-logo']);?></span>
      <span class="logo-lg"><?= Html::img('@web/img/logo.png', ['alt' => 'mygympartner-logo']);?></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="<?= Url::to('')?>" class="dropdown-toggle" data-toggle="dropdown">
              <?= Html::img('@web/dist/img/user2-160x160.jpg', ['alt' => 'User Image', 'class' => 'user-image']);?>
              <span class="hidden-xs">John Doe</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <?= Html::img('@web/dist/img/user2-160x160.jpg', ['alt' => 'User Image', 'class' => 'user-image text-center']);?>
                <div class="clearfix"></div>
                <p>
                  John Doe - Marketing Manager
                  <small>Member since July 2018</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= Url::to('member')?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= Url::to('')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">      
      <div class="user-panel">
        <div class="pull-left image">
          <?= Html::img('@web/dist/img/user2-160x160.jpg', ['alt' => 'User Image', 'class' => 'img-circle']);?>
        </div>
        <div class="pull-left info">
          <p>John Doe</p>
          <a href="<?= Url::to('')?>">Marketing Manager</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="active"><a href="<?= Url::to('index')?>"><?= Html::img('@web/img/icons/icon0.png', ['alt' => 'Dashboard']);?> <span>Dashboard</span></a>

        <li><a href="<?= Url::to('membership')?>"><?= Html::img('@web/img/icons/icon11.png', ['alt' => 'Membership Management']);?> <span>Membership Management</span></a></li>

        <li><a href="<?= Url::to('')?>"><?= Html::img('@web/img/icons/icon22.png', ['alt' => 'Manage Expenses']);?> <span>Manage Expenses</span></a></li>

        <li><a href="<?= Url::to('workoutschedule')?>"><?= Html::img('@web/img/icons/icon33.png', ['alt' => 'Workout Scheduler']);?> <span>Workout Scheduler</span></a></li>

        <li><a href="<?= Url::to('dietplanner')?>"><?= Html::img('@web/img/icons/icon44.png', ['alt' => 'Diet Planner']);?> <span>Diet Planner</span></a></li>

        <li><a href="<?= Url::to('fitnesstools')?>"><?= Html::img('@web/img/icons/icon55.png', ['alt' => 'Fitness Tools']);?> <span>Fitness Tools</span></a></li>

        <li><a href="<?= Url::to('supplementation')?>"><?= Html::img('@web/img/icons/icon66.png', ['alt' => 'Supplementation']);?> <span>Supplementation</span></a></li>

        <li><a href="<?= Url::to('')?>"><?= Html::img('@web/img/icons/icon77.png', ['alt' => 'Personal Training Mgmt.']);?><span>Personal Training Mgmt.</span></a></li>

        <li><a href="<?= Url::to('')?>"><?= Html::img('@web/img/icons/icon88.png', ['alt' => 'Quick Alerts']);?> <span>Quick Alerts</span></a></li>
      </ul>
    </section>
  </aside>