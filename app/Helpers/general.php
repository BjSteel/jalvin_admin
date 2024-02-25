<?php
use App\Models\Property;

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

		return 'https://storage.jalvinhomes.com/properties/'.$path;
		

	}

}

function countWordOccurrences($data_type, $column, $word){
	// Initialize an array to store the counts
	$wordCounts = 0;

	// Get all properties from the database
	$properties = Property::all();

	// Loop through each property
	foreach ($properties as $property) {
		// Decode the JSON data in the property_type column
		if($data_type == 'list'){
			$propertyTypes = json_decode($property->$column);
		}else{
			$propertyTypes = $property->$column;
		}

		// Initialize count for the current property
		$count = 0;

		// Check if the decoded property types is an array
		if (is_array($propertyTypes)) {
			// Loop through each property type
			foreach ($propertyTypes as $type) {
				// Check if the word exists in the property type
				if (strpos($type, $word) !== false) {
					// Increment the count if the word exists
					$count++;
				}
			}
		}

		// Store the count for the current property
		$wordCounts = $count;
	}

	// Return the word counts
	return number_format($wordCounts);
}