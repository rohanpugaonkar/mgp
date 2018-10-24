<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Member
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#memberlist" data-toggle="tab"><i class="fa fa-list"></i> Member List</a></li>
              <li><a href="#viewmember" data-toggle="tab"><i class="fa fa-eye"></i> View Member</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="memberlist">
                  <div class="box-body no-padding">
                       <?php $form = ActiveForm::begin([
                          'id'=>'',
                          'options'=>[
                            'class' => 'form-horizontal',
                              'role'=>'form',
                          ],
                        ]); ?>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Member Type</label>
                          <div class="col-sm-4">
                            <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Active Member'],['class'=>'form-control', 'prompt'=>'Select Member Type',])->label(false) ?>
                          </div>
                          <div class="col-md-1">
                              <?= Html::submitButton('Go',['class' => 'btn bg-navy btn-flat margin-0']);?>
                          </div>
                        </div>
                      <?php ActiveForm::end(); ?>
                    <div class="table-responsive">
                      <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th>Photo</th>
                            <th>Member Name</th>
                            <th>Member ID</th>
                            <th>Member Type</th>
                            <th>Joining Date</th>
                            <th>Expire Date</th>
                            <th>Membership Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                            <td>Vijay Bhosale</td>
                            <td>MT365</td>
                            <td>Not Selected</td>
                            <td>2018/07/22</td>
                            <td>2019/07/22</td>
                            <td>Continue</td>
                            <td>
                               <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                                <button type="button" class="btn bg-teal btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                                 <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                               <button type="button" class="btn bg-white btn-flat margin">View Attendance</button>
                            </td> 
                          </tr>
                          <tr>
                            <td><img class="img-circle t-img" src="img/avatar2.png" alt="User Image"></td>
                            <td>Vijay Bhosale</td>
                            <td>MT365</td>
                            <td>Not Selected</td>
                            <td>2018/07/22</td>
                            <td>2019/07/22</td>
                            <td>Continue</td>
                            <td>
                               <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                                <button type="button" class="btn bg-teal btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                                 <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                               <button type="button" class="btn bg-white btn-flat margin">View Attendance</button>
                            </td> 
                          </tr>
                          <tr>
                            <td><img class="img-circle t-img" src="img/avatar3.png" alt="User Image"></td>
                            <td>Vijay Bhosale</td>
                            <td>MT365</td>
                            <td>Not Selected</td>
                            <td>2018/07/22</td>
                            <td>2019/07/22</td>
                            <td>Continue</td>
                            <td>
                               <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                                <button type="button" class="btn bg-teal btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                                 <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                               <button type="button" class="btn bg-white btn-flat margin">View Attendance</button>
                            </td> 
                          </tr>
                          <tr>
                            <td><img class="img-circle t-img" src="img/avatar5.png" alt="User Image"></td>
                            <td>Vijay Bhosale</td>
                            <td>MT365</td>
                            <td>Not Selected</td>
                            <td>2018/07/22</td>
                            <td>2019/07/22</td>
                            <td>Continue</td>
                            <td>
                               <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                                <button type="button" class="btn bg-teal btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                                 <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                               <button type="button" class="btn bg-white btn-flat margin">View Attendance</button>
                            </td> 
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
              <div class="tab-pane" id="viewmember">
                <div class="col-md-6">
                    <div class="box">
                      <div class="box-body box-profile">
                        <?= Html::img('@web/img/avatar5.png', ['class' => 'profile-user-img img-responsive img-circle', 'alt' => 'User profile picture']);?>
                        <h3 class="profile-username text-center">Vijay Bhosale</h3>
                        <ul class="list-group list-group-unbordered">
                          <li class="list-group-item">
                            <b>Name</b> <a class="pull-right">Vijay Bhosale</a>
                          </li>
                          <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">vijay@gmail.com</a>
                          </li>
                          <li class="list-group-item">
                            <b>Mobile No</b> <a class="pull-right">8569856589</a>
                          </li>
                          <li class="list-group-item">
                            <b>Date Of Birth</b> <a class="pull-right">1989/08/10</a>
                          </li>
                          <li class="list-group-item">
                            <b>Gender</b> <a class="pull-right">Male</a>
                          </li>
                          <li class="list-group-item">
                            <b>Class</b> <a class="pull-right">1.00 PM To 4.00 PM</a>
                          </li>
                          <li class="list-group-item">
                            <b>Username</b> <a class="pull-right">Vijay</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">More Info</h3>
                    </div>
                    <div class="box-body">
                      <ul class="info-list">
                        <li class="item">
                            <i class="fa fa-user"></i>  Staff Member
                            <span class="info-name">
                               Ronni Scruwala
                            </span>
                        </li>
                        <li class="item">
                            <i class="fa fa-heart"></i>  Interest Area
                            <span class="info-name">
                               Weight Gain
                            </span>
                        </li>
                        <li class="item">
                            <i class="fa fa-users"></i>  Membership
                            <span class="info-name">
                               Golden Membership
                            </span>
                        </li>
                        <li class="item">
                            <i class="fa fa-power-off"></i>  Status
                            <span class="info-name">
                               Continue
                            </span>
                        </li>
                        <li class="item">
                            <i class="fa fa-calendar"></i>  Expire Date
                            <span class="info-name">
                               2019/06/21
                            </span>
                        </li>
                        <li class="item">
                            <i class="fa fa-map-marker"></i>  Address
                            <span class="info-name">
                               104 Heart Villa,Near , Los Angeles 104 Heart Villa,Near , Los Angeles
                            </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                  <div class="col-md-6">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Fat Progress Report</h3>
                      </div>
                      <div class="box-body chart-responsive">
                          <div class="chart" id="fatreport" style="height: 300px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Weight Progress Report</h3>
                      </div>
                      <div class="box-body chart-responsive">
                          <div class="chart" id="weightreport" style="height: 300px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Waist Progress Report</h3>
                      </div>
                      <div class="box-body">
                          <div class="chart" id="waistreport" style="height: 300px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Height Progress Report</h3>
                        </div>
                        <div class="box-body chart-responsive">
                            <div class="chart" id="heightreport" style="height: 300px;"></div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Chest Progress Report</h3>
                      </div>
                      <div class="box-body">
                          <div class="chart" id="chestreport" style="height: 300px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
            </div>
          </div>
       </div>
      </div>
    </section>
  </div>
 
<?php
$this->registerJs("
  $(document).ready(function(){
      var line = new Morris.Line({
      element: 'fatreport',
      resize: true,
      data: [
        {y: '2001 Q1', item1: 2666},
        {y: '2002 Q2', item1: 2778},
        {y: '2003 Q3', item1: 4912},
        {y: '2004 Q4', item1: 3767},
        {y: '2005 Q1', item1: 6810},
        {y: '2006 Q2', item1: 5670},
        {y: '2007 Q3', item1: 4820},
        {y: '2008 Q4', item1: 15073},
        {y: '2009 Q1', item1: 10687},
        {y: '2010 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#4d1232'],
      hideHover: 'auto'
    });
    
    var line1 = new Morris.Line({
      element: 'weightreport',
      resize: true,
      data: [
        {y: '2001 Q1', item1: 2666},
        {y: '2002 Q2', item1: 2778},
        {y: '2003 Q3', item1: 4912},
        {y: '2004 Q4', item1: 3767},
        {y: '2005 Q1', item1: 6810},
        {y: '2006 Q2', item1: 5670},
        {y: '2007 Q3', item1: 4820},
        {y: '2008 Q4', item1: 15073},
        {y: '2009 Q1', item1: 10687},
        {y: '2010 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#4d1232'],
      hideHover: 'auto'
    });

    var line2 = new Morris.Line({
      element: 'waistreport',
      resize: true,
      data: [
        {y: '2001 Q1', item1: 2666},
        {y: '2002 Q2', item1: 2778},
        {y: '2003 Q3', item1: 4912},
        {y: '2004 Q4', item1: 3767},
        {y: '2005 Q1', item1: 6810},
        {y: '2006 Q2', item1: 5670},
        {y: '2007 Q3', item1: 4820},
        {y: '2008 Q4', item1: 15073},
        {y: '2009 Q1', item1: 10687},
        {y: '2010 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#4d1232'],
      hideHover: 'auto'
    });

    var line3 = new Morris.Line({
      element: 'heightreport',
      resize: true,
      data: [
        {y: '2001 Q1', item1: 2666},
        {y: '2002 Q2', item1: 2778},
        {y: '2003 Q3', item1: 4912},
        {y: '2004 Q4', item1: 3767},
        {y: '2005 Q1', item1: 6810},
        {y: '2006 Q2', item1: 5670},
        {y: '2007 Q3', item1: 4820},
        {y: '2008 Q4', item1: 15073},
        {y: '2009 Q1', item1: 10687},
        {y: '2010 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#4d1232'],
      hideHover: 'auto'
    });

    var line4 = new Morris.Line({
      element: 'chestreport',
      resize: true,
      data: [
        {y: '2001 Q1', item1: 2666},
        {y: '2002 Q2', item1: 2778},
        {y: '2003 Q3', item1: 4912},
        {y: '2004 Q4', item1: 3767},
        {y: '2005 Q1', item1: 6810},
        {y: '2006 Q2', item1: 5670},
        {y: '2007 Q3', item1: 4820},
        {y: '2008 Q4', item1: 15073},
        {y: '2009 Q1', item1: 10687},
        {y: '2010 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#4d1232'],
      hideHover: 'auto'
    });

  });
  ", \yii\web\View::POS_END);
?>
