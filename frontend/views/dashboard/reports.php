
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Member
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#membershipreport" data-toggle="tab"><i class="fa fa-list"></i> Membership Report</a></li>
              <li><a href="#attendancereport" data-toggle="tab"><i class="fa fa-eye"></i> Attendance Report</a></li>
              <li><a href="#membershipstatusreport" data-toggle="tab"><i class="fa fa-list"></i> Membership Status Report</a></li>
              <li><a href="#paymentereport" data-toggle="tab"><i class="fa fa-eye"></i> Payment Report</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="membershipreport">
                  <div class="box-body no-padding">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="box-body chart-responsive">
                          <div class="chart" id="report1" style="height: 300px;"></div>
                      </div>
                    </div>
                  </div>
               </div>
              <div class="tab-pane" id="attendancereport">
                 <div class="box-body no-padding">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="box-body chart-responsive">
                          <div class="box-body chart-responsive">
                             <div class="chart" id="report2" style="height: 300px;"></div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="tab-pane" id="membershipstatusreport">
                  <div class="box-body no-padding">
                    <div class="col-md-8 col-md-offset-2">
                      
                    </div>
                  </div>
              </div>
              <div class="tab-pane" id="paymentereport">
                  <div class="box-body no-padding">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="box-body chart-responsive">
                          <div class="chart" id="report4" style="height: 300px;"></div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
       </div>
      </div>
    </section>
  </div>


 <?php 
$this->registerJs("
 $(document).ready(function(){
  
    var bar_data1 = {
      data: [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#4d1232'
    };
    $.plot('#report1', [bar_data1], {
      grid: {
        borderWidth: 0,
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center'
        }
      },
      xaxis: {
        mode: 'categories',
        tickLength: 0
      }
    });

    var bar_data2 = {
      data: [['January', 10], ['February', 8], ['March', 4]],
      color: '#4d1232'
    };
    $.plot('#report2', [bar_data2], {
      grid: {
        borderWidth: 0,
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center'
        }
      },
      xaxis: {
        mode: 'categories',
        tickLength: 0
      }
    });
    var bar_data4 = {
      data: [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#4d1232'
    };
    $.plot('#report4', [bar_data4], {
      grid: {
        borderWidth: 0,
        tickColor: '#f3f3f3'
      },
      series: {
        bars: {
          show: true,
          barWidth: 0.5,
          align: 'center'
        }
      },
      xaxis: {
        mode: 'categories',
        tickLength: 0
      }
    });
  });
  ", \yii\web\View::POS_END);
?>