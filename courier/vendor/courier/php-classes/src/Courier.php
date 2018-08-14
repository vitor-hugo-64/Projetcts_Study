<?php

namespace CO;

class Courier extends Model
{
	private $datas;
	
	function __construct()
	{
		
	}

	public function calculatePriceAndTerm()
	{

		$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=ZIP_CODE_ORIGIN&sCepDestino=ZIP_CODE_DESTINY&nVlPeso=WEIGHT&nCdFormato=FORMAT&nVlComprimento=LENGTH&nVlAltura=HEIGHT&nVlLargura=WIDTH&sCdMaoPropria=OWN_HAND&nVlValorDeclarado=DECLARED_VALUE&sCdAvisoRecebimento=NOTICE_OF_RECEIPT&nCdServico=SERVICE_CODE&nVlDiametro=DIAMETER&StrRetorno=RETURN_TYPE&nIndicaCalculo=INDICATE_CALCULATION";

		$url = str_replace( 'ZIP_CODE_ORIGIN', (string)$this->getZipCodeOrigin(), $url);
		$url = str_replace( 'ZIP_CODE_DESTINY', (string)$this->getZipCodeDestiny(), $url);
		$url = str_replace( 'WEIGHT', (string)$this->getWeight(), $url);
		$url = str_replace( 'FORMAT', '1', $url);
		$url = str_replace( 'LENGTH', (string)$this->getLength(), $url);
		$url = str_replace( 'HEIGHT', (string)$this->getHeight(), $url);
		$url = str_replace( 'WIDTH', (string)$this->getWidth(), $url);
		$url = str_replace( 'OWN_HAND', 'N', $url);
		$url = str_replace( 'DECLARED_VALUE', '0', $url);
		$url = str_replace( 'NOTICE_OF_RECEIPT', 'N', $url);
		$url = str_replace( 'SERVICE_CODE', (string)$this->getServiceCode(), $url);
		$url = str_replace( 'DIAMETER', (string)$this->getDiameter(), $url);
		$url = str_replace( 'RETURN_TYPE', 'xml', $url);
		$url = str_replace( 'INDICATE_CALCULATION', '3', $url);

		$this->datas = simplexml_load_string( file_get_contents( $url));

		return $this->datas;
	}
}