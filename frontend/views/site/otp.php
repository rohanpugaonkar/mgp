<?php
  use Yii;
 use yii\helpers\Html;
 use yii\bootstrap\Modal;
 use yii\widgets\ActiveForm;
 use common\models\LoginForm;
 use frontend\models\MgpOwners;
 use frontend\models\MgpCountries;
 use frontend\models\MgpStates;
 use frontend\models\MgpCities;
 use frontend\models\MgpMembers;
 use frontend\models\MgpOtp;
 use yii\helpers\Url;
 use yii\helpers\ArrayHelper;

 $session = Yii::$app->session;
 $user_id = $session->get('user_id');
 $op_user_id = $session->get('op_user_id');

 unset($session['user_id']);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <style>
#wrapper {
  font-family: Lato;
  font-size: 1.5rem;
  text-align: center;
  box-sizing: border-box;
  color: #333;
  font-family: 'Open Sans', sans-serif;
}
#wrapper #dialog {
  border: solid 1px #ccc;
  margin: 70px auto;
  padding: 20px 30px;
  display: inline-block;
  box-shadow: 0 0 4px #ccc;
  background-color: #FAF8F8;
  overflow: hidden;
  position: relative;
  max-width: 450px;
}
#wrapper #dialog h3 {
  margin: 0 0 10px;
  padding: 0;
  line-height: 1.25;
  font-size: 21px;
}
#wrapper #dialog span {
  font-size: 90%;
}
#wrapper #dialog #form {
  max-width: 240px;
  margin: 25px auto 0;
}
#wrapper #dialog #form input {
  margin: 0 5px;
  text-align: center;
  line-height: 35px;
  font-size: 13px;
  border: solid 1px #ccc;
  box-shadow: 0 0 5px #ccc inset;
  outline: none;
  width: 100%;
  transition: all 0.2s ease-in-out;
  border-radius: 3px;
}
#wrapper #dialog #form input:focus {
  border-color: purple;
  box-shadow: 0 0 5px purple inset;
}
#wrapper #dialog #form input::-moz-selection {
  background: transparent;
}
#wrapper #dialog #form input::selection {
  background: transparent;
}
#wrapper #dialog #form button {
  margin: 30px 0 50px;
  width: 100%;
  padding: 6px;
  background-color: #4e0e31;
  border: none;
  text-transform: uppercase;
}
#wrapper #dialog button.close {
  border: solid 2px;
  border-radius: 30px;
  line-height: 19px;
  font-size: 120%;
  width: 22px;
  position: absolute;
  right: 5px;
  top: 5px;
}
#wrapper #dialog div {
  position: relative;
  z-index: 1;
}
#wrapper #dialog img {
  position: absolute;
  bottom: -70px;
  right: -63px;
}

</style>
</head>
<body>
<div id="wrapper">

  <div id="dialog">
    <div class="form-group" id="success_div" style="color:green;"></div>
    <div class="form-group" id="error_div" style="color:red;"></div>
    <!-- <button class="close">×</button> -->
    <h3>Please enter the verification code we sent via SMS:</h3>
    <span>(we want to make sure it's you before we contact our movers)</span>
    <form id="otp_verification">
    <div id="form">

      <input type="hidden" name="user_type" value="O" maxlength="6" />
      <input type="hidden" name="uid" value="<?php echo $op_user_id ;?>" maxlength="6" />
      <input type="text" maxlength="6" name="otp" id="otpcode" />
      <button class="btn btn-primary btn-embossed" onclick="verify_otp();return false;">Verify</button>
    </div>
  </form>
    
    <div>
      Didn't receive the code?<br />
      <a onclick="resend_otp();return false;" style="cursor: pointer;">Send code again</a><br />
    </div>
  </div>
</div>
</body>
<script>
  

  function verify_otp()
  {
    var otpcode = $('#otpcode').val();
    if(otpcode == ''){
      $('#error_div').html('Please enter OTP.');
    }else{
      var form_data = $('#otp_verification').serialize();
      var url =   '<?php echo Url::base(true); ?>/site/verify-otp';
      $.ajax({
        url: url, 
        data: form_data, 
        type: "POST", 
        dataType: "json", 
        success: function(result){
              if(result.status == 1){
                // location.reload();
                window.location.href = '<?php echo Url::base(true); ?>/site';
              }else{
                $('#error_div').html(result.msg);
              }
          }
      }); 
    }   
  }

  function resend_otp()
  {
      var form_data = $('#otp_verification').serialize();
      var url =   '<?php echo Url::base(true); ?>/site/resend-otp';
      $.ajax({
        url: url, 
        data: form_data, 
        type: "POST", 
        dataType: "json", 
        success: function(result){
              if(result.status == 1){
                $('#success_div').html(result.msg);
                $('#error_div').html('');
              }else{
                $('#error_div').html(result.msg);
                $('#success_div').html('');
              }
          }
      }); 
  }
</script>

</html>