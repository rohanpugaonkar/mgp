<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
?>
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
			<div class="col-md-7">
				<h3>Account Information</h3>
				<?php $form = ActiveForm::begin(['id' => '']); ?>
				<div class="extra">
					<div class="form-group col-md-12">
	                    <label class="control-label">Email</label>
	                      <?= $form->field($model, 'name')->textInput(['name' => ''])->label(false); ?>
	                </div>
	                <div class="form-group col-md-6">
	                    <label class="control-label">Firstname</label>
	                      <?= $form->field($model, 'name')->textInput(['name' => ''])->label(false); ?>
	                </div>
	                <div class="form-group col-md-6">
	                    <label class="control-label">Lastname</label>
	                      <?= $form->field($model, 'name')->textInput(['name' => ''])->label(false); ?>
	                </div>
				</div>
				<h3>Billing Information</h3>
					<div class="form-group col-md-12">
	                    <label class="control-label">Address1</label>
	                      <?= $form->field($model, 'name')->textArea(['name' => ''])->label(false); ?>
	                </div>
	                <div class="form-group col-md-12">
	                    <label class="control-label">Address2</label>
	                      <?= $form->field($model, 'name')->textArea(['name' => ''])->label(false); ?>
	                </div>
	                <div class="form-group col-md-4">
	                    <label class="control-label">City</label>
	                      <?= $form->field($model, 'name')->textInput(['name' => ''])->label(false); ?>
	                </div>
	                <div class="form-group col-md-4">
	                    <label class="control-label">State</label>
	                      <?= $form->field($model, 'name')->textInput(['name' => ''])->label(false); ?>
	                </div>
	                <div class="form-group col-md-4">
	                    <label class="control-label">Pin Code</label>
	                      <?= $form->field($model, 'name')->textInput(['name' => ''])->label(false); ?>
	                </div>
	                <div class="form-group col-md-12">
	                    <label class="control-label">Country</label>
	                      <?= $form->field($model, 'name', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>
	                </div>
	                <div class="form-group col-md-6">
	                    <label class="control-label">Credit Card</label>
	                      <?= $form->field($model,'name', ['template' => "<div class='input-group'><span class='input-group-addon'><i class='fa fa-lock'></i></span>{input}</div>"])->textInput(['placeholder'=>''])->label(false) ; ?>
	                </div>
	                <div class="form-group col-md-2">
	                    <label class="control-label">Expiry Month</label>
	                      <?= $form->field($model, 'name', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>
	                </div>
	                <div class="form-group col-md-2">
	                    <label class="control-label">Expiry Year</label>
	                      <?= $form->field($model, 'name', ['template' => "{label}\n{input}\n{hint}\n{error}"])->dropDownList(['1'=>''],['class'=>'form-control', 'prompt'=>'',])->label(false) ?>
	                </div>
	                <div class="form-group col-md-2">
	                    <label class="control-label">CVV</label>
	                      <?= $form->field($model, 'name')->textInput(['name' => ''])->label(false); ?>
	                </div>
				<?php ActiveForm::end(); ?>
			</div>
			<div class="col-md-5 order-summary">
				<h4>Order Summary</h4>
				<div class="summary">
					<ul>
                        <li><strong>Platinum <span class="pull-right"><i class="fa fa-rupee"></i>5 <span>/ Day</span></span></strong></li>
                        <li>advanced dashboard <span class="pull-right"><i class="fa fa-check"></i></span></li>
                        <li>membership mangement <span class="pull-right"><i class="fa fa-check"></i></span></li>
                        <li>workout scheduler <span class="pull-right"><i class="fa fa-check"></i></span></li>
                        <li>diet planner <span class="pull-right"><i class="fa fa-check"></i></span></li>
						<li>supplementation <span class="pull-right"><i class="fa fa-check"></i></span></li>
						<li>Fitness Tools <span class="pull-right"><i class="fa fa-check"></i></span></li>
						<li class="divider"></li>
						<li>Billing Cycle <span class="pull-right">12 Month</span></li>
						<li class="divider"></li>
						<li>Total Due Today <span class="pull-right"><i class="fa fa-rupee"></i>589 </span></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p>
                    	By clicking the button below I acknowledge that I've read and agree with the Terms & conditions and I'm ready to go.
                    </p>
                    <?= Html::a( 'Place Order','#', ['class' => 'tem-btn btn-block', 'data-toggle' =>'modal','data-target' =>'#thankyou']);?>
				</div>
			</div>
		</div>
	</div>
</section>



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
