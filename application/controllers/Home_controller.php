<?php defined('BASEPATH') OR exit('No direct script access allowed');
// Generate sitemap at https://www.xml-sitemaps.com/
// Submit sitemap at https://www.google.com/webmasters/tools/sitemap-list
// Generate and submit sitemap at https://www.bing.com/webmaster/toolbox/webmaster

class Home_Controller extends CI_Controller {

	function __construct()
	{
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

	private function validate()
	{
		// do something
	}

	public function index()
	{
		$data					= array();
		$data['layoutName']		= 'home';
		$data['layoutTitle']	= '';
		$data['layoutDesc']		= '';

		$data['html'] = CREO::getTemplate( CREO_TEMPLATE_PATH.'/layouts/'.$data['layoutName'], $data, true );
		CREO::loadTemplate( CREO_TEMPLATE_PATH.'/layouts/main', $data );
	}

	public function search()
	{
		$msg		= array();
		$helper		= CREO::getHelper( 'helper' );
		$logHelper	= CREO::getHelper( 'log' );
		$placeModel	= CREO::getModel( CREO_TABLE_PLACE );

		$q			= empty($_GET['q'])?'':$_GET['q'];
		$string		= preg_replace('/[^\p{L}\p{N}\s]/u', '', $q); // Remove all symbols
		
		$normal		= $placeModel->searchPlaceByName( $string );
		$simplified	= $placeModel->searchPlaceByChineseSimplified( $string );
		$pinyin		= $placeModel->searchPlaceByPinyin( $string );
		$internal	= $placeModel->searchPlaceByAltSpellingInternal( $string );
		$oversea	= $placeModel->searchPlaceByAltSpellingOversea( $string );

		$response	= array_merge( $normal, $simplified, $pinyin, $internal, $oversea );
		$response	= array_map("unserialize", array_unique(array_map("serialize", $response)));
		$count		= count($response);

		$data					= array();
		$data['layoutName']		= 'home';
		$data['layoutTitle']	= 'Search results';
		$data['layoutDesc']		= '';
		$data['q']				= $q;
		$data['response']		= $response;
		$data['count']			= $count;

		$data['html'] = CREO::getTemplate( CREO_TEMPLATE_PATH.'/layouts/'.$data['layoutName'], $data, true );
		CREO::loadTemplate( CREO_TEMPLATE_PATH.'/layouts/main', $data );
	}
}
