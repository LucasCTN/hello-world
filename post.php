<?php
	$curl = curl_init();

	//Set request link to send a message to a user.
	curl_setopt($curl, CURLOPT_URL, 'API_LINK_HERE');
	
	//Setting headers. Authorization NEED to have "Bearer".
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Voat-ApiKey: API_PUBLIC_KEY_HERE',
		'Authorization: Bearer ACCESS_TOKEN_HERE' 
	));

	//Putting payloads in the variable $data
	$data = '{"recipient": "Luk3","subject": "Test","message": "Hello"}';

	//Set request as POST
	curl_setopt($curl, CURLOPT_POST, true);
	
	//Set info in $data as payloads
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

	//Help to fix a certificate error the code will give. This is not a safe fix. To a better, follow the instructions on the page
	// http://unitstep.net/blog/2009/05/05/using-curl-in-php-to-access-https-ssltls-protected-sites/
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	
	//In case of error, show curl_error()
	if(curl_errno($curl)){
		echo 'Curl error: ' . curl_error($curl);
	}
	
	// Close request to clear up resources
	curl_close($cURL);

	// Echo request to get the info. If the request is not successful, this line will show nothing (optional)
  	echo "<br>Result: ".$resp."<br>";
?>
