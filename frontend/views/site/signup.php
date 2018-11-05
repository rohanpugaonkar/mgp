<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?php  $form->field($model, 'role')->dropDownList(['a' => 'Owner', 'b' => 'Member']); ?>

                <?php // $form->field($model, 'role')->textInput() ?>
                <?= $form->field($model, 'gymname')->textInput() ?>
                <?= $form->field($model, 'gymowner')->textInput() ?>
                <?= $form->field($model, 'mobile')->textInput() ?>      
				<?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
				<?= $form->field($model, 'address')->textInput() ?>      
				<?= $form->field($model, 'pincode')->textInput() ?>      
				<?= $form->field($model, 'city')->textInput() ?>      
				<?= $form->field($model, 'state')->textInput() ?>      
				<?= $form->field($model, 'country')->textInput() ?>      

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
