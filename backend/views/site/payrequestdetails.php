<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use frontend\models\MgpOwners;
use frontend\models\MgpAdminPackages;
use frontend\models\MgpPaymentMethods;

?>


  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Payment Requests
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
           <!--  <ul class="nav nav-tabs">
              <li class="active"><a href="#membershiplist" data-toggle="tab"><i class="fa fa-list"></i> Membership List</a></li>
              
            </ul> -->
            <div class="tab-content">
              <div class="tab-pane active" id="membershiplist">
                  <div class="box-body table-responsive no-padding">
                        <?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'pager' => [
                // 'options' => ['class' => 'pagination-wrapper text-center'],
                    'prevPageLabel' => '< Prev',
                    'nextPageLabel'  => 'Next >'
                ],
    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        
                        [
                            'attribute' => 'uid',
                            'format' => 'raw',
                            'label' => 'Owner Name',
                            'value' => function ($model) {

                                $ownerData = MgpOwners::findOne(['id'=>$model->uid]);
                                return  $ownerData['owner_name'];
                            },
                        ],
                        [
                            'attribute' => 'package_id',
                            'format' => 'raw',
                            'label' => 'Package',
                            'value' => function ($model) {

                                $packageData = MgpAdminPAckages::findOne(['id'=>$model->package_id]);
                                return  $packageData['name'];
                            },
                        ],
                        [
                            'attribute' => 'payment_method_id',
                            'format' => 'raw',
                            'label' => 'Payment Method',
                            'value' => function ($model) {

                                $paymentData = MgpPaymentMethods::findOne(['id'=>$model->id]);
                                return  $paymentData['title'];
                            },
                        ],
                        
                        [
                            'attribute' => 'reference_no',
                            'label' => 'Reference No',
                        ],
                      
                          [
                            'format' => 'raw',
                            'attribute' => '',
                            'label' => 'Actions',
                            'value' => function ($data) {
                                
                                    $btn2 = Html::a('<a title="Edit GCT Section Common" onclick="accept_payment_request(\'' . $data['id'] . '\');return false;"><button >Approve</button></a>');

                                return $btn2 ;
                            },
                        ],
                        

                ],
            ]);
        ?>                    
                  </div>
              </div>
              
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
</div>
<script type="text/javascript">
    function accept_payment_request(pay_id)
    {
        
        var txt = confirm("Are you sure ?");
        if (txt == true) {
            var data = {pay_id:pay_id};
            $.ajax({
                url: '<?php echo Url::base(true); ?>/site/approve-payment-request',
                method: "POST",
                dataType: "html",
                data: data,
                success: function (result) {
                    if (result) {
                        window.location.reload();
                    }
                }
            });
        }
        
    }
</script>


