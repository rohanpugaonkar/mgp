<?php
/* @var $this yii\web\View */
$this->title = 'MyGymPatner';
use yii\helpers\Html;
?>

<section class="banner-area owl-carousel">
    <div class="single-banner sec-overlay d-flex align-items-center">
        <div class="itembg">
            <?= Html::img('@web/img/banner/slide1.jpg', ['alt' => 'banner']);?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-con text-center">
                        <h3 class="fadeInUp animated animated-04s">My Gym Partner</h3>
                        <h1 class="fadeInUp animated animated-08s">Member Management Platform</h1>
                        <p class="fadeInUp animated animated-12s">
                            <?= Html::a( 'Request A Demo','', ['class' => 'tem-btn']);?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-banner sec-overlay d-flex align-items-center">
        <div class="itembg">
            <?= Html::img('@web/img/banner/slide2.jpg', ['alt' => 'banner']);?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-con text-center">
                        <h3 class="fadeInUp animated animated-04s">My Gym Partner</h3>
                        <h1 class="fadeInUp animated animated-08s">Member Management Platform</h1>
                        <p class="fadeInUp animated animated-12s">
                            <?= Html::a( 'Request A Demo','', ['class' => 'tem-btn']);?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-banner sec-overlay d-flex align-items-center">
        <div class="itembg">
            <?= Html::img('@web/img/banner/slide3.jpg', ['alt' => 'banner']);?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-con text-center">
                        <h3 class="fadeInUp animated animated-04s">My Gym Partner</h3>
                        <h1 class="fadeInUp animated animated-08s">Member Management Platform</h1>
                        <p class="fadeInUp animated animated-12s">
                            <?= Html::a( 'Request A Demo','', ['class' => 'tem-btn']);?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading">
                    About My Gym Partner<br/>
                    <span><?= Html::img('@web/img/logow.png', ['alt' => 'img']);?></span><br/>
                    <span><?= Html::img('@web/img/logow.png', ['alt' => 'img', 'class' => 'second']);?></span>
                </h2>
                <div class="col-md-6">
                    <div class="about-img">
                       <?= Html::img('@web/img/about1.png', ['alt' => 'img']);?>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="text-center">MyGymPartner is a gym management platform that provides cloud-based business tools for gyms around the world. 
                    MyGymPartner is a platform to be used by a various types of users including large fitness clubs, gyms, martial art studios, cross fit, personal trainers and more.
                    MyGymPartner equips gym owners and administrators with powerful, easy-to-use gym management application. Our online application allows you to run your gym smoothly and efficiently, saving your time and money. 
                    This web application has been refined and polished by the expertise and experienced gym owners from India.
                    The software is optimized to work on both mobile and desk-top devices and is scaled to support the needs of gyms.
                    MyGymPartner platform offers a complete suite of features includes billing process, notifications, workout scheduling, diet planing, supplementation, fitness tools, reports, membership management, employ management, knowledge center ,personal training management  other operational tasks.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <h2 class="heading">
                Features<br/>
                <span><?= Html::img('@web/img/logow.png', ['alt' => 'img']);?></span><br/>
                <span><?= Html::img('@web/img/logow.png', ['alt' => 'img', 'class' => 'second']);?></span>
            </h2>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                        <?= Html::img('@web/img/icons/icon11.png', ['alt' => 'Membership Management']);?>
                    </div>
                    <h4>Membership Management</h4>
                    <p>Add new members. Edit member’s profile/status and many more.
                        Track their attendance through manual entry & other advance features.
                         Reporting.</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                        <?= Html::img('@web/img/icons/icon22.png', ['alt' => 'Manage Expenses']);?>
                    </div>
                    <h4>Manage Expenses</h4>
                    <p>Owners and administrators can mange day-day expenses. Track & maintain service wise data. Export month-year wise sheet, graph visual, compare and many more.</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                        <?= Html::img('@web/img/icons/icon33.png', ['alt' => 'Workout scheduling']);?>
                    </div>
                    <h4>Workout scheduling</h4>
                    <p>Owners and administrators staff can customize workout data, Gym trainer can assign workout to individual/multiple members, Default workout plans Beginner, intermediate, advance levels</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                        <?= Html::img('@web/img/icons/icon44.png', ['alt' => 'Diet planning']);?>
                    </div>
                    <h4>Diet planning</h4>
                    <p>More than 10000+ foods nutritional value is added Help of nutritional value dietitian can assign accurate diet plan.</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                        <?= Html::img('@web/img/icons/icon55.png', ['alt' => 'Fitness tools']);?>
                    </div>
                    <h4>Fitness tools</h4>
                    <p>1-mile Rockport test, vo2 max calculator, body composition, fitness assessment Protein calculator, weight tracker and many more advance tools for members Many of them are specially design for special population’s like- heart, BP patients </p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                        <?= Html::img('@web/img/icons/icon66.png', ['alt' => 'Supplementation']);?>
                    </div>
                    <h4>Supplementation</h4>
                    <p>Assign types of supplements like BCAA, creatine, protein shake, glutamine, caffeine, L-arginine and many more. Schedule for quantity, intake time, how long and conditions etc.</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                        <?= Html::img('@web/img/icons/icon77.png', ['alt' => 'Personal training management']);?>
                    </div>
                    <h4>Personal training management</h4>
                    <p>Owners and administrators staff can mange there trainers, client allotments, commission, Track performance and more </p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                         <?= Html::img('@web/img/icons/icon88.png', ['alt' => 'Quick alerts']);?>
                    </div>
                    <h4>Quick alerts</h4>
                    <p>Get notifications for member’s/employ birthday, anniversary  Alerts for membership expiry, installment date, Enquiry follow ups, members request, member’s complaints, online registered member, etc</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                         <?= Html::img('@web/img/icons/icon100.png', ['alt' => 'Manage employees and trainers']);?>
                    </div>
                    <h4>Manage employees and trainers</h4>
                    <p>Here administration staff can add new employ/trainer. Select their payment cycle , starting date, attendance, payment slip , allot festival bonus , etc</p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                         <?= Html::img('@web/img/icons/icon99.png', ['alt' => 'Generate excel /pdf reports']);?>
                    </div>
                    <h4>Generate excel /pdf reports</h4>
                    <p>Administrator staff can generate many reports like member’s list, profit loss sheet, expenses 
                        Here management staff will get detailed reports by applying filters. Reports will be in chart, graph format
                        So it will be very easy to understand
                    </p>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4">
                <div class="block text-center">
                    <div class="icon">
                         <?= Html::img('@web/img/icons/icon1111.png', ['alt' => 'Billing and invoicing']);?>
                    </div>
                    <h4>Billing and invoicing</h4>
                    <p>Integrated billing system allowes gym owners to collect payment with mobile wallets, all types of cards, net banking etc. Custom invoice format for GST & other taxes</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pricing">
    <div class="container">
       <div class="row">
            <h2 class="heading">
                Pricing<br/>
                <span><?= Html::img('@web/img/logow.png', ['alt' => 'img']);?></span><br/>
                <span><?= Html::img('@web/img/logow.png', ['alt' => 'img', 'class' => 'second']);?></span>
            </h2>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <div class="single-pricing">
                    <div class="pricing-header one">
                        <h3>Platinum</h3>
                        <div class="pricing-price">
                            <i class="fa fa-rupee"></i>5 <span>/ Day</span>
                        </div>
                    </div>
                    <div class="pricing-features">
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
                <div class="single-pricing">
                    <div class="pricing-header two">
                        <h3>Gold</h3>
                        <div class="pricing-price ">
                            <i class="fa fa-rupee"></i>3 <span>/ Day</span>
                        </div>
                    </div>
                    <div class="pricing-features">
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
                <div class="single-pricing">
                    <div class="pricing-header three">
                        <h3>Silver</h3>
                        <div class="pricing-price">
                            <i class="fa fa-rupee"></i>1 <span>/ Day</span>
                        </div>
                    </div>
                    <div class="pricing-features">
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
<section class="desktop">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                 <?= Html::img('@web/img/responsive.png', ['alt' => 'img', 'class' => 'img-responsive']);?>
            </div>
        </div>
    </div>
</section>
