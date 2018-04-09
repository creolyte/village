<?php defined('BASEPATH') or die('Unauthorized Access');

class Mcr_Api_Model extends MY_Model {

	protected static $tablename = CREO_TABLE_API;

	function __construct()
	{
		parent::__construct();
	}

	public function getApiByKey( $key = '' )
	{
		if( empty($key) )
		{
			array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `key` = ?';
		$bind 	= array( $key );
		return $this->db->query( $query, $bind )->row_array();
	}
}
