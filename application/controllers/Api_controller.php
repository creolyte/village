<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Controller extends CI_Controller {

	function __construct()
	{
		// Due to shared hosting mod security, must set header to prevent injection
		header('Content-type:application/json;charset=utf-8');
		parent::__construct();
	}

	function _remap($method, $params = array())
	{
		if (method_exists($this, $method))
		{
			return call_user_func_array(array($this, $method), $params);
		}
		redirect();
	}

	private function _validateKey( $key = '' )
	{
		$apiModel = CREO::getModel( CREO_TABLE_API );

		if( empty($key) )
		{
			echo json_encode( array('status'=>'false', 'msg'=>'Missing api key', 'response_code'=>$helper->getResponseCode()) );exit;
		}

		// Validate api key from database
		$api = $apiModel->getApiByKey( $key );
		if( empty($api) )
		{
			echo json_encode( array('status'=>'false', 'msg'=>'Invalid', 'response_code'=>$helper->getResponseCode()) );exit;
		}

		// Check if the api key is active or not
		if( $api['status'] !== 'active' )
		{
			echo json_encode( array('status'=>'false', 'msg'=>'Your key is not activated', 'response_code'=>$helper->getResponseCode()) );exit;
		}
		return $api;
	}

	public function index()
	{
		// do somthing
	}

	/*
		URL: domain.com/api/search
		Method: POST
		{
			"key":"api-key",
			"data":{
				"keyword":"string"
			}
		}
	*/
	public function search()
	{
		$helper		= CREO::getHelper( 'helper' );
		$logHelper	= CREO::getHelper( 'log' );
		$placeModel	= CREO::getModel( CREO_TABLE_PLACE );

		$raw		= $helper->fileGetContents();
		$params		= json_decode($raw, true);
		$apiUser	= $this->_validateKey( $params['key'] );
		$keyword	= $params['data']['keyword'];

		/* Checking */
			if( empty($keyword) )
			{
				echo json_encode( array('status'=>'false', 'msg'=>'Keyword is empty', 'response_code'=>$helper->getResponseCode()) );exit;
			}
		/* Checking */

		$string		= preg_replace('/[^\p{L}\p{N}\s]/u', '', $keyword); // Remove all symbols
		
		$normal		= $placeModel->searchPlaceByName( $string );
		$simplified	= $placeModel->searchPlaceByChineseSimplified( $string );
		$pinyin		= $placeModel->searchPlaceByPinyin( $string );
		$internal	= $placeModel->searchPlaceByAltSpellingInternal( $string );
		$oversea	= $placeModel->searchPlaceByAltSpellingOversea( $string );

		$results	= array_merge( $normal, $simplified, $pinyin, $internal, $oversea );
		$results	= array_map("unserialize", array_unique(array_map("serialize", $results)));
		$count		= count($results);

		$response				= array();
		$response['response']	= $results;
		$response['count']		= $count;

		$logHelper->createLog( $params['key'], $apiUser['id'], 'search', current_url(), 'true', 'Searched: '.$keyword );
		echo json_encode( array('status'=>'true', 'msg'=>'Success', 'response_code'=>$helper->getResponseCode(), 'response'=>$response) );exit;
	}
}
