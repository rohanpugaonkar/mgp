<?php
 use yii\helpers\Html;
 use yii\bootstrap\Modal;
 use yii\widgets\ActiveForm;
 use common\models\LoginForm;
 use frontend\models\MgpOwners;
 use frontend\models\MgpCountries;
 use frontend\models\MgpStates;
 use frontend\models\MgpCities;
 use frontend\models\MgpMembers;
 use yii\helpers\Url;
 use yii\helpers\ArrayHelper;


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

		        'action'=> Url::base(true).'/site/login'

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
	  
			<div class="form-group">
				<label class="control-label">Select Role</label>
				<select class="form-control" id="userrole">
                    <option>Select Role</option>
                    <option value="owner">Owner</option>
                    <option value="member">Member</option>
                </select>
			</div>
			<div class="owner box">
			<?php 
				$model = new MgpOwners();
				$member_model = new MgpMembers();
						$form = ActiveForm::begin([
						// 'enableAjaxValidation' => true,
						'id' => 'register_owner',
						'options' => ['class' => 'form-horizontal mygym-modal'],
						'action'=> Url::base(true).'/site/register'
					]);
		      ?>			
				<?= $form->field($model, 'gym_name')->textInput(['placeholder' => "Gym Name"])->label('Gym Name')?>
				
				<?= $form->field($model, 'owner_name')->textInput(['placeholder' => "Owner Name"])->label('Owner Name') ?>
				
				<?= $form->field($model, 'mobile_no')->textInput(['placeholder' => "Mobile No."])->label('Mobile No.')?>

				<?= $form->field($model, 'email')->textInput(['placeholder' => "Email"])->label('Email') ?>
				
				<?= $form->field($model, 'username')->textInput(['placeholder' => "Username"])->label('Username')?>

				<?= $form->field($model, 'password')->textInput(['placeholder' => "Password"])->label('Password') ?>
				
				<?= $form->field($model, 'address')->textInput(['placeholder' => 'Address'])->label('Address'); ?>

				<?= $form->field($model, 'pincode')->textInput(['placeholder' => "Pin Code"])->label('Pin Code') ?>

		        <?= $form->field($model, 'state')->dropDownList(
			            ArrayHelper::map(MgpStates::find()->where(['status'=>1])->all(),'id','state_name'),
			            ['prompt'=>'Select State','id'=>'owner_state',]
			       )->label('State') ?>

			    <?= $form->field($model, 'city')->dropDownList(array(),['prompt'=>'Select City','id'=>'owner_city']) ?>   
				
				<?= $form->field($model, 'country')->dropDownList(
			            ArrayHelper::map(MgpCountries::find()->where(['status'=>1])->all(),'id','country_name'),
			            ['prompt'=>'Select Country']
			       )->label('Country') ?>


				<?= Html::submitButton('Register', ['class' =>'btn btn-default','id'=>'']) ?>
				<?php ActiveForm::end();?>
		    </div>

		    <div class="member box">
				<?php
					$member_model = new MgpMembers();
							$form = ActiveForm::begin([
							// 'enableAjaxValidation' => true,
							'id' => 'register_member',
							'options' => ['class' => 'form-horizontal mygym-modal'],
							'action'=> Url::base(true).'/site/register'
						]);
			      ?>
				<?= $form->field($member_model, 'member_name')->textInput(['placeholder' => "Member Name"])->label('Member Name') ?>
				
				<?= $form->field($member_model, 'mobile_no')->textInput(['placeholder' => "Mobile No."])->label('Mobile No.')?>

				<?= $form->field($member_model, 'email')->textInput(['placeholder' => "Email"])->label('Email') ?>
				
				<?= $form->field($member_model, 'username')->textInput(['placeholder' => "Username"])->label('Username')?>

				<?= $form->field($member_model, 'password')->textInput(['placeholder' => "Password"])->label('Password') ?>
				
				<?= $form->field($member_model, 'address')->textInput(['placeholder' => 'Address'])->label('Address'); ?>

				<?= $form->field($member_model, 'pincode')->textInput(['placeholder' => "Pin Code"])->label('Pin Code') ?>

		        

				<?= $form->field($member_model, 'state')->dropDownList(
			            ArrayHelper::map(MgpStates::find()->where(['status'=>1])->all(),'id','state_name'),
			            ['prompt'=>'Select State','id'=>'member_state']
			       )->label('State') ?>

			    <?= $form->field($member_model, 'city')->dropDownList(array(),['prompt'=>'Select Option','id'=>'member_city']) ?>   
				
				<?= $form->field($member_model, 'country')->dropDownList(
			            ArrayHelper::map(MgpCountries::find()->where(['status'=>1])->all(),'id','country_name'),
			            ['prompt'=>'Select Country']
			       )->label('Country') ?>	

				<?= $form->field($member_model, 'gym_owner_id')->dropDownList(
			            ArrayHelper::map(MgpOwners::find()->all(),'id','gym_name'),
			            ['prompt'=>'Select Gym']
			       )->label('Gym') ?>
			    <?= Html::submitButton('Register', ['class' =>'btn btn-default','id'=>'']) ?>
			    <?php ActiveForm::end();?>
		    </div>
		    
			
			<div class="form-group">
				
			</div>
				
	  </div>
	</div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

			$('#member_state').on('change',function(){
				var url =   '<?php echo Url::base(true); ?>/site/get-state-cities';
				var state_id = $(this).val();
				$.ajax({
					url: url, 
					data: {state_id:state_id}, 
					type: "POST", 
					success: function(result){
			    	    $("#member_city").html(result);
				    }
				});

			});

			$('#owner_state').on('change',function(){
				var url =   '<?php echo Url::base(true); ?>/site/get-state-cities';
				var state_id = $(this).val();
				$.ajax({
					url: url, 
					data: {state_id:state_id}, 
					type: "POST", 
					success: function(result){
			    	    $("#owner_city").html(result);
				    }
				});

			});
	});
</script>

