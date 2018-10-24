<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>
    <section class="content">
      <div class="row boxes">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-white">
            <div class="icon bg1">
              <img src="img/icons/icon55.png" alt="Member-icon"/>
            </div>
            <div class="inner">
              <p>Member</p>
              <h3>150</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-white">
            <div class="icon bg2">
              <img src="img/icons/icon55.png" alt="Member-icon"/>
            </div>
            <div class="inner">
              <p>Member</p>
              <h3>150</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-white">
            <div class="icon bg3">
              <img src="img/icons/icon55.png" alt="Member-icon"/>
            </div>
            <div class="inner">
              <p>Member</p>
              <h3>150</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-white">
            <div class="icon bg4">
              <img src="img/icons/icon55.png" alt="Member-icon"/>
            </div>
            <div class="inner">
              <p>Member</p>
              <h3>150</h3>
            </div>
          </div>
        </div>
      </div>
       <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body">
              <div id="external-events">
                <div class="external-event bg-green">Lunch</div>
                <div class="external-event bg-yellow">Go home</div>
                <div class="external-event bg-aqua">Do homework</div>
                <div class="external-event bg-light-blue">Work on UI design</div>
                <div class="external-event bg-red">Sleep tight</div>
                <div class="checkbox">
                  <label for="drop-remove" style="padding-left: 20px;">
                    <input type="checkbox" id="drop-remove">
                    remove after drop
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Create Event</h3>
            </div>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <ul class="fc-color-picker" id="color-chooser">
                  <li><a class="text-aqua" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-teal" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-muted" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="<?= Url::to('')?>"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="box">
            <div class="box-body">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Membership</h3>
            </div>
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <?= Html::img('@web/dist/img/avatar.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                     <?= Html::img('@web/dist/img/avatar2.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                     <?= Html::img('@web/dist/img/avatar3.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                     <?= Html::img('@web/dist/img/avatar5.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Group List</h3>
            </div>
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                     <?= Html::img('@web/dist/img/avatar.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                     <?= Html::img('@web/dist/img/avatar2.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                     <?= Html::img('@web/dist/img/avatar3.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                     <?= Html::img('@web/dist/img/avatar5.png', ['alt' => 'img', 'class' => 'img-circle']);?>
                  </div>
                  <div class="product-info">
                    <span class="product-description">
                      Lifetime Membership
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Payment</h3>
            </div>
            <div class="box-body chart-responsive">
                <div class="chart" id="paymentchart" style="height: 300px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Member Attendance Report</h3>
            </div>
            <div class="box-body chart-responsive">
                <div class="chart" id="attendance" style="height: 300px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Staff Attendance Report</h3>
            </div>
            <div class="box-body chart-responsive">
                <div class="chart" id="staffattendance" style="height: 300px;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 <?php 
$this->registerJs("
 $(document).ready(function(){
       var bar_data = {
      data: [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#4d1232'
    };
    $.plot('#paymentchart', [bar_data], {
      grid: {
        borderWidth: 0,
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center'
        }
      },
      xaxis: {
        mode: 'categories',
        tickLength: 0
      }
    });

    var bar3 = new Morris.Bar({
      element: 'attendance',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#4d1232', '#ddd'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });

    var bar2 = new Morris.Bar({
      element: 'staffattendance',
      resize: true,
      data: [
        {y: '2006', a: 100},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#4d1232', '#ddd'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });

  ", \yii\web\View::POS_END);
?>