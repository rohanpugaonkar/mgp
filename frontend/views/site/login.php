<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


<?php Modal::begin([
    'id' => '',
    'class' => 'modal fade',
    'size' => 'modal-md',
    'header' => '<span>Login</span>',
        ]);
        $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal mygym-modal','id' => 'login'],
        'action'=>'site/login'
    ]);
    ?>

    <?= $form->field($model, 'name')->textInput(['placeholder' => "Username"])->label('Username')?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => "*********"])->label('Password') ?>

    <div class="form-group text-center">
        <?= Html::submitButton('Login', ['class' =>'btn btn-default','id'=>'']) ?>
    </div>
    <?php ActiveForm::end();
        Modal::end();
    ?>



<?php Modal::begin([
    'id' => '',
    'class' => 'modal fade',
    'size' => 'modal-md',
    'header' => '<span>Register Here</span>',
        ]);
        $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal mygym-modal','id' => 'login'],
        'action'=>''
    ]);
    ?>
    <div class="owner box">
        <?= $form->field($model, 'name')->textInput(['placeholder' => "Gym Name"])->label('Gym Name')?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Owner Name"])->label('Owner Name') ?>
        <?= $form->field($model, 'name')->textInput(['placeholder' => "Mobile No."])->label('Mobile No.')?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Email"])->label('Email') ?>
        <?= $form->field($model, 'name')->textInput(['placeholder' => "Username"])->label('Username')?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Password"])->label('*********') ?>
        <?= $form->field($model, 'body')->textArea(['placeholder' => 'Address', 'name' => 'Address'])->label(false); ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Pin Code"])->label('Pin Code') ?>
        <?= $form->field($model, 'name')->textInput(['placeholder' => "City"])->label('City')?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "State"])->label('State') ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Country"])->label('Country') ?>
    </div>
     <div class="member box">
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Member Name"])->label('Member Name') ?>
        <?= $form->field($model, 'name')->textInput(['placeholder' => "Mobile No."])->label('Mobile No.')?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Email"])->label('Email') ?>
        <?= $form->field($model, 'name')->textInput(['placeholder' => "Username"])->label('Username')?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Password"])->label('*********') ?>
        <?= $form->field($model, 'body')->textArea(['placeholder' => 'Address', 'name' => 'Address'])->label(false); ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Pin Code"])->label('Pin Code') ?>
        <?= $form->field($model, 'name')->textInput(['placeholder' => "City"])->label('City')?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "State"])->label('State') ?>
        <?= $form->field($model, 'email')->textInput(['placeholder' => "Country"])->label('Country') ?>
        <?= $form->field($model, '')->dropDownList(['one' => 'Select You Gym', 'two' => 'Gym1'])->label('Select You Gym')?>
    </div>
    <div class="form-group text-center">
        <?= Html::submitButton('Register', ['class' =>'btn btn-default','id'=>'']) ?>
    </div>
    <?php ActiveForm::end();
        Modal::end();
    ?>