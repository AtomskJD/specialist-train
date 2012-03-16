<?php
		// Создать SOAP-клиента
		$client = new SoapClient("http://localhost/course 3/soap/stock.wsdl");
		// Послать SOAP-запрос c получением результат
		try{
		$result = $client->getStock("0");
		// var_dump($client->__getFunctions() );
		echo $result;
		}catch(SoapFault $e){
			echo $e->getMessage();
		}
	
?>