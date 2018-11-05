<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Change Password
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <div class="tab-content">
              <h3>Change Password</h3>
           <?php $form = ActiveForm::begin([
              'id'=>'',
              'options'=>[
                'class' => 'form-horizontal',
                  'role'=>'form',
                  ],
                ]); ?>
                <div class="form-group">
                  <label class="col-sm-3 control-label">New Password</label>
                  <div class="col-sm-7">
                    <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Retype New Password</label>
                  <div class="col-sm-7">
                    <?= $form->field($model,'username')->textInput(['type'=>'password'])->label(false) ; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Old Password</label>
                  <div class="col-sm-7">
                    <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-7">
                    <?= Html::submitButton('Change Password',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'addrecord']);?>
                  </div>
                </div>
              <?php ActiveForm::end(); ?>
            </div>
            </div>
          </div>
            <div class="clearfix"></div>
        </div>
    </section>
  </div>
  