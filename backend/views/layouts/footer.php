 <?php
 use yii\helpers\Html;
  use yii\helpers\Url;
 ?>
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="<?= Url::to('')?>">Mygympartner</a>.</strong> All rights
    reserved.
  </footer>
</div>
<?php
$this->registerJs("
  $(document).ready(function(){
       var bar_data = {
      data: [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#4d1232'
    };
    $.plot('#paymentchart', [bar_data], {
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

    var bar3 = new Morris.Bar({
      element: 'attendance',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#4d1232', '#ddd'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });

    var bar2 = new Morris.Bar({
      element: 'staffattendance',
      resize: true,
      data: [
        {y: '2006', a: 100},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#4d1232', '#ddd'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
  ", \yii\web\View::POS_END);
?>