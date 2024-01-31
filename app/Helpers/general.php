<?php

if (!function_exists('generateUniqueId')) {
	function generateUniqueId() {
		$letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$numbers = '123456789';

		$randomLetters = str_shuffle($letters);
		$randomNumbers = str_shuffle($numbers);

		$id = substr($randomLetters, 0, 3) . substr($randomNumbers, 0, 3);

		return $id;
	}

}

if (!function_exists('get_ingredients')) {
	function get_ingredients($ingredients = '') {
		return get_ingredients_img($ingredients);
	}
}


if (!function_exists('get_ingredients_img')) {
	function get_ingredients_img($ingredients) {
		include app_path() . '/Helpers/ingredient_img.php';
		return $ingredients_img[$ingredients];
	}
}


if (!function_exists('moveValueByIndex')) {
	function moveValueByIndex( array $array, $from=null, $to=null )
	{
	if ( null === $from )
	{
	$from = count( $array ) - 1;
	}

	if ( !isset( $array[$from] ) )
	{
	throw new Exception( "Offset $from does not exist" );
	}

	if ( array_keys( $array ) != range( 0, count( $array ) - 1 ) )
	{
	throw new Exception( "Invalid array keys" );
	}

	$value = $array[$from];
	unset( $array[$from] );

	if ( null === $to )
	{
	array_push( $array, $value );
	} else {
	$tail = array_splice( $array, $to );
	array_push( $array, $value );
	$array = array_merge( $array, $tail );
	}

	return $array;
	}
}


if (!function_exists('processShortCode')) {
	function processShortCode($body, $replaceData = []) {
		$message = $body;
		foreach ($replaceData as $key => $value) {
			$message = str_replace('{{' . $key . '}}', $value, $message);
		}
		return $message;
	}
}

if (!function_exists('decimalPlace')) {
	function decimalPlace($number) {

		return number_format($number, 2);
		

	}

}


if (!function_exists('storage_asset')) {
	function storage_asset($path) {

		return 'https://storage.suyauniversity.com/'.$path;
		

	}

}