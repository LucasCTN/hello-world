<?php

	$curl = curl_init();

	//Set request link to get info in a subreddit.
	curl_setopt($curl, CURLOPT_URL, 'API_LINK_HERE');

	//Setting headers.
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Voat-ApiKey: API_PUBLIC_KEY_HERE',
	));

	// Send the request & save response to $resp
	$resp = curl_exec($curl);

	// Close request to clear up resources
	curl_close($curl);

	// Echo request to get the info (optional)
	echo ($resp);
?> 
