<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
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
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="post-content post-single">
					<div class="post-media post-image">
						<?= Html::img('@web/img/blog/img2.jpg', ['alt' => 'img', 'class' => 'img-responsive']);?>
						<span class="post-meta-date">
							<span class="day">27</span>June
						</span>
					</div>
					<div class="post-body clearfix">
						<div class="entry-header">
							<div class="post-meta">
							   <span class="post-author">
								  <?= Html::img('@web/img/blog/avatar.png', ['alt' => 'img', 'class' => 'avatar']);?>
								  <a href="<?= Url::to('')?>"> By John Doe</a>
							   </span>
							   <span class="post-cat">
								  <i class="fa fa-tag"></i><a href="<?= Url::to('')?>"> Fitness, Gym</a>
							   </span>
							   <span class="post-comment">
									<i class="fa fa-comment"></i> 
									<a href="<?= Url::to('')?>" class="comments-link"></a>07 Comments
							   </span>
							</div>
							<h2 class="entry-title">
							   <a href="<?= Url::to('')?>">Sed egestas, ante et vulputate volutpat</a>
							</h2>
						</div>
						<div class="entry-content">
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>

							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
						</div>
						 <div class="post-footer clearfix">
							<div class="post-tags pull-left">
							   <strong>Tags: </strong>
							   <a href="<?= Url::to('')?>">Fitness</a>
							   <a href="<?= Url::to('')?>">Diet</a>
							   <a href="<?= Url::to('')?>">Supplementation</a>
							</div>
							<div class="share-items pull-right">
							   <ul class="post-social-icons unstyled">
								  <li><a href="<?= Url::to('')?>"><i class="fa fa-facebook"></i></a></li>
								  <li><a href="<?= Url::to('')?>"><i class="fa fa-twitter"></i></a></li>
								  <li><a href="<?= Url::to('')?>"><i class="fa fa-google-plus"></i></a></li>
								  <li><a href="<?= Url::to('')?>"><i class="fa fa-linkedin"></i></a></li>
								  <li><a href="<?= Url::to('')?>"><i class="fa fa-pinterest"></i></a></li>
							   </ul>
							</div>
						 </div>
					</div>
				</div>
				<nav class="post-navigation">
				  <div class="post-previous">
						<a href="<?= Url::to('')?>">
						   <span><i class="fa fa-long-arrow-left"></i>Previous Post</span>
						</a>
				  </div>
				  <div class="post-next">
						<a href="<?= Url::to('')?>">
						   <span>Next Post <i class="fa fa-long-arrow-right"></i></span>
						</a>
				  </div>       
			   </nav>
				<div id="comments" class="comments-area">
			  <h3 class="comments-heading">07 Comments</h3>
			  <ul class="comments-list">
				 <li>
					<div class="comment">
						<?= Html::img('@web/img/blog/avatar4.png', ['alt' => 'img', 'class' => 'comment-avatar pull-left']);?>
					    <div class="comment-body">
						  <div class="meta-data">
							 <span class="pull-right">
								<a class="comment-reply" href="<?= Url::to('')?>">
								   <i class="fa fa-mail-reply-all"></i> Reply</a>
							 </span>
							 <span class="comment-author">Michelle Aimber</span>
							 <span class="comment-date">January 04, 2018</span>
						  </div>
						  <div class="comment-content">
						  <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p></div>   
					   </div>
					</div>
					<ul class="comments-reply">
					   <li>
						  <div class="comment">
							 <?= Html::img('@web/img/blog/avatar2.png', ['alt' => 'img', 'class' => 'comment-avatar pull-left']);?>
							 <div class="comment-body">
								<div class="meta-data">
								   <span class="pull-right">
									  <a class="comment-reply" href="<?= Url::to('')?>">
										 <i class="fa fa-mail-reply-all"></i> Reply</a>
								   </span>
								   <span class="comment-author">Adam Smith</span>
								   <span class="comment-date">January 17, 2018</span>
								</div>
								<div class="comment-content">
								<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p></div>   
							 </div>
						  </div>
					   </li>
					</ul>
					   <div class="comment last">
						  <?= Html::img('@web/img/blog/avatar3.png', ['alt' => 'img', 'class' => 'comment-avatar pull-left']);?>
						  <div class="comment-body">
							 <div class="meta-data">
								<span class="pull-right">
								   <a class="comment-reply" href="<?= Url::to('')?>">
									  <i class="fa fa-mail-reply-all"></i> Reply</a>
								</span>
								<span class="comment-author">Henry kendel</span>
								<span class="comment-date">January 17, 2016</span>
							 </div>
							 <div class="comment-content">
							 <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p></div>   
						  </div>
					   </div>
				 </li>
			  </ul>
		   </div>
		<div class="comments-form border-box">
          <h3 class="title-normal">Leave a comment</h3>
          <?php $form = ActiveForm::begin(['id' => '']); ?>
             <div class="row">                     
                <div class="col-md-6">
                	<?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Name', 'name' => 'name'])->label(false); ?>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Email Address', 'name' => 'email'])->label(false); ?>
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group">
                      <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Website', 'name' => 'website'])->label(false); ?>
                   </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group">
                     <?= $form->field($model, 'body')->textArea(['autofocus' => false, 'placeholder' => 'Message', 'id' => 'message'])->label(false); ?>
                   </div>
                </div>
             </div>
             <div class="clearfix text-right">
                <?= Html::submitButton('Post Comment', ['class' => 'tem-btn', 'name' => '']) ?>
             </div>
          <?php ActiveForm::end(); ?>      
		</div>
		   </div>
		   <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		   <div class="sidebar sidebar-right">
		   	<?php $form = ActiveForm::begin(['id' => '']); ?>
			  <div class="widget widget-search">
				 <div id="search" class="input-group">
				 	<?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => 'Search', 'name' => 'Search'])->label(false); ?>
					<span class="input-group-btn">
					   <i class="fa fa-search"></i>
					</span>
				 </div>
			  </div>
			  <?php ActiveForm::end(); ?> 
			  <div class="widget recent-posts">
				 <h3 class="widget-title">Popular Posts <span class="widget-title-dash"></span></h3>
				 <ul class="unstyled clearfix">
					<li class="media">
					   <div class="media-left media-middle">
					      <?= Html::img('@web/img/blog/img1.jpg', ['alt' => 'img']);?> 
					   </div>
					   <div class="media-body media-middle">
						  <span class="post-date">
							 <i class="fa fa-calendar"></i>
							 <a href="<?= Url::to('')?>"> 19 Jan, 2018</a>
						  </span>
						  <h4 class="entry-title">
							 <a href="<?= Url::to('')?>">Sed egestas, ante et vulputate volutpat</a> 
						  </h4>
					   </div>
					  <div class="clearfix"></div>
					</li>
					<li class="media">
					   <div class="media-left media-middle"> 
						 <?= Html::img('@web/img/blog/img3.jpg', ['alt' => 'img']);?> 
					   </div>
					   <div class="media-body media-middle">
						  <span class="post-date">
							 <i class="fa fa-calendar"></i>
							 <a href="<?= Url::to('')?>"> 24 Jan, 2018</a>
						  </span>
						  <h4 class="entry-title">
							 <a href="<?= Url::to('')?>">Sed egestas, ante et vulputate volutpat</a> 
						  </h4>
					   </div>
					  <div class="clearfix"></div>
					</li>
					<li class="media">
					   <div class="media-left media-middle"> 
						  <?= Html::img('@web/img/blog/img4.jpg', ['alt' => 'img']);?> 
					   </div>
					   <div class="media-body media-middle">
						  <span class="post-date">
							 <i class="fa fa-calendar"></i>
							 <a href="<?= Url::to('')?>"> 27 Jan, 2018</a>
						  </span>
						  <h4 class="entry-title">
							 <a href="<?= Url::to('')?>">Sed egestas, ante et vulputate volutpat</a> 
						  </h4>
					   </div>
					  <div class="clearfix"></div>
					</li>
				 </ul>
			  </div>
			  <div class="widget">
				 <h3 class="widget-title">Categories <span class="widget-title-dash"></span></h3>
				 <ul class="widget-nav-tabs">
					<li><a href="<?= Url::to('')?>">Gym Fitness</a> 
					   <span class="posts-count">(05)</span>
					</li>
					<li><a href="<?= Url::to('')?>">Pro Fitness Camp</a>
					   <span class="posts-count">(06)</span>
					</li>
					<li><a href="<?= Url::to('')?>">Indoor Cycling Fitness</a>
					   <span class="posts-count">(11)</span>
					</li>
					<li><a href="<?= Url::to('')?>">Gym Fitness</a> 
					   <span class="posts-count">(03)</span>
					</li>
					<li><a href="<?= Url::to('')?>">Pro Fitness Camp</a>
					   <span class="posts-count">(6)</span>
					</li>
					<li><a href="<?= Url::to('')?>">Indoor Cycling Fitness</a>
					   <span class="posts-count">(12)</span>
					</li>
				 </ul>
			  </div> 
			  <div class="widget widget-tags">
				 <h3 class="widget-title">Tags <span class="widget-title-dash"></span></h3>
				 <ul class="unstyled clearfix">
					<li><a href="<?= Url::to('')?>">Cardio Fitness</a></li>
					<li><a href="<?= Url::to('')?>">fitness</a></li>
					<li><a href="<?= Url::to('')?>">fitness news</a></li>
					<li><a href="<?= Url::to('')?>">workout for free</a></li>
					<li><a href="<?= Url::to('')?>">Indoor Cycling</a></li>
					<li><a href="<?= Url::to('')?>">Gym Fitness</a></li>
					<li><a href="<?= Url::to('')?>">Diet Plan</a></li>
					<li><a href="<?= Url::to('')?>">Gym Fitness</a></li>
				 </ul>
			  </div>
		   </div>
		</div>
	    </div>
    </div>
</section>
		