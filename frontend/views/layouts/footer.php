<?php
 use yii\helpers\Html;
 use yii\bootstrap\Modal;
 use yii\widgets\ActiveForm;
 use common\models\LoginForm;
  use frontend\models\MgpOwners;

 ?>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-3 first">
				<h3>Contact Us</h3>
				<address>
					<p>
						Panvel, Navi Mumbai, Maharashtra 400614
					</p>
					<ul>
						<li><?= Html::img('@web/img/icons/globe11.png', ['alt' => 'globe']);?>www.mygympartner.in</li>
						<li><?= Html::img('@web/img/icons/mail11.png', ['alt' => 'message']);?>support@mygympartner.in</li>
						<li><?= Html::img('@web/img/icons/phone11.png', ['alt' => 'phone']);?>8286380220</li>
					</ul>
				</address>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 second">
				<h3>Information</h3>
				<ul>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> About', ['site/about']);?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Features', ['site/features']);?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Pricing', ['site/pricing']);?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Blog', ['site/blog']);?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Contact', ['site/contact']);?></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 second">
				<h3>Features</h3>
				<ul>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Membership Management','');?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Manage Expenses','');?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Diet Planning','');?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> Fitness Tools','');?></li>
					<li><?= Html::a( '<i class="fa fa-long-arrow-right"></i> View All','site/features');?></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-3 first">
				<h3>Disclaimer</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum lorem felis, quis vestibulum augue efficitur sed. Sed pharetra nibh sed volutpat porttitor. Ut sollicitudin est et quam tincidunt tincidunt. Vestibulum mattis pulvinar nisl, eget fermentum nibh fringilla id.
					</p>
			</div>
		</div>
	</div>
</div>
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="pull-left">
					Copyright &copy; 2018-19 Mygympartner 
				</div>
				<div class="pull-right">
					Designed & Developed By <?= Html::a( '<i class="fa fa-heart"></i>', ['']);?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Login Modal -->



   
<div id="login" class="modal fade mygym-modal" role="dialog">
  <div class="modal-dialog modal-md">
	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title text-center">Login</h4>
	  </div>
	  <div class="modal-body">
		<!-- <form role="form"> -->
		<?php 
			$model = new LoginForm();
		    $form = ActiveForm::begin([
		        'options' => ['class' => 'form-horizontal','id' => 'login'],
		        'action'=>'login'
		    ]);
		?>
			
							
			<?= $form->field($model, 'username')->textInput(['placeholder' => "Username"]); ?>
			
			
			<?= $form->field($model, 'password')->textInput(['placeholder' => "*********"]); ?>
			
			<div class="form-group">
				<?= Html::submitButton('Login', ['class' =>'btn btn-default','id'=>'']) ?>
			</div>
		<!-- </form> -->
		<?php 
		 		ActiveForm::end();
		 ?>
	  </div>
	</div>

  </div>
</div>

<!-- register Modal -->
<div id="register" class="modal fade mygym-modal" role="dialog">
  <div class="modal-dialog modal-md">
	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title text-center">Register Here</h4>
	  </div>
	  <div class="modal-body">
	  <?php 
		$model = new MgpOwners();
				$form = ActiveForm::begin([
				// 'enableAjaxValidation' => true,
				'id' => 'register',
				'options' => ['class' => 'form-horizontal mygym-modal'],
				'action'=>'	site/register'
			]);
      ?>
			<div class="form-group">
				<label class="control-label">Select Role</label>
				<select class="form-control" id="userrole">
                    <option>Select Role</option>
                    <option value="owner">Owner</option>
                    <option value="member">Member</option>
                </select>
			</div>
			<div class="owner box">
				
				<?= $form->field($model, 'gym_name')->textInput(['placeholder' => "Gym Name"])->label('Gym Name')?>
				
				<?= $form->field($model, 'owner_name')->textInput(['placeholder' => "Owner Name"])->label('Owner Name') ?>
				
				<?= $form->field($model, 'mobile_no')->textInput(['placeholder' => "Mobile No."])->label('Mobile No.')?>

				<?= $form->field($model, 'email')->textInput(['placeholder' => "Email"])->label('Email') ?>
				
				<?= $form->field($model, 'username')->textInput(['placeholder' => "Username"])->label('Username')?>

				<?= $form->field($model, 'password')->textInput(['placeholder' => "Password"])->label('Password') ?>
				
				<?= $form->field($model, 'address')->textInput(['placeholder' => 'Address', 'name' => 'address'])->label('Address'); ?>

				<?= $form->field($model, 'pincode')->textInput(['placeholder' => "Pin Code"])->label('Pin Code') ?>

		        <?= $form->field($model, 'city')->textInput(['placeholder' => "City"])->label('City')?>

				<?= $form->field($model, 'state')->textInput(['placeholder' => "State"])->label('State') ?>

				<?= $form->field($model, 'country')->textInput(['placeholder' => "Country"])->label('Country') ?>

		    </div>
		    
			
			<div class="form-group">
				<?= Html::submitButton('Register', ['class' =>'btn btn-default','id'=>'']) ?>
			</div>
				<?php ActiveForm::end();?>
	  </div>
	</div>
  </div>
</div>