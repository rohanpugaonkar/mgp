<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
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
              <li class="active"><a href="#dietplan" data-toggle="tab" class="c-yellow"><i class="fa fa-plus-circle"></i> Diet Plan List</a></li>
              <li><a href="#addnutrition" data-toggle="tab" class="c-blue"><i class="fa fa-plus-circle"></i> Add Diet Plan</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="dietplan">
                <h3>Diet Plan List</h3>
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped diettable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Food Type</th>
                          <th>Name Of Food Stuff</th>
                          <th>Quantity</th>
                          <th>Energy(Kcal)</th>
                          <th>Protein(gm)</th>
                          <th>Fat(gm)</th>
                          <th>Fiber(gm)</th>
                          <th>Carbs(gm)</th>
                          <th>calcium(gm)</th>
                          <th>Iron(gm)</th>
                          <th>Phpphorusos(mg)</th>
                          <th>Minerals(mg)</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Sugars</td>
                      <td>Sugar Cane</td>
                      <td>100gm</td>
                      <td>900</td>
                      <td>0</td>
                      <td>100</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editdietplan"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id="remove"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Sugars</td>
                      <td>Sugar Cane</td>
                      <td>100gm</td>
                      <td>900</td>
                      <td>0</td>
                      <td>100</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editdietplan"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Sugars</td>
                      <td>Sugar Cane</td>
                      <td>100gm</td>
                      <td>900</td>
                      <td>0</td>
                      <td>100</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>0</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editdietplan"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane" id="addnutrition">
                <h3>Add Diet Plan</h3>
                 <?php $form = ActiveForm::begin([
                'id'=>'',
                'options'=>[
                  'class' => 'form-horizontal',
                    'role'=>'form',
                ],
              ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Select Food Type</label>
                    <div class="col-sm-7">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Sugars','2'=>'Beverages(alcoholic)'],['class'=>'form-control', 'prompt'=>'Select Food Type',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name Of Food Stuff</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Quantity</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Energy(Kcal)</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kcal</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Protein(gm)</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fat(gm)</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fiber(gm)</label>
                    <div class="col-sm-7">
                       <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Carbs(gm)</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Calcium(gm)</label>
                    <div class="col-sm-7">
                       <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Iron(gm)</label>
                    <div class="col-sm-7">
                       <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Phpphorusos(gm)</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Minerals(gm)</label>
                    <div class="col-sm-7">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-7">
                      <?= Html::submitButton('Add Diet Plan',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'addrecord']);?>
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

<div id="editdietplan" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Diet Plan</h4>
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
            <label class="col-sm-4 control-label">Select Food Type</label>
            <div class="col-sm-8">
               <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Sugars','2'=>'Beverages(alcoholic)'],['class'=>'form-control', 'prompt'=>'Select Food Type',])->label(false) ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Name Of Food Stuff</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Quantity</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Energy(Kcal)</label>
            <div class="col-sm-8">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kcal</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Protein(gm)</label>
            <div class="col-sm-8">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Fat(gm)</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Fiber(gm)</label>
            <div class="col-sm-8">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Carbs(gm)</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Calcium(gm)</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Iron(gm)</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Phpphorusos(gm)</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Minerals(gm)</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>gm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
              <?= Html::submitButton('Update Diet Plan',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'update']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>
