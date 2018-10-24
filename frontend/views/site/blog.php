<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<section class="top-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-content">
					<h1>Blog</h1>
					<ul class="breadcrumb">
						<li><?= Html::a( '<i class="fa fa-home"></i> Home', ['site/index']);?></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</section>
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<div class="clearfix">
						<div class="pull-left">
							<h2>Blog</h2>
							<span><?= Html::img('@web/img/logob.png', ['alt' => 'img']);?></span><br/>
                            <span><?= Html::img('@web/img/logob.png', ['alt' => 'img', 'class' => 'sec']);?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="blog-wrapper">
					<div class="blog-img">
						<a href="<?= Url::to('')?>">
							<?= Html::img('@web/img/blog/img1.jpg', ['alt' => 'img', 'class' => 'img-responsive']);?>
						</a>
					</div>
					<div class="blog-text">
						<span>05 June 2018</span>
						<h4>
							<a href="<?= Url::to('../site/blogdetail')?>">Aliquam tincidunt mauris eu risus.</a>
						</h4>
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						<a href="<?= Url::to('../site/blogdetail')?>"> Read more
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="blog-wrapper">
					<div class="blog-img">
						<a href="<?= Url::to('')?>">
							<?= Html::img('@web/img/blog/img2.jpg', ['alt' => 'img', 'class' => 'img-responsive']);?>
						</a>
					</div>
					<div class="blog-text">
						<span>05 June 2018</span>
						<h4>
							<a href="<?= Url::to('../site/blogdetail')?>">Aliquam tincidunt mauris eu risus.</a>
						</h4>
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						<a href="<?= Url::to('../site/blogdetail')?>"> Read more
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="blog-wrapper">
					<div class="blog-img">
						<a href="<?= Url::to('')?>">
							<?= Html::img('@web/img/blog/img3.jpg', ['alt' => 'img', 'class' => 'img-responsive']);?>
						</a>
					</div>
					<div class="blog-text">
						<span>05 June 2018</span>
						<h4>
							<a href="<?= Url::to('../site/blogdetail')?>">Aliquam tincidunt mauris eu risus.</a>
						</h4>
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						<a href="<?= Url::to('../site/blogdetail')?>"> Read more
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="blog-wrapper">
					<div class="blog-img">
						<a href="<?= Url::to('')?>">
							<?= Html::img('@web/img/blog/img4.jpg', ['alt' => 'img', 'class' => 'img-responsive']);?>
						</a>
					</div>
					<div class="blog-text">
						<span>05 June 2018</span>
						<h4>
							<a href="<?= Url::to('../site/blogdetail')?>">Aliquam tincidunt mauris eu risus.</a>
						</h4>
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						<a href="<?= Url::to('../site/blogdetail')?>"> Read more
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="blog-wrapper">
					<div class="blog-img">
						<a href="<?= Url::to('')?>">
							<?= Html::img('@web/img/blog/img5.jpg', ['alt' => 'img', 'class' => 'img-responsive']);?>
						</a>
					</div>
					<div class="blog-text">
						<span>05 June 2018</span>
						<h4>
							<a href="<?= Url::to('../site/blogdetail')?>">Aliquam tincidunt mauris eu risus.</a>
						</h4>
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						<a href="<?= Url::to('../site/blogdetail')?>"> Read more
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<div class="blog-wrapper">
					<div class="blog-img">
						<a href="<?= Url::to('')?>">
							<?= Html::img('@web/img/blog/img6.jpg', ['alt' => 'img', 'class' => 'img-responsive']);?>
						</a>
					</div>
					<div class="blog-text">
						<span>05 June 2018</span>
						<h4>
							<a href="<?= Url::to('../site/blogdetail')?>">Aliquam tincidunt mauris eu risus.</a>
						</h4>
						<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						<a href="<?= Url::to('../site/blogdetail')?>"> Read more
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
		