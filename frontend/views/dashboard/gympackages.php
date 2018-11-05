<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Gym Packages
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#packagelist" data-toggle="tab" class="c-yellow"><i class="fa fa-list"></i> Package List</a></li>
              <li><a href="#addgympackage" data-toggle="tab" class="c-blue"><i class="fa fa-plus-circle"></i> Add Gym Package</a></li> 
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="packagelist">
                <div class="box-body no-padding">
                	<div class="table-responsive ">
                  <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Package Name</th>
                          <th>Package Period</th>
                          <th>Installment Plan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>Gold</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_package"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id="remove"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td>Gold</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_package"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id="remove"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    </tr>
                    </tbody>
                    </table>
                </div>
                    <div class="clearfix"></div>
                  </div>
              </div>
              <div class="tab-pane" id="addgympackage">
                <?php $form = ActiveForm::begin([
                'id'=>'',
                'enableAjaxValidation'=>true,
                'enableClientValidation'=>true,
                'validationUrl' => '',
                'options'=>[
                  'class' => 'form-horizontal',
                    'role'=>'form',
                ],
              ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Package Name</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Gold','2'=>'Platinum'],['class'=>'form-control', 'prompt'=>'Select Package',])->label(false) ?>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Package Period</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username')->textInput(['placeholder' => ''])->label(false); ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Package amount</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                    </div>
                  </div>
                  
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add Package',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'addrecord']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
              </div>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
</div>
 

  <div id="edit_package" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Gym Package</h4>
        </div>
        <div class="modal-body">
            <?php $form = ActiveForm::begin([
                'id'=>'',
                'options'=>[
                  'class' => 'form-horizontal',
                    'role'=>'form',
                ],
              ]); ?>
              <div class="form-group">
                    <label class="col-sm-3 control-label">Package Name</label>
                    <div class="col-sm-9">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Gold','2'=>'Platinum'],['class'=>'form-control', 'prompt'=>'Select Package',])->label(false) ?>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Package Period</label>
                    <div class="col-sm-9">
                      <?= $form->field($model, 'username')->textInput(['placeholder' => ''])->label(false); ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Package amount</label>
                    <div class="col-sm-9">
                      <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                    </div>
                  </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                  <?= Html::submitButton('Update Package',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'update']);?>
                </div>
              </div>
            <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
  </div>
