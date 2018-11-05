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
	
}
