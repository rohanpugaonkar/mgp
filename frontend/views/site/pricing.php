<?php
use yii\helpers\Html;
?>
<section class="top-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-content">
					<h1>Pricing</h1>
					<ul class="breadcrumb">
						<li><?= Html::a( '<i class="fa fa-home"></i> Home', ['site/index']);?></li>
						<li>Pricing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
</section>
<section class="pricingg">
    <div class="container">
       <div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<div class="clearfix">
						<div class="pull-left">
							<h2>Pricing</h2>
							<span><?= Html::img('@web/img/logob.png', ['alt' => 'img']);?></span><br/>
                            <span><?= Html::img('@web/img/logob.png', ['alt' => 'img', 'class' => 'sec']);?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <div class="single-pricingg">
                    <div class="pricingg-header one">
                        <h3>Platinum</h3>
                        <div class="pricingg-price">
                            <i class="fa fa-rupee"></i>5 <span>/ Day</span>
                        </div>
                    </div>
                    <div class="pricingg-features">
                        <ul>
                            <li>unlimited member's registration</li>
                            <li>advanced dashboard</li>
                            <li>membership mangement</li>
                            <li>workout scheduler</li>
                            <li>diet planner</li>
							<li>supplementation</li>
							<li>Fitness Tools</li>
                        </ul>
                    </div>
                    <div class="mt-40">
                       <?= Html::a( 'Choose Plan','#', ['class' => 'tem-btn']);?>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <div class="single-pricingg">
                    <div class="pricingg-header two">
                        <h3>Gold</h3>
                        <div class="pricingg-price ">
                            <i class="fa fa-rupee"></i>3 <span>/ Day</span>
                        </div>
                    </div>
                    <div class="pricingg-features">
                        <ul>
                            <li>unlimited member's registration</li>
                            <li>advanced dashboard</li>
                            <li>membership mangement</li>
                            <li>workout scheduler</li>
                            <li>diet planner</li>
							<li>supplementation</li>
							<li>-------</li>
                        </ul>
                    </div>
                    <div class="mt-40">
                         <?= Html::a( 'Choose Plan','#', ['class' => 'tem-btn']);?>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <div class="single-pricingg">
                    <div class="pricingg-header three">
                        <h3>Silver</h3>
                        <div class="pricingg-price">
                            <i class="fa fa-rupee"></i>1 <span>/ Day</span>
                        </div>
                    </div>
                    <div class="pricingg-features">
                        <ul>
							<li>unlimited member's registration</li>
                            <li>advanced dashboard</li>
                            <li>membership mangement</li>
                            <li>-------</li>
                            <li>-------</li>
							<li>-------</li>
							<li>-------</li>
                        </ul>
                    </div>
                    <div class="mt-40">
                         <?= Html::a( 'Choose Plan','#', ['class' => 'tem-btn']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		