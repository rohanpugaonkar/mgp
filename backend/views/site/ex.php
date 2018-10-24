 <?php $form = ActiveForm::begin([
    'id'=>'',
    'options'=>[
      'class' => 'form-horizontal',
        'role'=>'form',
    ],
  ]); ?>


<?php ActiveForm::end(); ?>



<?= $form->field($model,'username', ['addon' => ['prepend' => ['content'=>'Kcl']]])->textInput(['placeholder'=>''])->label(false) ; ?>



<?= $form->field($model,'username')->textarea(['placeholder'=>''])->label(false) ; ?>



<?= $form->field($model,'username')->textInput(['placeholder'=>''])->label(false) ; ?>



<?= Html::submitButton('',['class' => '']);?>



<?= $form->field($model, 'warranty_period', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Months','2'=>'Years'],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>


<?= $form->field($model,'username', ['template' => "<div class='input-group'>{input}<span class='input-group-addon'>Kcal</span></div>"])->textInput(['placeholder'=>''])->label(false) ; ?>

<?= Html::a( 'Add Or Remove', ['#'],['class'=>'btn bg-orange btn-flat margin-0 pull-right', 'data-toggle'=>'modal', 'data-target' => '#addinstallmentplan']);?>