<?PHP
ini_set("max_execution_time",3000000);
require("../nusoap/lib/nusoap.php");
// No params required for this soap call
$parms = array();
$soapclient = new soapclient('http://63.121.131.222/AnchorWebservice.asmx?WSDL', "wsdl");
$hdr = "<SecurityHeader xmlns='http://tempuri.org/AnchorWebservice/AnchorWebservice'>
<Username>381857</Username>
<Password>ccs857</Password>
</SecurityHeader>";
$result = $soapclient->call( 'SecurityTest',
$parms,
'http://63.121.131.222/',
'http://63.121.131.222/AnchorWebservice/AnchorWebservice/SecurityTest',
$hdr,
false,
'rpc',
'literal'
);
die('HERE IT IS ' . $soapclient->response . ' <BR><BR><BR>.' . print_r($result, true));
?>
