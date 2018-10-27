<?php
 use yii\helpers\Html;
 use yii\bootstrap\Modal;
 use yii\widgets\ActiveForm;
 use common\models\LoginForm;
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
		        'options' => ['class' => 'form-horizontal mygym-modal','id' => 'login'],
		        'action'=>'login'
		    ]);
		?>
			<div class="form-group">
				<!-- <label class="control-label">Username</label>
				<input type="text" class="form-control" placeholder="Username" required/> -->
				<?= $form->field($model, 'username')->textInput(['placeholder' => "Username"])->label('Username')?>
			</div>
			<div class="form-group">
				<!-- <label class="control-label">Password</label>
				<input type="password" class="form-control" placeholder="*********" required/> -->
				<?= $form->field($model, 'password')->textInput(['placeholder' => "*********"])->label('Password') ?>
			</div>
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
		<form role="form">
			<div class="form-group">
				<label class="control-label">Select Role</label>
				<select class="form-control" id="userrole">
                    <option>Select Role</option>
                    <option value="owner">Owner</option>
                    <option value="member">Member</option>
                </select>
			</div>
			<div class="owner box">
				<div class="form-group">
					<label class="control-label">Gym Name</label>
					<input type="text" class="form-control" placeholder="Gym Name" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Owner Name</label>
					<input type="text" class="form-control" placeholder="Owner Name" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Mobile No.</label>
					<input type="text" class="form-control" placeholder="Mobile No." required/>
				</div>
				<div class="form-group">
					<label class="control-label">Email</label>
					<input type="email" class="form-control" placeholder="Email" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Username</label>
					<input type="text" class="form-control" placeholder="Username" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Password</label>
					<input type="password" class="form-control" placeholder="*********" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Address</label>
					<textarea class="form-control" rows="3" placeholder="Address" required></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Pin Code</label>
					<input type="text" class="form-control" placeholder="Pin Code" required/>
				</div>
				<div class="form-group">
					<label class="control-label">City</label>
					<input type="text" class="form-control" placeholder="City" required/>
				</div>
				<div class="form-group">
					<label class="control-label">State</label>
					<input type="text" class="form-control" placeholder="State" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Country</label>
					<input type="text" class="form-control" placeholder="Country" required/>
				</div>
		    </div>
		    <div class="member box">
				<div class="form-group">
					<label class="control-label">Member Name</label>
					<input type="text" class="form-control" placeholder="Member Name" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Mobile No.</label>
					<input type="text" class="form-control" placeholder="Mobile No." required/>
				</div>
				<div class="form-group">
					<label class="control-label">Email</label>
					<input type="email" class="form-control" placeholder="Email" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Username</label>
					<input type="text" class="form-control" placeholder="Username" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Password</label>
					<input type="password" class="form-control" placeholder="*********" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Address</label>
					<textarea class="form-control" rows="3" placeholder="Address" required></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Pin Code</label>
					<input type="text" class="form-control" placeholder="Pin Code" required/>
				</div>
				<div class="form-group">
					<label class="control-label">City</label>
					<input type="text" class="form-control" placeholder="City" required/>
				</div>
				<div class="form-group">
					<label class="control-label">State</label>
					<input type="text" class="form-control" placeholder="State" required/>
				</div>
				<div class="form-group">
					<label class="control-label">Country</label>
					<input type="text" class="form-control" placeholder="Country" required/>
				</div>
				<label class="control-label">Select You Gym</label>
				<select class="form-control" id="userrole">
                    <option>Select Your Gym</option>
                    <option value="">gym1</option>
                    <option value="">gym2</option>
                </select>
		    </div>
			<div class="form-group">
				<a href="" class="btn btn-default">Register</a>
			</div>
		</form>
	  </div>
	</div>
  </div>
</div>