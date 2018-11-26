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

<style>

.checkout .extra {
    margin-bottom: 20px;
    overflow: hidden;
    background: #f3f0f0;
    border-radius: 5px;
    padding: 30px;
    box-shadow: 0px 5px 9px #00000096;
}
.bank-details{
  background: #fff;
  padding:10px;
  margin-bottom: 15px;
  display: none;
  overflow: hidden;
}
.google-pay{
  background: #fff;
  padding:10px;
  margin-bottom: 15px;
  display: none;
  overflow: hidden;
}
.credit-card{
  background: #fff;
  padding:10px;
  margin-bottom: 15px;
  display: none;
  overflow: hidden;
}
.checkout h4{
  margin-bottom:10px;
}
</style>
  <div class="content-wrapper" >
    <section class="content-header">
      <h1>
       Payment 
      </h1>
    </section>
 <?php 
                  // var_dump($user_details);
                  if($user_details['admin_package'] == 1){ ?>
                  <div class="table-responsive ">
                    <div class="form-group" style="height: 50px;background-color: #C0C0C0;margin: 0 1%;font-size: 20px;font-weight: bold;">
                        <div class="col-sm-9">
                          Your payment request has been received and will shortly be approved.
                        </div>
                    </div>
                  </div>
                <?php }else{ ?>
<section class="checkout">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
         <?php 
            $form = ActiveForm::begin([
                'id'=>'',
                'options'=>[
                  'class' => 'form-horizontal',
                  'id' => 'package_payment_form',
                    'role'=>'form',
                ],
              ]); ?>
              <?= $form->field($model, 'user_type')->hiddenInput(['value'=>'O'])->label(false); ?>
              <?php
                $uid = Yii::$app->user->id;
                echo $form->field($model, 'uid')->hiddenInput(['value'=>$uid])->label(false); 
            ?>
        <div class="extra">
          <div class="form-group col-md-12">
                      <label class="control-label">Select Package</label>                       
                         <?= $form->field($model, 'package_id')->dropDownList(
                                      ArrayHelper::map(MgpAdminPackages::find()->where(['status'=>1])->all(),'id','name'),
                                      ['class'=>'form-control','prompt'=>'Select Package','onchange'=>'fetch_package_amount(this);return false;']
                                 )->label(false); 
                                 ?> 
          </div>
          <div class="form-group col-md-12">
              <label class="control-label">Amount</label>
                Rs. <span id="package_amt">0</span>
          </div>     
          <div class="form-group col-md-12">
              <label class="control-label">Total Amount ( Package Amt + 18% GST )</label>
               <div class="col-sm-9">
                   Rs. <span id="total_amt">0</span>
                </div>
          </div>                    
          <div class="form-group col-md-12">
                      <label class="control-label">Payment Mode</label>
                        

                         <?= $form->field($model, 'payment_method_id')->dropDownList(
                                      ArrayHelper::map(MgpPaymentMethods::find()->where(['status'=>1])->all(),'id','title'),
                                      ['prompt'=>'Select Payment Method','onchange'=>'onchange_payment_selection(this);return false;',]
                                 )->label(false); 
                                 ?> 
                  </div>
                  
                  <div id="google_pay_details_div" style="display: none;">
                    <h4>Bank Details</h4>
                    <table class="table table-bordered">
                      
                      <tbody>
                        <tr>
                          <td><strong>Mobile No</strong></td>
                          <td>9898989898</td>
                        </tr>
                        <tr>
                          <td><strong>Account Holder's Name</strong></td>
                          <td>MYGYMPARTNER</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <div class="clearfix"></div>
                  </div>
                  <div id="bank_details_div" style="display: none;">
                    <h4> Bank Details</h4>
                    <table class="table table-bordered">
                      <!-- <thead>
                        <tr>
                            <td class="text-left">
                              <span class="amt-payble">Please transfer Rs.200.00 to</span></td>
                          <td></td>
                        </tr>
                      </thead -->
                      <tbody>
                        <tr>
                          <td><strong>Account holder name</strong></td>
                          <td>MYGYMPARTNER</td>
                        </tr>
                        <tr>
                          <td><strong>Account No</strong></td>
                          <td>510101001812687</td>
                        </tr>
                        <tr>
                          <td><strong>IFSC code</strong></td>
                          <td>CORP0000886</td>
                        </tr>
                        <tr>
                          <td><strong>Bank</strong></td>
                          <td>Corporation Bank, Khanda colony branch(0886)</td>
                        </tr>                       
                      </tbody>
                    </table>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                  <!-- <div class="credit-card">
                    <h4>Credit Card Details</h4>
                    <div class="form-group col-md-12">
                        <label class="control-label">Credit Card</label>
                          <?= $form->field($model,'package_id', ['template' => "<div class='input-group'><span class='input-group-addon'><i class='fa fa-lock'></i></span>{input}</div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Expiry Month</label>
                          <?= $form->field($model, 'package_id', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">Expiry Year</label>
                          <?= $form->field($model, 'package_id', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">CVV</label>
                          <?= $form->field($model, 'package_id')->textInput(['name' => ''])->label(false); ?>
                    </div>
                  </div>
                  <div class="clearfix"></div> -->
                  <p>
                    <div class="form-group col-md-12">
                    <input type="checkbox" id="pay_condition">
                      By clicking the button below I acknowledge that I've read and agree with the Terms & conditions and I'm ready to go.
                    </p>
                    <p id="cond_error" style="color: red;">
                </div>
                    
                    <?= Html::a('<a onclick="submit_package_payment_info();return false;"><input type="button" class="btn btn-warning" value="Submit"></a>') ?>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){  
   $('#payment').on('change', function() {
        alert(123);
      if ( this.value == '1')
      {
        $('.bank-details').show();
      }
      else
      {
        $('.bank-details').hide();
      }
      if ( this.value == '2')
      {
        $('.google-pay').show();
      }
      else
      {
        $('.google-pay').hide();
      }
      if ( this.value == '3')
      {
        $('.credit-card').show();
      }
      else
      {
        $('.credit-card').hide();
      }
    });
});

  function onchange_payment_selection(obj)
      {
          var payment_type = obj.value;
          if(payment_type == 1 || payment_type == 2){
            
              $('#ref_no_div').slideDown();
          }else {
             
              $('#ref_no_div').slideUp();
          }

          if(payment_type == 1){
            $('#bank_details_div').slideDown();
            $('#google_pay_details_div').slideUp();
          }else if(payment_type == 2){
            $('#bank_details_div').slideUp();
            $('#google_pay_details_div').slideDown();
          }else{
            $('#bank_details_div').slideUp();
            $('#google_pay_details_div').slideUp();
          }
      }

      function submit_package_payment_info()
      {
          var package_id = $('#mgppayments-package_id').val();   
          var payment_id = $('#mgppayments-payment_method_id').val();   
          var reference_no = $('#mgppayments-reference_no').val();   
          var error = 0;
          if(package_id == ''){
            error = 1;
            $('#mgppayments-package_id').parents('.col-md-12').find('.help-block-error').html('<span style="color:red;"> Please select Package Type.</span>');
          }else{
            $('#mgppayments-package_id').parents('.col-md-12').find('.help-block-error').html('');
          }
          if(payment_id == ''){
            error = 1;
            $('#mgppayments-payment_method_id').parents('.col-md-12').find('.help-block-error').html('<span style="color:red;">Please select Payment Method.</span>');
          }else
          {
            $('#mgppayments-payment_method_id').parents('.col-md-12').find('.help-block-error').html(''); 
          }

          if(payment_id == 1 || payment_id == 2){   // cash condition
            
            if(reference_no == ''){
                error = 1;
            
              $('#mgppayments-reference_no').parents('.col-md-12').find('.help-block-error').html('<span style="color:red;">Reference No is required.</span>');
            }else
            {
            
              $('#mgppayments-reference_no').parents('.col-md-12').find('.help-block-error').html(''); 
            }
          }

          if(!$('#pay_condition').is(':checked')){
            error= 1;
            $('#cond_error').html('Please accept the Terms and Conditions.');
          }
// return false;
          if(error != 1){
              var form_data = $('#package_payment_form').serialize();
              var url =   '<?php echo Url::base(true); ?>/site/submit-package-payment-details';
              
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

      function fetch_package_amount(obj)
      {
       
        var package_id = obj.value;
        var url =   '<?php echo Url::base(true); ?>/site/fetch-package-amount';
          $.ajax({
            url: url, 
            data:{package_id:package_id}, 
            type: "POST", 
            success: function(result){
                  if(result){
                      var total_amt =  parseInt(result) + parseInt(result) * 18/100;
                      $('#package_amt').html(result); 
                      $('#total_amt').html(total_amt); 
                  }
              }
          });        
      }
</script>
<?php
$this->registerJs("
  $(document).ready(function(){

});
", \yii\web\View::POS_END);
?>
