<?php defined('BASEPATH') or die('Unauthorized Access');

class Mcr_User_Model extends MY_Model {

	protected static $tablename = CREO_TABLE_USER;

	function __construct()
	{
		parent::__construct();
	}

	public function getUser( $id = '' )
	{
		$query 	= 'SELECT * FROM `'.self::$tablename.'`';
		if( empty($id) )
		{
			return $this->db->query( $query )->result_array();
		}
		else
		{
			$query .= ' WHERE `id` = ?';
			$bind = array( $id );
			return $this->db->query( $query, $bind )->row_array();
		}
	}

	public function getUserByEmail( $email = '' )
	{
		if( empty($email) )
		{
			return array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `email` = ?';

		$bind 	= array( $email );
		return $this->db->query( $query, $bind )->row_array();
	}

	public function getUserByAlias( $alias = '' )
	{
		if( empty($alias) )
		{
			return array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `alias` = ?';

		$bind 	= array( $alias );
		return $this->db->query( $query, $bind )->row_array();
	}
}
