<?php defined('BASEPATH') or die('Unauthorized Access');

class Mcr_place_Model extends MY_Model {

	protected static $tablename = CREO_TABLE_PLACE;

	function __construct()
	{
		parent::__construct();
	}

	public function getPlace( $id = '' )
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

	public function searchPlaceByName( $name = '' )
	{
		if( empty($name) )
		{
			return array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `name` LIKE "%'.html_escape($name).'%"';
		return $this->db->query( $query )->result_array();
	}

	public function searchPlaceByChineseSimplified( $name = '' )
	{
		if( empty($name) )
		{
			return array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `chinese_simplified` LIKE "%'.html_escape($name).'%"';
		return $this->db->query( $query )->result_array();
	}

	public function searchPlaceByPinyin( $name = '' )
	{
		if( empty($name) )
		{
			return array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `chinese_pinyin` LIKE "%'.html_escape($name).'%"';
		return $this->db->query( $query )->result_array();
	}

	public function searchPlaceByAltSpellingInternal( $name = '' )
	{
		if( empty($name) )
		{
			return array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `alt_spelling_internal` LIKE "%'.html_escape($name).'%"';
		return $this->db->query( $query )->result_array();
	}

	public function searchPlaceByAltSpellingOversea( $name = '' )
	{
		if( empty($name) )
		{
			return array();
		}

		$query 	= 'SELECT * FROM `'.self::$tablename.'`'
				. ' WHERE `alt_spelling_oversea` LIKE "%'.html_escape($name).'%"';
		return $this->db->query( $query )->result_array();
	}
}
