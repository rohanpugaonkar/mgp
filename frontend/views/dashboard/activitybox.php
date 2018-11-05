<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Activity Box
      </h1>
    </section>

  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#complaintbox" data-toggle="tab" class="c-yellow"><i class="fa fa-plus-circle"></i> Complaint Box</a></li>
              <li><a href="#request" data-toggle="tab" class="c-blue"><i class="fa fa-plus-circle"></i> Request For Migration</a></li>
              <li><a href="#feedback" data-toggle="tab" class="c-red"><i class="fa fa-plus-circle"></i> Feedback</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="complaintbox">
                <h3>Complaint Box</h3>
              </div>
              <div class="tab-pane" id="request">
                <h3>Request For Migration</h3>
              </div>
              <div class="tab-pane" id="feedback">
                <h3>Feedback</h3>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  