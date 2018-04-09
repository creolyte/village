<?php defined('BASEPATH') or die('Unauthorized Access');

class Ajax_Controller extends CI_Controller {

	function __construct( $param = array() )
	{
		parent::__construct();
		date_default_timezone_set( 'Asia/Kuala_Lumpur' );
		$this->lang->load('en_lang', 'english');
	}

	function _remap($method, $params = array())
	{
		if (method_exists($this, $method))
		{
			return call_user_func_array(array($this, $method), $params);
		}
		exit;
	}

	private function _validate()
	{

	}

	public function index()
	{
		return;
	}
}
