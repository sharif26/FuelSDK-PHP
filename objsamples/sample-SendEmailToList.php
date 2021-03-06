<?php
//include_once('src/ET_Client.php');
spl_autoload_register( function($class_name) {
    include_once 'src/'.$class_name.'.php';
});
date_default_timezone_set('UTC');

try {	
	$myclient = new ET_Client();	
	
	$EmailIDForSendDefinition = "3113962";
	$ListIDForSendDefinition = "1729515";
	$SendClassificationCustomerKey = "2239";
	
	# Call SendEmailToList
	$response = $myclient->SendEmailToList($EmailIDForSendDefinition, $ListIDForSendDefinition,$SendClassificationCustomerKey);
	print_r('Send Status: '.($response->status ? 'true' : 'false')."\n");
	print 'Code: '.$response->code."\n";
	print 'Message: '.$response->message."\n";	
	print 'Results Length: '. count($response->results)."\n";
	print 'Results: '."\n";
	print_r($response->results);
	print "\n---------------\n";
}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>



