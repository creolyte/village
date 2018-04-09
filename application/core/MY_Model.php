<?php defined('BASEPATH') or die('Unauthorized Access');

class MY_Model extends CI_Model {

	protected static $tablename = '';
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add( $data = array(), $returnId = false )
	{
		if( !empty($data) )
		{
			$this->db->insert( $this::$tablename, $data );

			if( $returnId )
			{
				return $this->db->insert_id();
			}

			return true;
		}

		return false;
	}

	public function addBatch( $data = array() )
	{
		if( empty($data) )
		{
			return false;
		}

		$this->db->insert_batch( $this::$tablename, $data);
		return true;
	}

	public function update( $data = array(), $pointer = array() )
	{
		if( empty($data) || empty($pointer) )
		{
			return false;
		}

		$this->db->update( $this::$tablename, $data, $pointer );
		return true;
	}

	/*
		Sample:
		$data = array(
		   array(
		      'title' => 'My title' , (pointer must be inside data)
		      'name' => 'My Name 2' ,
		      'date' => 'My date 2'
		   ),
		   array(
		      'title' => 'Another title' ,
		      'name' => 'Another Name 2' ,
		      'date' => 'Another date 2'
		   )
		);

		$pointer = indicate which column to point, eg: "id"
	*/
	public function updateBatch( $data = array(), $pointer = '' )
	{
		if( empty($data) || empty($pointer) )
		{
			return false;
		}

		$this->db->update_batch( $this::$tablename, $data, $pointer );
		return true;
	}

	public function delete( $pointer = array() )
	{
		if( empty($pointer) )
		{
			return false;
		}
		$this->db->delete( $this::$tablename, $pointer );
		return true;
	}
}
