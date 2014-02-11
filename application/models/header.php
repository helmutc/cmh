<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends CI_Model {

	public function __construct() 
	{
        		parent::__construct();
    	}
		public function dataext() 
	{
		$dia = date('d');
		$mes = date('F');
		$ano = date('Y');
		$dsemana = date('l');
			switch ($mes) {
			case 'January':
				$mes = "Janeiro";
				break;
 			case 'February':
				$mes = "Fevereiro";
				break;
			case 'March':
				$mes = "Mar&ccedil;o";
				break;
			 case 'April':
				$mes = "Abril";
				break;
 			case 'May':
				$mes = "Maio";
				break;
 			case 'June':
				$mes = "Junho";
				break;
 			case 'July':
				$mes = "Julho";
				break;
 			case 'August':
				$mes = "Agosto";
				break;
 			case 'September':
				$mes = "Setembro";
				break;
			 case 'October':
				$mes = "Outubro";
				break;
 			case 'November':
				$mes = "Novembro";
				break;
 			case 'December':
				$mes = "Dezembro";
				break;
			}
			switch ($dsemana) {
 			case 'Monday':
				$dsemana = "Segunda";
				break;
 			case 'Tuesday':
				$dsemana = "Ter&ccedil;a";
				break;
 			case 'Wednesday':
				$dsemana = "Quarta";
				break;
 			case 'Thursday':
				$dsemana = "Quinta";
				break;
 			case 'Friday':
				$dsemana = "Sexta";
				break;
 			case 'Saturday':
				$dsemana = "S&aacute;bado";
				break;
 			case 'Sunday':
				$dsemana = "Domingo";
				break;
			}
		$dataext = "Hoje &eacute; $dsemana, $dia de $mes de $ano";
		return $dataext;
	}
	public function dtn() 
	{
	$data = date('h');
	if ($data < 12) {
		return "Bom dia ";
		} elseif ($data >= 12 && $data <= 19) {
		return "Boa tarde ";
		} elseif ($data >= 20) {
			return "Boa noite ";
		}
	}
}

/* End of file header.php */
/* Location: ./application/models/header.php */
