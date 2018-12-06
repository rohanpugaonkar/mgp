<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Fitness Tools
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs tabs-pad">
              <li class="active"><a href="#weighttracker" data-toggle="tab">Weight Tracker</a></li>
              <li><a href="#bodycomposition" data-toggle="tab"> Body Composition</a></li>
              <li><a href="#proteincalculator" data-toggle="tab"> Protein Calculator</a></li>
              <li><a href="#cardiovasculartrackers" data-toggle="tab"> Cardio-Vascular Trackers</a></li>
              <li><a href="#fitnessassessment" data-toggle="tab"> fitness Assessment</a></li>
              <li><a href="#maxcalculator" data-toggle="tab"> VO<sub>2</sub> Max Calculator</a></li>
              <li><a href="#milerockport" data-toggle="tab"> 1-mile Rockport Test</a></li>
              <li><a href="#heartratetest" data-toggle="tab"> Heart Rate Test</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="weighttracker">
                <?php $form = ActiveForm::begin([
                'id'=>'',
                'options'=>[
                  'class' => 'form-horizontal',
                    'role'=>'form',
                ],
              ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-6">
                       <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Time</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Weight</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'addrecord']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Weight</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editweighttracker"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id="remove"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editweighttracker"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="bodycomposition">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Weight</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fat(%)</label>
                    <div class="col-sm-6">
                     <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>%</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Muscle Mass</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fat</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BMR</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kcal</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Systolic B.P</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Diastolic B.P</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Weight</th>
                        <th>Fat(%)</th>
                        <th>Muscle Mass</th>
                        <th>Fat</th>
                        <th>BMR</th>
                        <th>Systolic B.P</th>
                        <th>Diastolic B.P</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editbodycomposition"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editbodycomposition"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="proteincalculator">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Fat(%)</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>%</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-sm-2 control-label">Fat</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Muscle Mass(Kg)</label>
                    <div class="col-sm-6">
                     <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Muscle Mass(lbs)</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>lbs</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">BDF</label>
                    <div class="col-sm-6">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'','2'=>''],['class'=>'form-control', 'prompt'=>'Select BDF',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Protein/Day</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                     <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Fat(%)</th>
                        <th>Fat</th>
                        <th>Muscle Mass(Kg)</th>
                        <th>Muscle Mass(lbs)</th>
                        <th>BDF</th>
                        <th>Protein/Day</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editproteincalc"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editproteincalc"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="cardiovasculartrackers">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-6">
                     <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Equipment</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Distance</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Duration</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Equipment</th>
                        <th>Distance</th>
                        <th>Duration</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editcardio_vascular_tracker"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editcardio_vascular_tracker"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="fitnessassessment">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Body Composition</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                         <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Age</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Weight</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Fat(%)</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>%</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Muscle Mass</label>
                            <div class="col-sm-3">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                            <div class="col-sm-3">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>lbs</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Fat Mass</label>
                            <div class="col-sm-3">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                            <div class="col-sm-3">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>lbs</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">BMR</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kcal</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>
                        <br/>
                        <div class="table-responsive no-padding">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Weight(Kg)</th>
                                <th>Fat(%)</th>
                                <th>Muscle Mass</th>
                                <th>Fat Mass</th>
                                <th>BMR(Kcal)</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_body_comp"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_body_comp"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Measurements</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                         <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Neck</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Shoulder</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Deltoid</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Bicep</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Forearm</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Chest-Normal</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Chest-Expanded</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Upper Abdomen</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Lower Abdomen</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Hip</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Glutes</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Hamstring</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Ham-Quadri Mid</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Calf</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                             <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>
                        <br/>
                        <div class="table-responsive no-padding">
                          <table class="table table-hover table-striped measurements">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Neck</th>
                                <th>Shoulder</th>
                                <th>Deltoid</th>
                                <th>Bicep</th>
                                <th>Forearm</th>
                                <th>Chest-Normal</th>
                                <th>Chest-Expanded</th>
                                <th>Upper Abdomen</th>
                                <th>Lower Abdomen</th>
                                <th>Hip</th>
                                <th>Glutes</th>
                                <th>Hamstring</th>
                                <th>Ham-Quadri mid</th>
                                <th>Calf</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td> text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_measurement"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Cardio Vascular Endurance Test</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Distance</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Km</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Time</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Min</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Heart Rate</label>
                            <div class="col-sm-6">
                             <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">VO<sub>2</sub> Max</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>
                        <br/>
                        <div class="table-responsive no-padding">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Distance</th>
                                <th>Time</th>
                                <th>Heart Rate</th>
                                <th>VO<sub>2</sub> Max</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_cardio_test"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        Muscular Endurance Test</a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">
                        <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Square Test</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Push Up Test</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Crunches Test(Knee Bend)</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>
                        <br/>
                        <div class="table-responsive no-padding">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Square Test</th>
                                <th>Push Up Test</th>
                                <th>Crunches Test(Knee Bend)</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_muscular_endurance"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                        Flexibility Test</a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                      <div class="panel-body">
                        <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">1</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">2</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">3</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Mean</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>
                        <br/>
                        <div class="table-responsive no-padding">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>Mean</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_flexibility_test"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                        Balancing Test</a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                      <div class="panel-body">
                        <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">1 Leg Stand</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Min</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                             <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>
                        <br/>
                        <div class="table-responsive no-padding">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>1 Leg Stand</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Some text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_balance_test"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                        Heart Rate Test</a>
                      </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                      <div class="panel-body">
                       <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">RHR</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">MHR</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">HRR</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">THR(65%)</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">THR(75%)</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">THR(85%)</label>
                            <div class="col-sm-6">
                              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>
                        <br/>
                        <div class="table-responsive no-padding">
                          <table class="table table-hover table-striped">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>RHR</th>
                                <th>MHR</th>
                                <th>HRR</th>
                                <th>THR(65%)</th>
                                <th>THR(75%)</th>
                                <th>THR(85%)</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>Some text</td>
                              <td>
                                <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#edit_fitness_heart_rate"><i class="fa fa-pencil"></i> Edit</button>
                                <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                              </td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="maxcalculator">
                <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                       <?= $form->field($model, 'username')->inline(true)->radioList(array(1=>'male',2=>'femele'),['name' => 'gender'])->label(false); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Weight(Kg)</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Weight(lbs)</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>lbs</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Distance</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Duration</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Heart Rate</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">VO<sub>2</sub> Max</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Age</th>
                        <th>Weight(Kg)</th>
                        <th>Weight(lbs)</th>
                        <th>Distance</th>
                        <th>Duration</th>
                        <th>Heart Rate</th>
                        <th>VO<sub>2</sub> Max</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editmaxcalc"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editmaxcalc"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="milerockport">
                <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Distance</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Duration</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Distance</th>
                        <th>Duration</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editrockport_test"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                     <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editrockport_test"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="heartratetest">
                <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">RHR</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">MHR</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">HRR</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">THR(65%)</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">THR(75%)</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">THR(85%)</label>
                    <div class="col-sm-6">
                      <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::submitButton('Add',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Age</th>
                        <th>RHR</th>
                        <th>MHR</th>
                        <th>HRR</th>
                        <th>THR(65%)</th>
                        <th>THR(75%)</th>
                        <th>THR(85%)</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editheart_rate_test"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                     <tr>
                      <td>2</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>Some text</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editheart_rate_test"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
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
  

<div id="editweighttracker" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Weight Tracker</h4>
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
            <label class="col-sm-3 control-label">Date</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">time</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Weight</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
             <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'update']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editbodycomposition" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Body Composition</h4>
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
            <label class="col-sm-3 control-label">Date</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Weight</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Fat(%)</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Muscle Mass</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Fat</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">BMR</label>
            <div class="col-sm-9">
             <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kcal</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Systolic B.P</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Diastolic B.P</label>
            <div class="col-sm-9">
            <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
             <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editproteincalc" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Protein Calculator</h4>
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
              <label class="col-sm-3 control-label">Date</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Fat(%)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Fat</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Muscle Mass(Kg)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Muscle Mass(lbs)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">BDF</label>
              <div class="col-sm-9">
                <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'Select BDF',])->label(false) ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Protein/Day</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editcardio_vascular_tracker" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Cardio Vascular Trackers</h4>
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
            <label class="col-sm-3 control-label">Date</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['type'=>'date'])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Equipment</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Distance</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Duration</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editmaxcalc" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit VO<sub>2</sub> Max Calculator</h4>
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
              <label class="col-sm-3 control-label">Date</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Age</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Gender</label>
              <div class="col-sm-9">
                <?= $form->field($model, 'username')->inline(true)->radioList(array(1=>'male',2=>'femele'),['name' => 'gender'])->label(false); ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Weight(Kg)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Weight(lbs)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Distance</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Duration</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Heart Rate</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">VO<sub>2</sub> Max</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="edit_fitness_body_comp" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Body Composition</h4>
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
            <label class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Age</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Weight</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Fat(%)</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>%</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Muscle Mass</label>
            <div class="col-sm-4">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
            <div class="col-sm-5">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>lbs</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Fat Mass</label>
            <div class="col-sm-4">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kg</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
            <div class="col-sm-5">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>lbs</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">BMR</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kcal</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="edit_fitness_measurement" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Measurement</h4>
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
            <label class="col-sm-3 control-label">Neck</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Shoulder</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Deltoid</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Bicep</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Forearm</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Chest-Normal</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Chest-Expanded</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Upper Abdomen</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Lower Abdomen</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Hip</label>
            <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Glutes</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Hamstring</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Ham-Quadri Mid</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Calf</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="edit_fitness_cardio_test" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Cardio Vascular Endurance Test</h4>
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
              <label class="col-sm-3 control-label">Distance</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Km</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Time</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Min</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Heart Rate</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">VO<sub>2</sub> Max</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="edit_fitness_muscular_endurance" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Muscular Endurance Test</h4>
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
            <label class="col-sm-3 control-label">Square Test</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Push Up Test</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Crunches Test(Knee Bend)</label>
            <div class="col-sm-9">
              <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="edit_fitness_flexibility_test" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Flexibility Test</h4>
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
              <label class="col-sm-3 control-label">1</label>
              <div class="col-sm-9">
                 <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">2</label>
              <div class="col-sm-9">
                 <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">3</label>
              <div class="col-sm-9">
                 <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Mean</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>cm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="edit_fitness_balance_test" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Balancing Test</h4>
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
              <label class="col-sm-3 control-label">1 Leg Stand</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Min</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="edit_fitness_heart_rate" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Heart Rate Test</h4>
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
              <label class="col-sm-3 control-label">RHR</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">MHR</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">HRR</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">THR(65%)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">THR(75%)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">THR(85%)</label>
              <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
               <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editrockport_test" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit 1-Mile Rockport Test</h4>
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
              <label class="col-sm-3 control-label">Date</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Distance</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Duration</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editheart_rate_test" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Heart Rate Test</h4>
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
              <label class="col-sm-3 control-label">Date</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Age</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">RHR</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">MHR</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">HRR</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">THR(65%)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">THR(75%)</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">THR(85%)</label>
              <div class="col-sm-9">
               <?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>bpm</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-10">
               <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' =>'']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>
