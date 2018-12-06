<?php

namespace common\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use nox\http\soap\HttpSoapClient;

class Sms extends Component {

	/*public Login(LoginForm &$model) {

	}*/

	public function sendSms($to, $text) {
		$endpoint = 'http://malert.in/new/api/api_http.php';
		$options = [
			'username' => 'MYGYM',
			'password' => 'mygymp123',
			'senderid' => 'MYGymP',
			'to' 	   => $to,
			'text' 	   => $text,
			'route'    => 'Trans',
			'type'     => 'text'
		];

		$result = $this->callAPI('GET', $endpoint,$options);
		return $result;

		}


	private function callAPI($method, $url, $data){
	   $curl = curl_init();

	   switch ($method){
		  case "POST":
			 curl_setopt($curl, CURLOPT_POST, 1);
			 if ($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			 break;
		  case "PUT":
			 curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
			 if ($data)
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			 break;
		  default:
			 if ($data)
				$url = sprintf("%s?%s", $url, http_build_query($data));
	   }

	   // OPTIONS:
	   curl_setopt($curl, CURLOPT_URL, $url);

	   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

	   // EXECUTE:
	   $result = curl_exec($curl);
	   if(!$result){die("Connection Failure");}
	   curl_close($curl);
	   return $result;
	}

	 public static function actionSendmail($template,$params,$from,$to,$bcc,$subject)
    {
    	Yii::$app->mailer->compose($template, $params)
	    ->setFrom($from)
	    ->setTo($to)
	    ->setSubject($subject)
		->setBcc($bcc)
	    ->send();
	    return true;
    }

	public static function actionSendmailattach($template,$params,$from,$to,$subject,$attachment,$bcc)
    {


    	Yii::$app->mailer->compose($template, $params)
	    ->setFrom($from)
	    ->setTo($to)
	    ->setSubject($subject)
        ->setBcc($bcc)
		->attach($attachment)
	    ->send();
	    return true;
    }

	public static function actionPincodesearch($pincode)
    {
        if (!empty($pincode)) {
            $data = '';
            try { //government api
                $data = file_get_contents("https://api.data.gov.in/resource/6176ee09-3d56-4a3b-8115-21841576b2f6?api-key=579b464db66ec23bdd000001cdd3946e44ce4aad7209ff7b23ac571b&format=json&limit=1&filters[pincode]=$pincode&fields=pincode,districtname,statename,taluk");
                $data_json = json_decode($data);
                if (!empty($data_json->records)) {
                    $pin_data  = $data_json->records[0];

                    return array("status" => "success","message" => "Success","district" => $pin_data->districtname,"state" => $pin_data->statename,'city'=>$pin_data->taluk);
                }
                else {
                    return "failed";
                }

            } catch (ErrorException $e) { //postal pin api
                $data      = file_get_contents("http://postalpincode.in/api/pincode/$pincode");
                $data_json = json_decode($data,true);
                $pin_data  = $data_json['PostOffice'][0];
                $count     = count($pin_data);

                if ($count > 0) {
                    return array("status" => "success","message"=> "Success","district" => $pin_data['District'],"state"=>$pin_data['State']);
                } else {
                    return  "failed";
                }
            }
        } else {
            return 'failed';
        }
    }


}
