<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use MongoDB\Client;

class MongoController extends Controller
{

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function mongo()
	{
		//phpinfo();return;
		//$client = new \MongoDB\Client();
		$client = new Client();
		echo view('templates.print', ['data' => $client]);
		$collection = $client->demo->beers;

		$result = $collection->getCollectionName();
		echo view('templates.print', ['data' => $result]);
		$result = $collection->find()->toArray();
		echo view('templates.print', ['data' => $result]);

		//echo "Идентификатор вставленного документа '{$result->getInsertedId()}'";
	}
}
