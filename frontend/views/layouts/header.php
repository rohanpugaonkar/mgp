<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<header>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
			<div id="navbar-hamburger">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</div>
			<div id="navbar-close" class="hidden">
			  <span class="icon-bar i1"></span>
			  <span class="icon-bar i2"></span>
			</div>
		  </button>
		  <a class="navbar-brand" href="<?= Url::to('index')?>"><?= Html::img('@web/img/logo.png', ['alt' => 'mygympartner-logo']);?></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><?= Html::a( 'Home', ['site/index']);?></li>
			<li><?= Html::a( 'About', ['site/about']);?></li>
			<li><?= Html::a( 'Features', ['site/features']);?></li>
			<li><?= Html::a( 'Pricing', ['site/pricing']);?></li>
			<li><?= Html::a( 'Blog', ['site/blog']);?></li>
			<li><?= Html::a( 'Contact', ['site/contact']);?></li>
			<li class="last"><?= Html::a('Login','#', ['data-toggle' =>'modal','data-target' =>'#login']);?></li>
			<li class="last"><?= Html::a('Register','#', ['data-toggle' =>'modal','data-target' =>'#register']);?></li>
		  </ul>
		</div>
	  </div>
	</nav>
	<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>Saved!</h4>
    <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-error alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>Saved!</h4>
    <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>
</header>