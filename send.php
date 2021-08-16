<?php
	define('SERVER_API_KEY', 'AAAA7AhR99g:APA91bG189OsUI34-X8dzT326MP5ZS3zXVq12FxqkPsQ2KKtBY1zC01xbJm5ceTpOV22nGlKQknk8jDdmXZs2zYOgAZpaeIMiTjLlATaTvp4zfBoP80-u6TK-y6VWwEOWW3WkO8EeYCa');


	$tokens = ['cbJ5KZhrQLOeLtpMawKtgv:APA91bHqiRJg2g2hU3RsbdfqAM4Q5nvsS95HA0ih4accrvJ6eyNEHqZ0r3V7MZs6EBwPJyIepXpMRcSdE57-4tDfTF94QWKnKz3GkgtXKLPBb5y5Almx15DVHgPrYF8gcuRq5FL5QoTy'];

	$header = [
		'Authorization: key=' .SERVER_API_KEY,
		'Content-type: application/json'
	];

	$msg = [
		'title' => 'Testing PHP Native',
		'body' => 'Testing Body Notification from PHP',
		'icon' => '',
		'image' => ''
	];

	$payload = [
		'registration_ids' => $tokens,
		'notif' => $msg
	];

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS =>'{
							  "registration_ids":["cbJ5KZhrQLOeLtpMawKtgv:APA91bHqiRJg2g2hU3RsbdfqAM4Q5nvsS95HA0ih4accrvJ6eyNEHqZ0r3V7MZs6EBwPJyIepXpMRcSdE57-4tDfTF94QWKnKz3GkgtXKLPBb5y5Almx15DVHgPrYF8gcuRq5FL5QoTy"],
							  "notification": {
							      "title":"Notification From PHP Native",
							      "body":"Body of your notification"
							  },
							  "data" :{
							      "pengumuman_id" : 1
							  }
							}',
	  CURLOPT_HTTPHEADER => $header,
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	if($err){
		echo "cUrl Error ".$err;
	}else{
		echo "<pre>";
		print_r($response);
		echo "</pre>";
		die();
	}

?>