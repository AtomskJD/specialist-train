<pre>
<?php
	$client = new SoapClient("http://www.cbr.ru/DailyInfoWebServ/DailyInfo.asmx?WSDL");
	var_dump($client->__getFunctions() );
	// $res = $client->EnumValutes(true);
	// var_dump($res);
?>
</pre>