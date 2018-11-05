<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\MgpPaymentMethods;
use frontend\models\MgpPayments;
 use frontend\models\MgpOwnerPackages;
 use frontend\models\MgpAdminPackages;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Payment 
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
           
            <div class="tab-content">
              <div class="tab-pane active" id="packagelist">
                <div class="box-body no-padding">
                	<div class="table-responsive ">
                         <?php $form = ActiveForm::begin([
                            'id'=>'',
                            'options'=>[
                              'class' => 'form-horizontal',
                                'role'=>'form',
                            ],
                          ]); ?>
                          <div class="form-group">
                                <label class="col-sm-3 control-label">Package Type</label>
                                <div class="col-sm-9">
                                  <?= $form->field($model, 'package_id')->dropDownList(
                                      ArrayHelper::map(MgpAdminPackages::find()->where(['status'=>1])->all(),'id','name'),
                                      ['prompt'=>'Select Package']
                                 )->label(false); 
                                 ?> 
                                </div>
                              </div>

                        
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Payment Method</label>
                                <div class="col-sm-9">
                                  <?= $form->field($model, 'payment_method_id')->dropDownList(
                                      ArrayHelper::map(MgpPaymentMethods::find()->where(['status'=>1])->all(),'id','title'),
                                      ['prompt'=>'Select Payment Method','onchange'=>'onchange_payment_selection(this);return false;',]
                                 )->label(false); 
                                 ?> 
                                </div>
                              </div>
                              
                              <div class="form-group" id="ref_no_div" style="display:none;">
                                <label class="col-sm-3 control-label">Reference No:</label>
                                <div class="col-sm-9">
                                  <?= $form->field($model, 'reference_no')->textInput(['maxlength' => 255])->label(false); ?>
                                </div>
                              </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                              <?= Html::submitButton('Update Package',['class' => 'btn bg-navy btn-flat margin-0', 'id' => 'update']);?>
                            </div>
                          </div>
                        <?php ActiveForm::end(); ?>


                </div>
                    <div class="clearfix"></div>
                  </div>
              </div>
              
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){

      

  });

  function onchange_payment_selection(obj)
      {

          var payment_type = obj.value;
          
          if(payment_type == 1 || payment_type == 2){
            alert('if');
              $('#ref_no_div').slideDown();
          }else {
             alert('else');
              $('#ref_no_div').slideUp();
          }
      }
</script>
