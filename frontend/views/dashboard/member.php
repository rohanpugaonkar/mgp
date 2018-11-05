<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Owner profile
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <div class="tab-content">
              <h3>Owner profile</h3>
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
                    <label class="col-sm-3 control-label">Gym Name</label>
                    <div class="col-sm-9">
                      <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Owner Name</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Mobile No.</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email address</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Profile Image</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <br/>
                    <img id='img-upload' class="img-responsive"/>
                  </div>
                  <div class="col-sm-3">
                      <div class="file btn btn-md bg-orange btn-file">
                       <i class="fa fa-upload"></i> Upload Image
                       <input type="file" id="imgInp">
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Address</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username')->textarea(['name' => ''])->label(false); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">State</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'Select State',])->label(false) ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">City</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'Select City',])->label(false) ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Country</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'Select Country',])->label(false) ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Type Of Gym</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'Select Gym Type',])->label(false) ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Pan No.</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Date Of Estblishment</label>
                    <div class="col-sm-9">
                      <?= $form->field($model, 'username')->textInput(['type' => 'date'])->label(false); ?>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Membership Of Package</label>
                  <div class="col-sm-9">
                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Platinum'],['class'=>'form-control', 'prompt'=>'Membership Of Package',])->label(false) ?>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-offset-3 col-sm-9">
                  <?= Html::submitButton('Save',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'addrecord']);?>
                </div>
                <div class="clearfix"></div>
                <?php ActiveForm::end(); ?>
                <div class="member">
                  <h3>Member profile</h3>
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
                        <label class="col-sm-2 control-label">Member Name</label>
                        <div class="col-sm-10">
                          <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                        </div>
                     </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">User Name</label>
                      <div class="col-sm-10">
                        <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Mobile No.</label>
                      <div class="col-sm-10">
                        <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Email address</label>
                      <div class="col-sm-10">
                        <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Profile Image</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control">
                        <br/>
                        <img id='img-upload' class="img-responsive"/>
                      </div>
                      <div class="col-sm-3">
                          <div class="file btn btn-md bg-orange btn-file">
                           <i class="fa fa-upload"></i> Upload Image
                           <input type="file" id="imgInp">
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Address</label>
                      <div class="col-sm-10">
                        <?= $form->field($model, 'username')->textarea(['name' => ''])->label(false); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Gym Name</label>
                      <div class="col-sm-10">
                        <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                      </div>
                    </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Package</label>
                        <div class="col-sm-5">
                          <?= $form->field($model, 'username')->textInput(['type' => 'date', 'placeholder' => 'Start Date'])->label(false); ?>
                        </div>
                        <div class="col-sm-5">
                          <?= $form->field($model, 'username')->textInput(['type' => 'date', 'placeholder' => 'End Date'])->label(false); ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Date Of Birth</label>
                        <div class="col-sm-10">
                          <?= $form->field($model, 'username')->textInput(['type' => 'date', 'placeholder' => ''])->label(false); ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Blood Group</label>
                        <div class="col-sm-10">
                          <?= $form->field($model, 'username')->textInput(['type' => 'date', 'placeholder' => ''])->label(false); ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Special Populations</label>
                        <div class="col-sm-10">
                          <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'Select Populations','multiple' =>'true'])->label(false) ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Height</label>
                        <div class="col-sm-10">
                          <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm/Ft</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-sm-offset-2 col-sm-10">
                        <?= Html::submitButton('Save',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'addrecord']);?>
                     </div>
                  <div class="clearfix"></div>
                <?php ActiveForm::end(); ?>
            
           
              </div>
            </div>
          </div>
       </div>

    </section>
  </div>