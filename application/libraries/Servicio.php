<?php  

defined('BASEPATH') OR exit('No direct script access allowed') ;

class Servicio
{
	private $url = 'http://localhost/webService/index_ws.php?';
	private $parametros;

	public function __construct($param)
	{
		$this->parametros = $param['parametros'];
	}

	function peticion(){
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$this->url.$this->parametros);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);
		return json_decode($result, true);
	}
}
?>

