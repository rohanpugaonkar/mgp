<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>


<div class="wrapper">
  <header class="main-header">
    <a href="<?= Url::to('index')?>" class="logo">
      <span class="logo-mini"><?= Html::img('@web/dashboard/img/logo-mini.png', ['alt' => 'mygympartner-logo']);?></span>
      <span class="logo-lg"><?= Html::img('@web/dashboard/img/logo.png', ['alt' => 'mygympartner-logo']);?></span>
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
              <span class="hidden-xs"><?= Html::a('Logout', ['site/logout'], ['data' => ['method' => 'post']]) ?>
</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">      
      <ul class="sidebar-menu">
         <li class="active"><a href="<?= Url::to('index')?>"><?= Html::img('@web/dashboard/img/icons/icon0.png', ['alt' => 'Dashboard']);?> <span>Dashboard</span></a>

         <li><a href="<?= Url::to('gympackages')?>"><?= Html::img('@web/dashboard/img/icons/icon0.png', ['alt' => 'Gym Packages']);?> <span>Gym Packages</span></a>

         <li><a href="<?= Url::to('workoutschedule')?>"><?= Html::img('@web/dashboard/img/icons/icon33.png', ['alt' => 'Workout Scheduler']);?> <span>Workout Scheduler</span></a></li>

        <li><a href="<?= Url::to('dietplanner')?>"><?= Html::img('@web/dashboard/img/icons/icon44.png', ['alt' => 'Diet Planner']);?> <span>Diet Planner</span></a></li>

        <li><a href="<?= Url::to('fitnesstools')?>"><?= Html::img('@web/dashboard/img/icons/icon55.png', ['alt' => 'Fitness Tools']);?> <span>Fitness Tools</span></a></li>

         <li><a href="<?= Url::to('supplementation')?>"><?= Html::img('@web/dashboard/img/icons/icon66.png', ['alt' => 'Supplementation']);?> <span>Supplementation</span></a></li>

         <li><a href="<?= Url::to('store')?>"><?= Html::img('@web/dashboard/img/icons/icon66.png', ['alt' => 'Store']);?> <span>Store</span></a></li>

       <li><a href="<?= Url::to('knowledgecenter')?>"><?= Html::img('@web/dashboard/img/icons/icon66.png', ['alt' => 'Knowledge Center']);?> <span>Knowledge Center</span></a></li>

        <li><a href="<?= Url::to('activitybox')?>"><?= Html::img('@web/dashboard/img/icons/icon66.png', ['alt' => 'Activity Box']);?> <span>Activity Box</span></a></li>

       <li><a href="<?= Url::to('expensebook')?>"><?= Html::img('@web/dashboard/img/icons/icon66.png', ['alt' => 'Expense Book']);?> <span>Expense Book</span></a></li>

         <li><a href="<?= Url::to('training')?>"><?= Html::img('@web/dashboard/img/icons/icon77.png', ['alt' => 'Personal Training Mgmt.']);?><span>Personal Training Mgmt.</span></a></li>

        <li><a href="<?= Url::to('employeemgmt')?>"><?= Html::img('@web/dashboard/img/icons/icon66.png', ['alt' => 'Employee Management']);?> <span>Employee Management</span></a>
        </li>

        <li><a href="<?= Url::to('changepassword')?>"><?= Html::img('@web/dashboard/img/icons/icon66.png', ['alt' => 'Change Password']);?> <span>Change Password</span></a>
        </li>
      </ul>
    </section>
  </aside>