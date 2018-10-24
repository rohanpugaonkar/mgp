<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="top-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inner-content">
							<h1>About Us</h1>
							<ul class="breadcrumb">
								<li><?= Html::a( '<i class="fa fa-home"></i> Home', ['site/index']);?></li>
								<li>About Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<section class="aboutus">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inner-title">
							<div class="clearfix">
								<div class="pull-left">
									<h2>About Us</h2>
									<span><?= Html::img('@web/img/logob.png', ['alt' => 'img']);?></span><br/>
                    				<span><?= Html::img('@web/img/logob.png', ['alt' => 'img', 'class' => 'sec']);?></span>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="about-img">
								<?= Html::img('@web/img/about1.png', ['alt' => 'img']);?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<p class="text-center">MyGymPartner is a gym management platform that provides cloud-based business tools for gyms around the world. 
							MyGymPartner is a platform to be used by a various types of users including large fitness clubs, gyms, martial art studios, cross fit, personal trainers and more.
							MyGymPartner equips gym owners and administrators with powerful, easy-to-use gym management application. Our online application allows you to run your gym smoothly and efficiently, saving your time and money. 
							This web application has been refined and polished by the expertise and experienced gym owners from India.
							The software is optimized to work on both mobile and desk-top devices and is scaled to support the needs of gyms.
							MyGymPartner platform offers a complete suite of features includes billing process, notifications, workout scheduling, diet planing, supplementation, fitness tools, reports, membership management, employ management, knowledge center ,personal training management  other operational tasks.</p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="heighlights">
								<h2>Highlights</h2>
								<ul>
									<li><i class="fa fa-long-arrow-right"></i> 100% Customized Product</li>
									<li><i class="fa fa-long-arrow-right"></i> Polished by experiences of gym owners & fitness experts</li>
									<li><i class="fa fa-long-arrow-right"></i> Any kind of changes and updates are possible as source code is with us only</li>
									<li><i class="fa fa-long-arrow-right"></i> 100% Data Security and backup options</li>
									<li><i class="fa fa-long-arrow-right"></i> Affordable Price in the Market</li>
									<li> <i class="fa fa-long-arrow-right"></i>Easy Payment Terms</li>
									<li><i class="fa fa-long-arrow-right"></i> Easy to use and we provide on-screen training to your administrators</li>
									<li><i class="fa fa-long-arrow-right"></i> 18/7 online Support</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="whyus">
								<h2>Why Us?</h2>
								<ul>
									<li><?= Html::img('@web/img/icons/s1.png', ['alt' => 'img']);?><span>Simple to Use</span> </li>
									<li><?= Html::img('@web/img/icons/s2.png', ['alt' => 'img']);?><span>Affordable for your Pocket</span> </li>
									<li><?= Html::img('@web/img/icons/s3.png', ['alt' => 'img']);?><span>complete suite for gym owners and administrators</span> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>