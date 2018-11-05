<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Workout Scheduler
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <!-- <li class="active"><a href="#workoutlist" data-toggle="tab" id="workoutlistt"><i class="fa fa-list"></i> Workout List</a></li> -->
              
              <li class="active"><a href="#addmusclegroup" data-toggle="tab"><i class="fa fa-plus-circle"></i> Add Muscle Group</a></li>
              <li><a href="#addmusclewiseexercise" data-toggle="tab"><i class="fa fa-plus-circle"></i> Add Muscle Wise Exercise</a></li>
              <li><a href="#cardio" data-toggle="tab"><i class="fa fa-plus-circle"></i> Cardio</a></li>
              <li><a href="#assignworkout" data-toggle="tab"><i class="fa fa-plus-circle"></i> Assign Workout</a></li>
              <li><a href="#function_core" data-toggle="tab"><i class="fa fa-plus-circle"></i> Functional & Core</a></li>
              <!-- <li><a href="#viewworkout" data-toggle="tab"><i class="fa fa-eye"></i> View Workout</a></li> -->
            </ul>
            <div class="tab-content">
              <!-- <div class="tab-pane active" id="workoutlist">
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th>Photo</th>
                          <th>Member Name</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                      <td>
                        <a href="#" class="btn bg-navy btn-flat margin" onclick="$('#viewworkoutt').trigger('click')"><i class="fa fa-eye"></i> View</a>
                        <button type="button" id="view_workout" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar2.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                       <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar3.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                       <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar4.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar5.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar4.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar5.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar4.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    <tr>
                      <td><img class="img-circle t-img" src="img/avatar5.png" alt="User Image"></td>
                      <td>Vijay Patel</td>
                      <td>9586985652</td>
                      <td>vijaypatel@gmail.com</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin"><i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn bg-white btn-flat margin">View Workout</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                  </div>
              </div> -->
              <div class="tab-pane active" id="addmusclegroup">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Muscle Group Name</label>
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
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Anatomy Images</label>
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
                          <th>Muscle Group Name</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>bicep</td>
                      <td>Some text here</td>
                      <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editmusclegrp"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id="remove"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>back</td>
                      <td>Some text here</td>
                      <td><img class="img-circle t-img" src="img/avatar2.png" alt="User Image"></td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editmusclegrp"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
              </div>
              <div class="tab-pane" id="addmusclewiseexercise">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Select Muscle Group</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Chest','2'=>'Biceps'],['class'=>'form-control', 'prompt'=>'Select Muscle Group',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Exercise Name</label>
                    <div class="col-sm-10">
                       <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Unit</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Set','2'=>'Reps'],['class'=>'form-control', 'multiple' => 'true', 'prompt'=>'Select Unit',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                       <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Exercise Image</label>
                    <div class="col-sm-3">
                       <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                      <br/>
                      <?= Html::img('', ['class' => 'img-responsive', 'id' => '']);?>
                    </div>
                    <div class="col-sm-3">
                        <?= $form->field($model,'username', ['template' => "<div class='file btn btn-md bg-orange btn-file'><i class='fa fa-upload'></i> Upload Image{input}</div>"])->fileInput(['id'=>''])->label(false) ; ?>
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
                          <th>Muscle Group Name</th>
                          <th>exercise Name</th>
                          <th>Unit</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>bicep</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editmusclewiseexercise"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>bicep</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editmusclewiseexercise"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
              </div>
              <div class="tab-pane" id="cardio">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Equipment Name</label>
                    <div class="col-sm-10">
                       <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Unit</label>
                    <div class="col-sm-10">
                      <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'distance','2'=>'Duration'],['class'=>'form-control', 'prompt'=>'Select Unit',])->label(false) ?>
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
                          <th>Equipment Name</th>
                          <th>Unit</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>bicep</td>
                      <td>Distance</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editcardio"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>bicep</td>
                      <td>Distance</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editcardio"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
              </div>
              <div class="tab-pane" id="assignworkout">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Member</label>
                    <div class="col-sm-10">
                       <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'John Doe - Wef345','2'=>'John Doe - Wef345'],['class'=>'form-control', 'prompt'=>'Select Member',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Level</label>
                    <div class="col-sm-10">
                        <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Intermediate Level','2'=>'Intermediate Level'],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
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
                  <div class="clearfix"></div> <hr/>
                  <div class="form-group">
                    <label class="col-sm-1"></label>
                    <div class="col-sm-2">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat-red"> Sunday
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat-red"> Monday
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat-red"> Tuesday
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat-red"> Wednesday
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat-red"> Thursday
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat-red"> Friday
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="flat-red"> Saturday
                        </label>
                      </div>
                   </div>
                   <div class="col-sm-9">
                      <div class="exercises">
                          <div class="block">
                              <h4>Cardio</h4>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Equipment Name</label>
                                <div class="col-sm-8">
                                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Duration</label>
                                <div class="col-sm-8">
                                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Distance</label>
                                <div class="col-sm-8">
                                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                                </div>
                              </div>
                              <div class="col-sm-offset-3 col-sm-8">
                                <button type="button" class="btn bg-navy btn-flat margin-0">Add Equipment</button>
                              </div>
                          </div>
                          <div class="block">
                              <h4>Weight Training</h4>
                               <div class="form-group">
                                  <label class="col-sm-3 control-label">Select Muscle Group</label>
                                  <div class="col-sm-8">
                                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Chest','2'=>'Biceps'],['class'=>'form-control', 'multiple' =>'true', 'prompt'=>'Select Muscle Group'])->label(false) ?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Select Excercise</label>
                                  <div class="col-sm-8">
                                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Exercise1','2'=>'Exercise2'],['class'=>'form-control', 'multiple' =>'true', 'prompt'=>'Select Excercise'])->label(false) ?>
                                  </div>
                                </div>
                              <!-- <div class="checkbox">
                                <label>
                                  <input type="checkbox" class="flat-red"> <strong>Crunch</strong>
                                </label>
                              </div> -->
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Sets</label>
                                <div class="col-sm-8">
                                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                                 </div> 
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Reps</label>
                                <div class="col-sm-8">
                                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                                 </div> 
                              </div>
                              <div class="col-sm-offset-3 col-sm-8">
                                <?= Html::Button('Add Muscle Group',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                              </div>
                          </div>
                          <div class="block">
                              <h4>Functional & Core</h4>
                              <div class="form-group">
                                  <label class="col-sm-3 control-label">Select Type</label>
                                  <div class="col-sm-8">
                                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Type1','2'=>'Type2'],['class'=>'form-control', 'multiple' =>'true', 'prompt'=>'Select Type'])->label(false) ?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Select Excercise</label>
                                  <div class="col-sm-8">
                                    <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Exercise1','2'=>'Exercise2'],['class'=>'form-control', 'multiple' =>'true', 'prompt'=>'Select Excercise'])->label(false) ?>
                                  </div>
                                </div>
                              <!-- <div class="checkbox">
                                <label>
                                  <input type="checkbox" class="flat-red"> <strong>Crunch</strong>
                                </label>
                              </div> -->
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Sets</label>
                                <div class="col-sm-8">
                                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                                 </div> 
                              </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Reps</label>
                                <div class="col-sm-8">
                                  <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
                                 </div> 
                              </div>
                              <div class="col-sm-offset-3 col-sm-8">
                                <?= Html::Button('Add Type',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                              </div>
                          </div>
                      </div>
                   </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?= Html::Button('Step 1 - Add Workout',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                    </div>
                  </div>
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <div class="col-md-4">
                      <h4>Monday, Wednesday, Friday</h4>
                    </div>
                    <div class="col-md-8 col-m">
                      <p>Crunch Sets 4 Reps 10 KG 100 Rest Time 2</p>
                      <p>Hyperextension Sets 4 Reps 10 KG 100 Rest Time 2</p>
                    </div>
                  </div>
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     <div class="col-md-4">
                      <h4>Monday, Wednesday, Friday</h4>
                    </div>
                    <div class="col-md-8 col-m">
                      <p>Crunch Sets 4 Reps 10 KG 100 Rest Time 2</p>
                      <p>Hyperextension Sets 4 Reps 10 KG 100 Rest Time 2</p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                       <?= Html::submitButton('Save Workout',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
                    </div>
                  </div>
                <?php ActiveForm::end(); ?>
                <br/>
                <div class="table-responsive no-padding">
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Member Name</th>
                        <th>Level</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End date</th>
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
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editworkout"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editworkout"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="function_core">
                 <?php $form = ActiveForm::begin([
                    'id'=>'',
                    'options'=>[
                      'class' => 'form-horizontal',
                        'role'=>'form',
                    ],
                  ]); ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Exercise Name</label>
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
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Image</label>
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
                          <th>Exercise Name</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Some text here</td>
                      <td>Some text here</td>
                      <td><img class="img-circle t-img" src="img/avatar.png" alt="User Image"></td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editfunctional_core"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin" id=""><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>back</td>
                      <td>Some text here</td>
                      <td><img class="img-circle t-img" src="img/avatar2.png" alt="User Image"></td>
                      <td>
                        <button type="button" class="btn bg-navy btn-flat margin" data-toggle="modal" data-target="#editfunctional_core"><i class="fa fa-pencil"></i> Edit</button>
                        <button type="button" class="btn bg-white btn-flat margin"><i class="fa fa-times"></i> Delete</button>
                      </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
              </div>
              <!-- <div class="tab-pane" id="viewworkout">
                <div class="workout">
                    <h4>John Doe's workout</h4>
                     <form class="form-horizotal">
                      <div class="form-group">
                        <label class="col-sm-1 control-label">Date</label>
                        <div class="col-sm-5">
                         <input type="date" class="form-control">
                        </div>
                        <div class="col-sm-5">
                         <button type="button" class="btn bg-navy btn-flat margin-0">View Workout</button>
                        </div>
                      </div>
                      </form>
                    <div class="workouts">
                      <div class="block">
                        <h4>Leg Curl</h4>
                        <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div>
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div> 
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div> 
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div>  
                      </div>
                      <div class="block">
                        <h4>Crunch</h4>
                        <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div>
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div> 
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div> 
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div>  
                      </div>
                      <div class="block">
                        <h4>Hyperextension</h4>
                        <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div>
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div> 
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div> 
                         <div class="col-md-5">
                          <button type="button" class="btn bg-orange btn-flat"><span class="badge">1</span> 10Kg </button> 10
                        </div>  
                      </div>
                    </div>
                </div>
              </div> -->
              <div class="clearfix"></div>
            </div>
        </div>
      </div>
    </section>
  </div>
 


<div id="editmusclegrp" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Muscle Group</h4>
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
            <label class="col-sm-4 control-label">Muscle Group Name</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Description</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Anatomy Images</label>
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
              <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'Update']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editmusclewiseexercise" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Muscle Wise Exercise</h4>
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
              <label class="col-sm-4 control-label">Select Muscle Group</label>
              <div class="col-sm-8">
                <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Chest','2'=>'Biceps'],['class'=>'form-control', 'prompt'=>'Select Muscle Group',])->label(false) ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Exercise Name</label>
              <div class="col-sm-8">
                 <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Unit</label>
              <div class="col-sm-8">
                 <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Set','2'=>'Reps'],['class'=>'form-control', 'multiple' => 'true', 'prompt'=>'Select Unit',])->label(false) ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Description</label>
              <div class="col-sm-8">
                 <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Exercise Image</label>
              <div class="col-sm-4">
                <?= $form->field($model, 'username')->textInput(['name' => ''])->label(false); ?>
                <br/>
                <?= Html::img('', ['class' => 'img-responsive', 'id' => 'img-upload']);?>
              </div>
              <div class="col-sm-3">
                  <?= $form->field($model,'username', ['template' => "<div class='file btn btn-md bg-orange btn-file'><i class='fa fa-upload'></i> Upload Image{input}</div>"])->fileInput(['id'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
               <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editcardio" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Cardio</h4>
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
              <label class="col-sm-3 control-label">Equipment Name</label>
              <div class="col-sm-9">
                 <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Unit</label>
              <div class="col-sm-9">
                <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Distance','2'=>'Duration'],['class'=>'form-control', 'prompt'=>'Select Unit',])->label(false) ?>
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

<div id="editworkout" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Workout</h4>
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
              <label class="col-sm-3 control-label">Member</label>
              <div class="col-sm-9">
               <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'John Doe - Wef345','2'=>'John Doe - Wef345'],['class'=>'form-control', 'prompt'=>'Select Member',])->label(false) ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Level</label>
              <div class="col-sm-9">
                <?= $form->field($model, 'username', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Intermediate Level','2'=>'Intermediate Level'],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Description</label>
              <div class="col-sm-9">
                <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
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
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-8">
                <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
              </div>
            </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

<div id="editfunctional_core" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Functional & core</h4>
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
            <label class="col-sm-4 control-label">Exercise Name</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Description</label>
            <div class="col-sm-8">
               <?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Image</label>
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
              <?= Html::submitButton('Update',['class' => 'btn bg-navy btn-flat margin-0', 'id' => '']);?>
            </div>
          </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>

