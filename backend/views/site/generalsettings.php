<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      General Settings
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="custom-back">
            <?php $form = ActiveForm::begin([
              'id'=>'',
              'options'=>[
                'class' => 'form-horizontal',
                  'role'=>'form',
              ],
            ]); ?>
              <div class="form-group">
                <label class="col-sm-2 control-label">Gym Name</label>
                <div class="col-sm-10">
                  <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Starting Year</label>
                <div class="col-sm-10">
                   <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Gym Address</label>
                <div class="col-sm-10">
                   <?= $form->field($model, 'username')->textarea(['name' => ''])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Official Phone No.</label>
                <div class="col-sm-10">
                   <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Country</label>
                <div class="col-sm-10">
                  <?= $form->field($model, 'warranty_period', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'india','2'=>''],['class'=>'form-control', 'prompt'=>'Select Country',])->label(false) ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Profile Cover Image</label>
                <div class="col-sm-5">
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
                  <?= Html::submitButton('Save',['class' => 'btn bg-navy btn-flat margin-0']);?>
                </div>
              </div>
            <?php ActiveForm::end(); ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  
