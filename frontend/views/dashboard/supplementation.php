<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Supplementation
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#intaketype" data-toggle="tab" class="c-yellow"><i class="fa fa-plus-circle"></i> Intake Type</a></li>
              <li><a href="#supplementationcategory" data-toggle="tab" class="c-blue"><i class="fa fa-plus-circle"></i> Supplementation Category</a></li>
              <li><a href="#assignsuppliments" data-toggle="tab" class="c-red"><i class="fa fa-plus-circle"></i> Assign Supplements</a></li>
            </ul>
           <div class="tab-content">
              <div class="tab-pane active" id="intaketype">
                <h3>Intake Type</h3>
                <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Intake Type Name</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'addrecord']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Intake Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Pre Workout</td>
                      <td>
                          <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editintaketype"><i class="fa fa-pencil"></i> Edit</button>
                          <button type="button" class="btn bg-white btn-flat margin" id="remove"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Pre Workout</td>
                      <td>
                          <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                          <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Pre Workout</td>
                      <td>
                          <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                          <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Pre Workout</td>
                      <td>
                          <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                          <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    </tbody>
                    </table>
                </div>
              </div>
              <div class="tab-pane" id="supplementationcategory">
                <h3>Supplementation Category</h3>
                <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"> Intake Type</label>
                    <div class="col-sm-10">      
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Post Workout','2'=>'Pre Workout'],['class'=>'form-control', 'prompt'=>'Select Intake Type',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Add Supplements</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Intake Type</th>
                          <th>Supplement Name</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Pre Workout</td>
                      <td>BCAA</td>
                      <td>Some text here</td>
                      <td>
                          <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editsupplementationcategory"><i class="fa fa-pencil"></i> Edit</button>
                          <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Pre Workout</td>
                      <td>BCAA</td>
                      <td>Some text here</td>
                      <td>
                          <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                          <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Pre Workout</td>
                      <td>BCAA</td>
                      <td>Some text here</td>
                      <td>
                          <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                          <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td> 
                    </tr>
                    </tbody>
                    </table>
                </div>
              </div>
              <div class="tab-pane" id="assignsuppliments">
                 <h3>Assign Supplements</h3>
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"> Select Member</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Vijay Bhosale','2'=>'Vijay Bhosale'],['class'=>'form-control', 'prompt'=>'Select Member',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Duration</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Start Date</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">End Date</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Intake Type</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Post Workout','2'=>'Pre Workout'],['class'=>'form-control', 'prompt'=>'Select Intake Type',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Supplement</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Intake Time</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Note</label>
                    <div class="col-sm-10">
                       <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Save Supplement',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Supplement</th>
                          <th>Intake Time</th>
                          <th>Quantity</th>
                          <th>Note</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>caffiene</td>
                      <td>10 min before workout</td>
                      <td>1 capsule - 220mg/180mg</td>
                      <td>Don’t do late nigh workout with caffiene</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editsupplements"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>caffiene</td>
                      <td>10 min before workout</td>
                      <td>1 capsule - 220mg/180mg</td>
                      <td>Don’t do late nigh workout with caffiene</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>caffiene</td>
                      <td>10 min before workout</td>
                      <td>1 capsule - 220mg/180mg</td>
                      <td>Don’t do late nigh workout with caffiene</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
              </div>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
 

<div id="editintaketype" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Intake Type</h4>
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
            <label class="col-sm-3 control-label">Intake Type Name</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
              <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'update']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editsupplementationcategory" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Supplementation Category</h4>
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
                <label class="col-sm-3 control-label"> Intake Type</label>
                <div class="col-sm-9">
                  <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Post Workout','2'=>'Pre Workout'],['class'=>'form-control', 'prompt'=>'Select Intake Type',])->label(false) ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Add Supplements</label>
                <div class="col-sm-9">
                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Description</label>
                <div class="col-sm-9">
                  <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                </div>
              </div>
            <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editsupplements" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Supplement</h4>
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
              <label class="col-sm-3 control-label"> Select Member</label>
              <div class="col-sm-9">
               <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Vijay Bhosale','2'=>'Vijay Bhosale'],['class'=>'form-control', 'prompt'=>'Select Member',])->label(false) ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Duration</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Start Date</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">End Date</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Intake Type</label>
              <div class="col-sm-9">
                <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Pre-Workout','2'=>'Intra-Workout'],['class'=>'form-control', 'prompt'=>'Select Intake Type',])->label(false) ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Supplement</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Intake Time</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Note</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <?= Html::submitButton('Update Supplement',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

