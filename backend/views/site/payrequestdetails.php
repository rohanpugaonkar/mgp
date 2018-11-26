<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

?>

<div class="title-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="page-title-div">
                    <h3 class="page-title"><span></span>Payment Requests</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-action-wrapper text-right">
                    <span class="table-search-icon">
                        <button class="btn-transparent btn-search" id="TableSearch"><img src="<?php //echo Url::base(true); ?>/images/search-icon.png" /></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-filter clearfix">
                <div class="">
                    <div>
                        <div class="row">
                            <div class="col-lg-12">


                                <div class="table-wrapper">

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
        // 'id',
        [
             'attribute' => 'dtype',
            'format' => 'raw',
             'label' => 'Device Type',
            'value' => function ($model) {

                switch (strtolower($model->dtype)) {
                    case 'router':
                        $icon  = Yii::$app->homeUrl.'/images/router.png';
                    break;
                    case 'firewall':
                        $icon  = Yii::$app->homeUrl.'/images/firewall.png';
                    break;
                    case 'switch':
                        $icon  = Yii::$app->homeUrl.'/images/switch.png';
                    break;
                    default:
                    $icon = Yii::$app->homeUrl.'images/Device-type.png';
                }
                return '<img src="'.$icon.'"/>  '.$model->dtype;
            },
        ],
        [
            'attribute' => 'dvendor',
            'format' => 'raw',
            'label' => 'OEM / Vendor',
            'value' => function ($model) {

                switch (strtolower($model->dvendor)) {
                    case 'cisco':
                        $icon  = Yii::$app->homeUrl.'/images/cisco-logot.png';
                    break;
                    case 'juniper':
                        $icon  = Yii::$app->homeUrl.'/images/juniper-logo.png';
                    default:
                    $icon = Yii::$app->homeUrl.'images/device-model.png';
                }
                return  '<img src="'.$icon.'"/>  '.$model->dvendor;
            },
        ],
        [
            'attribute' => 'dplatform',
            'label' => 'Platform',
        ],
        [
            //'format' => 'raw',
            //'attribute' => '',
            'label' => 'Chasis Type',
            'value'=>function($data){
              $device_platform_cnt = DeviceModeling::find()->where(['is_active' => 1, 'dplatform' => $data['dplatform']])->count();
              
              if ($device_platform_cnt > 0) {
                  $device_platform_data = DeviceModeling::find()->where(['is_active' => 1, 'dplatform' => $data['dplatform']])->one();
                  return $device_platform_data['chasis_type'];
              } else {
                  return 'NA';
              }
            }
        ],
        [
            'format' => 'raw',
            'attribute' => '',
            'label' => 'Status',
            'value' => function ($data) {
                $device_platform_cnt = DeviceModeling::find()->where(['is_active' => 1, 'dplatform' => $data['dplatform']])->count();
                if ($device_platform_cnt > 0) {
                    return Html::a('<span class="green-flag"><img src="' . Url::base(true) . '/images/green-flag.png" > Already Modeled  </span>');
                } else {
                    return Html::a('<span class="blue-flag"><img src="' . Url::base(true) . '/images/blue-flag.png"> Ready to Model</span>');
                }
            }
                ],
                [
                    'format' => 'raw',
                    'attribute' => '',
                    'label' => 'Actions',
                    'value' => function ($data) {

                        $device_platform_cnt = DeviceModeling::find()->where(['is_active' => 1, 'dplatform' => $data['dplatform']])->count();

                        // $btn1 = Html::a('<a href="#"><img src="'.Url::base(true).'/images/view.png"></a>');
                        if ($device_platform_cnt > 0) {
                            $btn2 = Html::a('<a title="View Device Modelling Details" href="' . Url::base(true) . '/DeviceModeling/device-modeling/step-form?device=' . $data['dplatform'] . '&vendor=' . $data['dvendor'] . '"><img src="' . Url::base(true) . '/images/view.png"></a>');

                            $btn3 = Html::a('<a title="Delete Device Modelling Details"  onclick="delete_modelling_details(\'' . $data['dplatform'] . '\');return false;" style="cursor:pointer;"><img src="' . Url::base(true) . '/images/delete.png" ></a>');

                        } else {
                            $btn2 = Html::a('<a title="Device Modelling" href="' . Url::base(true) . '/DeviceModeling/device-modeling/step-form?device=' . $data['dplatform'] . '&vendor=' . $data['dvendor'] . '"><img src="' . Url::base(true) . '/images/model_in-grid.png"></a>');

                            $btn3 = '';
                        }


                        return $btn2 . ' ' . $btn3;
                    },
                        ],

                    ],
                ]);
                ?>


                                                </div>

                                                <div class="pagination-wrapper text-center">
                                                    <nav aria-label="Page navigation">

                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>

                </div>
