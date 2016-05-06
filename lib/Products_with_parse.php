<?php
define( 'PARSE_SDK_DIR', './Parse/' );
// include Parse SDK autoloader
require_once( 'autoload.php' );
		use Parse\ParseClient;
		ParseClient::initialize('ntPAm53lU0m6IttYUEklvntHEbgAGOReDx0cSSai', 'tV5IOrJiHCjocc2v6d4RPgcnWodDqrRFnjLAZD52', 'zDK8MAp5X75VaCQvPW2vWce1iMTj77ECLOhQoC9C');
		use Parse\ParseQuery;
 


class Products_with_parse
{

	function __construct()
	{


	}

	// Function to get the products saved on parse.com
	function get_products_array_with_parse()
	{ 
		// Suery to retrieve our products in parse
		$query = new ParseQuery("products");
		$results = $query->find();
		$result_array=array();
		// Trasform the object result into an array
		for ($i = 0; $i < count($results); $i++) {
			$object = $results[$i];
			$array_to_push=array(
				"name"=>$object->get('name'),
				"price"=>$object->get('price'),
				"description"=>$object->get('description'),
				"img_link"=>$object->get('img_link'),
				"mano_link"=>$object->get('mano_link'),


				);
			array_push($result_array,$array_to_push);
		}

		return $result_array;

	}
	





}