<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
 use frontend\models\MgpOwnerGymPackageType;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Owner 
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
                              'id' => 'owner_gym_packages',
                                'role'=>'form',
                            ],
                          ]); ?>
                          
                          <div class="form-group">
                                <label class="col-sm-3 control-label">Package Type</label>
                                <div class="col-sm-9">
                                  <?= $form->field($model, 'package_type_id')->dropDownList(
                                      ArrayHelper::map(MgpOwnerGymPackageType::find()->where(['status'=>1])->all(),'id','package_name'),
                                      ['prompt'=>'Select Package']
                                 )->label(false); 
                                 ?> 
                                </div>
                              </div>

                        
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Duration</label>
                                <div class="col-sm-9">
                                  <?php
                                      $duration_arr = array();
                                     for ($i=1; $i<=12;$i++){
                                        $duration_arr[$i] = $i;
                                     }
                                     echo $form->field($model, 'duration')->dropDownList($duration_arr,['prompt'=>'Select Duration'])->label(false);
                                      
                                 ?> 
                                </div>
                              </div>
                              
                              <div class="form-group" id="ref_no_div">
                                <label class="col-sm-3 control-label">Amount :</label>
                                <div class="col-sm-9">
                                  <?= $form->field($model, 'amount')->textInput(['maxlength' => 255])->label(false); ?>
                                </div>
                              </div>

                              <div class="form-group" id="ref_no_div">
                                <label class="col-sm-3 control-label">Specifications:</label>
                                <div class="col-sm-9">
                                  <?= $form->field($model, 'specifications')->textInput(['maxlength' => 255])->label(false); ?>
                                </div>
                              </div>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                              <?= Html::a('<a onclick="submit_owner_package_info();return false;"><input type="button" class="btn btn-warning" value="Submit"></a>') ?>
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


      function submit_owner_package_info()
      {
          var package_id = $('#mgppayments-package_id').val();   
          var payment_id = $('#mgppayments-payment_method_id').val();   
          var reference_no = $('#mgppayments-reference_no').val();   
          var error = 0;
          if(package_id == ''){
            error = 1;
            $('#mgppayments-package_id').parents('.col-sm-9').find('.help-block-error').html('<span style="color:red;"> Please select Package Type.</span>');
          }else{
            $('#mgppayments-package_id').parents('.col-sm-9').find('.help-block-error').html('');
          }
          if(payment_id == ''){
            error = 1;
            $('#mgppayments-payment_method_id').parents('.col-sm-9').find('.help-block-error').html('<span style="color:red;">Please select Payment Method.</span>');
          }else
          {
            $('#mgppayments-payment_method_id').parents('.col-sm-9').find('.help-block-error').html(''); 
          }

          if(payment_id == 1 || payment_id == 2){   // cash condition
            
            if(reference_no == ''){
                error = 1;
            
              $('#mgppayments-reference_no').parents('.col-sm-9').find('.help-block-error').html('<span style="color:red;">Reference No is required.</span>');
            }else
            {
            
              $('#mgppayments-reference_no').parents('.col-sm-9').find('.help-block-error').html(''); 
            }
          }

          if(error != 1){
              var form_data = $('#owner_gym_packages').serialize();
              var url =   '<?php echo Url::base(true); ?>/site/submit-owner-package-details';
              
              $.ajax({
              url: url, 
              data: form_data, 
              type: "POST", 
              success: function(result){
                    if(result){
                      alert('success');
                      location.reload();
                    }else{
                      alert('failure');
                    }
                }
            });

          }
          
      }
</script>
