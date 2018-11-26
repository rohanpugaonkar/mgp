<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
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
<section class="top-banner">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="inner-content">
				<h1>Checkout</h1>
				<ul class="breadcrumb">
					<li><?= Html::a( '<i class="fa fa-home"></i> Home', ['site/index']);?></li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
</div>	
</section>
<section class="checkout">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<?php $form = ActiveForm::begin(['id' => '']); ?>
				<div class="extra">
					<div class="form-group col-md-12">
	                    <label class="control-label">Select Packages</label>
	                      <?= $form->field($model, 'package_id', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Platinum','2'=>'Gold', '3' =>'Silver'],['class'=>'form-control', 'prompt'=>'Select Packages',])->label(false) ?>
	                </div>
	                <div class="form-group col-md-12">
	                    <label class="control-label">Amount</label>
	                      <?= $form->field($model, 'package_id')->textInput(['name' => ''])->label(false); ?>
	                </div>
					<div class="form-group col-md-12">
	                    <label class="control-label">Payment Mode</label>
	                      <?= $form->field($model, 'package_id', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>'Bank Details','2'=>'Google Pay', '3' =>'Credit Card'],['class'=>'form-control', 'prompt'=>'Select Payment Mode','id'=>'payment'])->label(false) ?>
	                </div>
	                <div class="clearfix"></div>
	                <div class="bank-details">
	                	<h4>Bank Details</h4>
	                	<table class="table table-bordered">
							<thead>
								<tr>
							      <td class="text-left">
							      	<span class="amt-payble">Please transfer Rs.200.00 to</span></td>
								  <td></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>Bank Name</strong></td>
									<td>Bank Of India</td>
								</tr>
								<tr>
									<td><strong>Beneficiary Name</strong></td>
									<td>Mygympartner</td>
								</tr>
								<tr>
									<td><strong>Beneficiary A/C No</strong></td>
									<td>8888888888</td>
								</tr>
								<tr>
									<td><strong>Type Of A/C</strong></td>
									<td>Current Account</td>
								</tr>
								<tr>
									<td><strong>Branch</strong></td>
									<td>Panvel Branch</td>
								</tr>
								<tr>
									<td><strong>IFSC Code</strong></td>
									<td>AAAAA34R586</td>
								</tr>
							</tbody>
						</table>
						<div class="clearfix"></div>
	                </div>
	                <div google_pay_details_div="google-pay">
	                	<h4>Google Pay Details</h4>
	                	<table class="table table-bordered">
							<thead>
								<tr>
							      <td class="text-left">
							      	<span class="amt-payble">Please transfer Rs.200.00 to</span></td>
								  <td></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>Bank Name</strong></td>
									<td>Bank Of India</td>
								</tr>
								<tr>
									<td><strong>Beneficiary Name</strong></td>
									<td>Mygympartner</td>
								</tr>
								<tr>
									<td><strong>Beneficiary A/C No</strong></td>
									<td>8888888888</td>
								</tr>
								<tr>
									<td><strong>Type Of A/C</strong></td>
									<td>Current Account</td>
								</tr>
								<tr>
									<td><strong>Branch</strong></td>
									<td>Panvel Branch</td>
								</tr>
								<tr>
									<td><strong>IFSC Code</strong></td>
									<td>AAAAA34R586</td>
								</tr>
							</tbody>
						</table>
						<div class="clearfix"></div>
	                </div>
	                <div class="clearfix"></div>
	                <div class="credit-card">
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
	                <div class="clearfix"></div>
	                <p>
                    	By clicking the button below I acknowledge that I've read and agree with the Terms & conditions and I'm ready to go.
                    </p>
                    <?= Html::a( 'Place Order','#', ['class' => 'tem-btn btn-block', 'data-toggle' =>'modal','data-target' =>'#thankyou']);?>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</section>

<?php
$this->registerJs("
	$(document).ready(function(){
    $('#payment').on('change', function() {
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
", \yii\web\View::POS_END);
?>

<div id="thankyou" class="modal fade mygym-modal" role="dialog">
  <div class="modal-dialog modal-md">
	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title text-center"><i class="fa fa-check"></i></h4>
	  </div>
	  <div class="modal-body">
		<h4>Your payment has been done successfully!!</h4>

	  </div>
	</div>

  </div>
</div>
