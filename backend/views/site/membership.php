<?php

/* @var $this yii\web\View */

$this->title = 'Membership';
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Membership
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#membershiplist" data-toggle="tab"><i class="fa fa-list"></i> Membership List</a></li>
              <li><a href="#addmembership" data-toggle="tab"><i class="fa fa-plus-circle"></i> Add Membership</a></li> 
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="membershiplist">
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Photo</th>
                          <th>Membership Name</th>
                          <th>Membership Period</th>
                          <th>Installment Plan</th>
                          <th>Signup Fee</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_membership"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id="remove"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar2.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar3.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar4.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar5.png" alt="User Image"></td>
                      <td>Vijay Bhosale</td>
                      <td>365</td>
                      <td>1000 Month</td>
                      <td><i class="fa fa-rupee"></i> 1000</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane" id="addmembership">
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
                    <label class="col-sm-2 control-label">Membership Name</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Category</label>
                    <div class="col-sm-8">
                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'1 Year','2'=>'Weekly'],['class'=>'form-control', 'prompt'=>'Select Membership Category',])->label(false) ?>
                    </div>
                    <div class="col-sm-2">
                      <?= Html::a( 'Add Or Remove', ['#'],['class'=>'btn bg-orange btn-flat margin-0 pull-right', 'data-toggle'=>'modal', 'data-target' => '#addremove']);?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Period</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username')->textInput(['placeholder' => 'Enter Total Number Of Days'])->label(false); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Limit</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username')->inline(true)->radioList(array(1=>'limited',2=>'unlimited'),['name' => 'limit'])->label(false); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership amount</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Installment Plan</label>
                     <div class="col-sm-2">
                      <?= $form->field($model, 'username')->textInput(['placeholder' => 'Amount'])->label(false); ?>
                    </div>
                    <div class="col-sm-6">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'month'],['class'=>'form-control', 'prompt'=>'Select Installment Plan',])->label(false) ?>
                    </div>
                    <div class="col-sm-2">
                       <?= Html::a( 'Add Or Remove', ['#'],['class'=>'btn bg-orange btn-flat margin-0 pull-right', 'data-toggle'=>'modal', 'data-target' => '#addinstallmentplan']);?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Signup Fee</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Membership Image</label>
                    <div class="col-sm-3">
                      <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                      <br/>
                      <?= Html::img('', ['class' => 'img-responsive', 'id' => 'img-upload']);?>
                    </div>
                    <div class="col-sm-3">
                        <?= $form->field($model,'username', ['template' => "<div class='file btn btn-md bg-orange btn-file'><i class='fa fa-upload'></i> Upload Image{input}</div>"])->fileInput(['id'=>'imgInp'])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add Membership',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'addrecord']);?>
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
  <div id="addremove" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Add Membership Category</h4>
      </div>
      <div class="modal-body">
        <div class="category-list">
          <div class="table-responsive">
            <table class="table table-hover">
          <thead>
            <tr>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
            <tr>
              <td>1 Year</td>
              <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
            </tr>
          </tbody>
            </table>
          </div>
        </div>
        <hr/>
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
              <label class="col-sm-3 control-label">Category Name</label>
              <div class="col-sm-5">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
              <div class="col-md-3">
                  <button type="button" class="btn bg-navy btn-flat margin-0 pull-right">Add Category</button>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
    </div>
  </div>
  <div id="addinstallmentplan" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Installment Plan</h4>
        </div>
        <div class="modal-body">
          <div class="category-list">
            <div class="table-responsive">
              <table class="table table-hover">
            <thead>
              <tr>
                <th>Plan Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
              <tr>
                <td>1 Year</td>
                <td><button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button></td>
              </tr>
            </tbody>
              </table>
            </div>
          </div>
          <hr/>
           <?php $form = ActiveForm::begin([
                'id'=>'',
                'options'=>[
                  'class' => 'form-horizontal',
                    'role'=>'form',
                ],
              ]); ?>
              <div class="form-group">
                <label class="col-sm-4 control-label">Installment Plan Name</label>
                <div class="col-sm-5">
                  <?= $form->field($model, 'username')->textInput(['placeholder' => ''])->label(false); ?>
                </div>
                <div class="col-md-3">
                    <?= Html::submitButton('Add Plan',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                </div>
              </div>
           <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
  </div>

  <div id="edit_membership" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Membership</h4>
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
                <label class="col-sm-4 control-label">Membership Name</label>
                <div class="col-sm-8">
                  <?= $form->field($model, 'username')->textInput(['placeholder' => ''])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Membership Category</label>
                <div class="col-sm-8">
                  <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'1 Year', '2'=>'Weekly'],['class'=>'form-control', 'prompt'=>'Select Membership Category',])->label(false) ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Membership Period</label>
                <div class="col-sm-8">
                  <?= $form->field($model, 'username')->textInput(['placeholder' => 'Enter Total Number Of Days'])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Membership Limit</label>
                <div class="col-sm-8">
                  <?= $form->field($model, 'username')->inline(true)->radioList(array(1=>'limited',2=>'unlimited'),['name' => 'limit'])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Membership amount</label>
                <div class="col-sm-8">
                 <?= $form->field($model, 'username')->textInput(['placeholder' => ''])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Installment Plan</label>
                 <div class="col-sm-3">
                  <?= $form->field($model, 'username')->textInput(['placeholder' => 'amount'])->label(false); ?>
                </div>
                <div class="col-sm-5">
                  <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Month'],['class'=>'form-control', 'prompt'=>'Select Installment Plan',])->label(false) ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Signup Fee</label>
                <div class="col-sm-8">
                  <?= $form->field($model, 'username')->textInput(['placeholder' => ''])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Membership Image</label>
                <div class="col-sm-4">
                   <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                      <br/>
                      <?= Html::img('', ['class' => 'img-responsive', 'id' => 'edit-img-upload']);?>
                </div>
                <div class="col-sm-3">
                    <?= $form->field($model,'username', ['template' => "<div class='file btn btn-md bg-orange btn-file'><i class='fa fa-upload'></i> Upload Image{input}</div>"])->fileInput(['id'=>'editimgInp'])->label(false) ; ?>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                  <?= Html::submitButton('Update Membership',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'update']);?>
                </div>
              </div>
            <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
  </div>
