<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="top-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><?= Html::a( '<i class="fa fa-home"></i> Home', ['site/index']);?></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  
</section>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-title">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2>Contact Us</h2>
                            <span><?= Html::img('@web/img/logob.png', ['alt' => 'img']);?></span><br/>
                            <span><?= Html::img('@web/img/logob.png', ['alt' => 'img', 'class' => 'sec']);?></span>
                        </div>
                    </div>
                </div>
                <div class="contact-inner">
                    <div class="clearfix">
                        <div class="info-column col-xs-12 col-sm-5 col-md-4">
                            <div class="inner-column">
                                <div class="upper-box">
                                    <ul class="list-style-three">
                                        <li><?= Html::img('@web/img/icons/globe.png', ['alt' => 'globe']);?><strong>Call Us: </strong>8286380220</li>
                                        <li><?= Html::img('@web/img/icons/mail.png', ['alt' => 'mail']);?><strong>Mail Us: </strong>support@mygympartner.in</li>
                                        <li><?= Html::img('@web/img/icons/location.png', ['alt' => 'location']);?><strong>Address: </strong>Panvel, Navi Mumbai, Maharashtra 400614</li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <div class="lower-inner">
                                        <h3>Vijay Bhosale</h3>
                                        <div class="designation">Director</div>
                                        <div class="emailed">support@mygympartner.in</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-column col-xs-12 col-sm-7 col-md-8">
                            <div class="inner-column">
                                <div class="contact-form">
                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Name', 'name' => 'name'])->label(false); ?>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?= $form->field($model, 'email')->textInput(['autofocus' => false, 'placeholder' => 'E-Mail', 'name' => 'email'])->label(false); ?>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Phone', 'name' => 'phone'])->label(false); ?>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Company', 'name' => 'company'])->label(false); ?>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <?= $form->field($model, 'body')->textArea(['autofocus' => false, 'placeholder' => 'Message', 'name' => 'message'])->label(false); ?>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                                    'template' => '<div class="row"><div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><label>Enter Captcha</label>{input}</div><div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">{image}</div></div>',
                                                ])->label(false); ?>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <?= Html::submitButton('Submit', ['class' => 'tem-btn', 'name' => 'submit-form']) ?>
                                            </div>                                                  
                                        </div>
                                     <?php ActiveForm::end(); ?>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
