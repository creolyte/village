<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Place_Controller extends CI_Controller {

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
		redirect('/');
	}

	public function view( $id = '' )
	{
		$msg		= array();
		$helper		= CREO::getHelper( 'helper' );
		$logHelper	= CREO::getHelper( 'log' );
		$placeModel	= CREO::getModel( CREO_TABLE_PLACE );

		$place = $placeModel->getPlace( $id );
		if( empty($id) || empty($place) )
		{
			$msg[] = $helper->prepareSweetMessage( 'Opps!', 'Place not found' );
			$helper->showMessages( '/', $msg, $params );
		}

		$data					= array();
		$data['layoutName']		= 'placeView';
		$data['layoutTitle']	= '';
		$data['layoutDesc']		= '';
		$data['place']			= $place;

		$data['html'] = CREO::getTemplate( CREO_TEMPLATE_PATH.'/layouts/'.$data['layoutName'], $data, true );
		CREO::loadTemplate( CREO_TEMPLATE_PATH.'/layouts/main', $data );
	}
}
