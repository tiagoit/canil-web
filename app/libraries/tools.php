<?php

class Tools {
	
	/**
	 * Function to add empty option to select lists
	 * 
	 * @param $selectList array
	 * @param $emptyLabel string to use as label for empty option
	 * @author rtconner
	 */
	public static function withEmpty($selectList, $emptyLabel='') {
		return array(''=>$emptyLabel) + $selectList;
	}

	/**
	 *	Remove acentos e espaços de uma string para usá-la em uma URL.
	 *	@param $str string
	 *	@return $str string
	 */
	public static function nameToUrl($str) {
		// return preg_replace("/[^a-zA-Z0-9 ]/", "", );
		$str = strtr(utf8_decode($str), utf8_decode("áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ "), "aaaaeeiooouucAAAAEEIOOOUUC-");
		$str = strtolower($str);
		return $str;
	}

}