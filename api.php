<?php

/** define the SOAP client using the url for the service**/

$SoapiClient = new soapclient('http://api.3dcart.com/cart.asmx?WSDL', array('trace' => 1));

/*array trace helps so that we can see previous soap transactions for details see php.net documentation*/

/**create an array of parameters for geting the info of a customer**/

$storeUrl="christianmartonline-com.3dcartstores.com"; //the provided store URL

$userKey="56864408318045921568644083180459"; // the provided password

$callBackURL=""; // the URL in which the result will be put

$batchSize=1; // the batch number

$startNum="2"; // the starting number

$customersFilter=""; // the customer filter

$thearray = array('storeUrl' => $storeUrl, 'userKey' => $userKey,

'callBackURL' => $callBackURL, 'batchSize' => $batchSize, 'productsFilter' => $productsFilter, 'startNum' => $startNum);

/** call the service, passing the parameters and the name of the operation **/

$result = $SoapiClient->getProductCount($thearray); 

/** a quick test **/

if (is_soap_fault($result)):

echo '<h1>ERRRO</h1><pre>';

print_r($result);

echo '</pre>';

else:

echo '<h1>Working FINE</h1><pre>';

//print_r($result->getCustomerResult->any);
print_r($result);

echo '</pre>';

endif;

?>
